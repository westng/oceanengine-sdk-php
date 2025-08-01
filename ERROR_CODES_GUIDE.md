# 错误码说明指南

## 概述

巨量引擎 API 的错误处理机制比较特殊，涉及两种不同类型的错误码：**HTTP 状态码**和**业务错误码**。本 SDK 的重试机制同时支持这两种错误码。

## 错误码类型

### 1. HTTP 状态码

HTTP 状态码是 HTTP 协议层面的错误码，表示 HTTP 请求的处理状态：

| 状态码 | 说明           | 是否重试 |
| ------ | -------------- | -------- |
| 200    | 成功           | ❌       |
| 408    | 请求超时       | ✅       |
| 429    | 请求过于频繁   | ✅       |
| 500    | 服务器内部错误 | ✅       |
| 502    | 网关错误       | ✅       |
| 503    | 服务不可用     | ✅       |
| 504    | 网关超时       | ✅       |

### 2. 业务错误码

业务错误码是巨量引擎 API 特有的错误码，在 HTTP 状态码为 200 的情况下，响应体中包含业务层面的错误信息：

| 错误码 | 说明              | 是否重试 | 示例响应                                             |
| ------ | ----------------- | -------- | ---------------------------------------------------- |
| 0      | 成功              | ❌       | `{"code": 0, "message": "success", "data": {...}}`   |
| 40100  | 整体频控          | ✅       | `{"code": 40100, "message": "Too many requests"}`    |
| 40105  | access_token 无效 | ❌       | `{"code": 40105, "message": "access_token无效"}`     |
| 40110  | 开发者频控        | ✅       | `{"code": 40110, "message": "Too many requests"}`    |
| 50000  | 超时              | ✅       | `{"code": 50000, "message": "请求超时"}`             |
| 50001  | 系统繁忙          | ✅       | `{"code": 50001, "message": "系统繁忙，请稍后重试"}` |
| 50002  | 服务暂时不可用    | ✅       | `{"code": 50002, "message": "服务暂时不可用"}`       |
| 50003  | 参数错误          | ❌       | `{"code": 50003, "message": "参数错误"}`             |
| 50004  | 权限不足          | ❌       | `{"code": 50004, "message": "权限不足"}`             |
| 50005  | 资源不存在        | ❌       | `{"code": 50005, "message": "资源不存在"}`           |

## 重试机制

### 重试条件

SDK 会在以下情况下进行重试：

1. **HTTP 状态码重试**：当 HTTP 状态码在可重试列表中时
2. **业务错误码重试**：当 HTTP 状态码为 200，但业务错误码在可重试列表中时
3. **网络异常重试**：连接超时、服务器异常等

### 重试策略

- **指数退避**：重试间隔逐渐增加（1s, 2s, 4s...）
- **最大重试次数**：默认 3 次，可配置
- **可配置错误码**：支持自定义可重试的 HTTP 状态码和业务错误码

## 配置方法

### 1. 通过客户端对象配置

```php
use OceanEngineSDK\OceanEngineClient;

$client = new OceanEngineClient(TOKEN);

// 配置重试参数
$client->setRetryConfig(
    maxRetries: 3,                                    // 最大重试次数
    retryDelay: 1000,                                 // 基础重试延迟（毫秒）
    retryableStatusCodes: [408, 429, 500, 502, 503, 504], // 可重试HTTP状态码
    enableRetry: true,                                // 是否启用重试
    retryableBusinessCodes: [40100, 40110, 50000]    // 可重试业务错误码
);

// 动态控制重试开关
$client->setRetryEnabled(true);   // 启用重试
$client->setRetryEnabled(false);  // 禁用重试
```

### 2. 通过环境变量配置

```env
# .env文件
HTTP_ENABLE_RETRY=true
HTTP_MAX_RETRIES=3
HTTP_RETRY_DELAY=1000
HTTP_RETRYABLE_BUSINESS_CODES=40100,40110,50000
```

### 3. 通过系统环境变量

```bash
export HTTP_ENABLE_RETRY=true
export HTTP_MAX_RETRIES=3
export HTTP_RETRY_DELAY=1000
export HTTP_RETRYABLE_BUSINESS_CODES="40100,40110,50000"
```

## 实际应用场景

### 场景 1：频控重试

```php
// 当API返回40100/40110错误码时，表示请求频率超限
// 可以配置重试，建议较长延迟
$client->setRetryConfig(
    maxRetries: 3,
    retryDelay: 2000,  // 2秒延迟
    enableRetry: true,
    retryableBusinessCodes: [40100, 40110]
);
```

### 场景 2：系统错误重试

```php
// 当API返回5开头的错误码时，表示系统临时问题
// 可以配置重试，建议较短延迟
$client->setRetryConfig(
    maxRetries: 5,
    retryDelay: 1000,  // 1秒延迟
    enableRetry: true,
    retryableBusinessCodes: [50000, 50001, 50002]
);
```

### 场景 3：禁用重试

```php
// 某些场景下可能需要禁用重试
$client->setRetryEnabled(false);
```

## 错误处理最佳实践

### 1. 区分错误类型

```php
try {
    $response = $client->module('Account')->AccountInfo->AdvertiserInfo()
        ->setParams($args)
        ->send();
} catch (OceanEngineException $e) {
    $errorCode = $e->getErrorCode();

    switch ($errorCode) {
        case 40105:
            // access_token 无效，需要重新授权
            echo "需要重新授权";
            break;
        case 40100:
        case 40110:
            // 频控错误，可以重试
            echo "请求频率超限，请稍后重试";
            break;
        case 50000:
            // 超时错误，可以重试
            echo "请求超时，请重试";
            break;
        default:
            // 其他错误
            echo "错误: " . $e->getErrorMessage();
    }
}
```

### 2. 配置合适的重试策略

```php
// 生产环境推荐配置
$client->setRetryConfig(
    maxRetries: 3,
    retryDelay: 1000,
    enableRetry: true,
    retryableBusinessCodes: [40100, 40110, 50000, 50001, 50002]
);
```

### 3. 监控重试情况

```php
// 可以通过日志监控重试情况
$client->setRetryConfig(
    maxRetries: 3,
    retryDelay: 1000,
    enableRetry: true,
    retryableBusinessCodes: [40100, 40110, 50000]
);

// 重试会在日志中记录
```

## 注意事项

1. **不要重试所有错误**：某些错误（如参数错误、权限不足）重试无意义
2. **合理设置重试次数**：避免过度重试影响系统性能
3. **监控重试频率**：频繁重试可能表示系统有问题
4. **考虑业务逻辑**：某些业务场景可能不适合重试
5. **测试重试机制**：确保重试配置在测试环境中验证

## 常见问题

### Q: 为什么有些 5 开头的错误码不重试？

A: 不是所有 5 开头的错误码都适合重试。例如：

- `50003`（参数错误）：重试无意义
- `50004`（权限不足）：重试无意义
- `50005`（资源不存在）：重试无意义

只有系统临时错误（如超时、系统繁忙）才适合重试。

### Q: 如何知道重试是否生效？

A: 可以通过以下方式确认：

1. 查看日志中的重试记录
2. 监控请求的响应时间
3. 观察错误码的变化

### Q: 重试会影响 API 调用次数吗？

A: 是的，每次重试都会消耗 API 调用次数。建议合理配置重试策略。
