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
| 50003  | 参数错误          | ✅       | `{"code": 50003, "message": "参数错误"}`             |
| 50004  | 权限不足          | ✅       | `{"code": 50004, "message": "权限不足"}`             |
| 50005  | 资源不存在        | ✅       | `{"code": 50005, "message": "资源不存在"}`           |

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

### 1. 通过代码配置

```php
use Core\Http\HttpRequest;

// 配置重试参数
HttpRequest::setRetryConfig(
    maxRetries: 3,                                    // 最大重试次数
    retryDelay: 1000,                                 // 基础重试延迟（毫秒）
    retryableStatusCodes: [408, 429, 500, 502, 503, 504], // 可重试HTTP状态码
    enableRetry: true,                                // 是否启用重试
    retryableBusinessCodes: [40100, 40110, 50000] // 可重试业务错误码
);
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
HttpRequest::setRetryConfig(
    maxRetries: 3,
    retryDelay: 2000,
    retryableBusinessCodes: [40100, 40110]
);
```

### 场景 2：超时重试

```php
// 当API返回50000错误码时，表示请求超时
// 可以配置重试
HttpRequest::setRetryConfig(
    maxRetries: 2,
    retryDelay: 1000,
    retryableBusinessCodes: [50000]
);
```

### 场景 3：系统错误重试

```php
// 当API返回5开头的错误码时，表示服务器问题
// 可以配置重试
HttpRequest::setRetryConfig(
    maxRetries: 2,
    retryDelay: 1000,
    retryableBusinessCodes: [50001, 50002]
);
```

### 场景 3：系统错误重试

```php
// 当API返回5开头的错误码时，表示服务器问题
// 可以配置重试
HttpRequest::setRetryConfig(
    maxRetries: 2,
    retryDelay: 1000,
    retryableBusinessCodes: [50001, 50002]
);
```

## 最佳实践

### 1. 错误码分类

- **可重试错误码**：网络问题、服务器临时错误、限流等
- **不可重试错误码**：参数错误、权限不足、资源不存在等

### 2. 重试策略

- **短延迟重试**：网络抖动、临时错误
- **长延迟重试**：限流、服务器繁忙
- **不重试**：业务逻辑错误

### 3. 监控和日志

```php
// 可以添加日志来监控重试情况
HttpRequest::setRetryConfig(
    maxRetries: 3,
    retryDelay: 1000,
    retryableBusinessCodes: [429, 50000]
);

// 在业务代码中处理错误
try {
    $response = $client->module('Account')->AccountInfo->AdvertiserInfo()->send();
} catch (Exception $e) {
    // 记录错误日志
    error_log("API调用失败: " . $e->getMessage());
}
```

## 注意事项

1. **不要重试业务逻辑错误**：如参数错误、权限不足等
2. **合理设置重试次数**：避免对服务器造成压力
3. **监控重试频率**：及时发现系统问题
4. **考虑幂等性**：确保重试不会产生副作用

## 调试技巧

### 1. 查看错误码

```php
$response = HttpRequest::curl($url, $method, $data, $headers);
$body = $response->getBody();
$data = json_decode($body, true);

echo "HTTP Status: " . $response->getStatus() . "\n";
echo "Business Code: " . ($data['code'] ?? 'N/A') . "\n";
echo "Message: " . ($data['message'] ?? 'N/A') . "\n";
```

### 2. 禁用重试进行调试

```php
HttpRequest::setRetryEnabled(false);
```

### 3. 自定义重试错误码

```php
// 只重试特定的错误码
HttpRequest::setRetryConfig(
    maxRetries: 1,
    retryDelay: 1000,
    retryableBusinessCodes: [50000] // 只重试超时
);
```
