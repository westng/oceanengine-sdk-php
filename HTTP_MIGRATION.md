# HTTP 客户端迁移：从 curl 到 GuzzleHttp

## 概述

本项目已成功将 HTTP 客户端从原生 curl 扩展迁移到 GuzzleHttp 库，同时保持了 SDK 的调用方式完全不变。新增了中间件功能来处理超时重试机制。

## 修改内容

### 1. 依赖更新

**composer.json**

```diff
"require": {
  "php": ">=8.0",
- "ext-curl": "*"
+ "guzzlehttp/guzzle": "^7.0"
}
```

### 2. HttpRequest 类重构

**src/Core/Http/HttpRequest.php**

- 移除了所有 curl 相关的代码
- 使用 GuzzleHttp\Client 替代 curl_init()
- 保持了相同的公共接口：`HttpRequest::request()`（原 `curl()` 方法已重命名）
- 支持文件上传（multipart/form-data）
- 支持 JSON 和表单数据
- 保持了 SSL 验证禁用设置

### 3. 中间件功能

#### 重试中间件

- **自动重试**：连接超时、服务器错误时自动重试
- **可配置重试次数**：默认 3 次，可通过`setRetryConfig()`配置
- **指数退避策略**：重试间隔逐渐增加（1s, 2s, 4s...）
- **可重试 HTTP 状态码**：408, 429, 500, 502, 503, 504
- **可重试业务错误码**：40100, 40110, 50000（频控错误码和 5 开头的错误码都可以重试）
- **重试开关**：可通过`HTTP_ENABLE_RETRY`或`setRetryEnabled()`控制是否启用重试

#### 超时中间件

- **连接超时**：默认 20 秒
- **请求超时**：默认 30 秒
- **可动态配置**：通过静态属性调整

#### 日志中间件

- **请求日志**：记录 HTTP 方法、URI、状态码
- **性能监控**：记录请求和响应时间
- **无依赖设计**：使用 NullLogger 避免额外依赖

### 4. 配置方法

```php
// 设置重试配置
HttpRequest::setRetryConfig(
    maxRetries: 3,           // 最大重试次数
    retryDelay: 1000,        // 基础重试延迟（毫秒）
    retryableStatusCodes: [408, 429, 500, 502, 503, 504], // 可重试HTTP状态码
    enableRetry: true,       // 是否启用重试机制
    retryableBusinessCodes: [40100, 40110, 50000]        // 可重试业务错误码
);

// 或者单独控制重试开关
HttpRequest::setRetryEnabled(true);  // 启用重试
HttpRequest::setRetryEnabled(false); // 禁用重试

// 设置超时配置
HttpRequest::$connectTimeout = 20;  // 连接超时（秒）
HttpRequest::$readTimeout = 30;     // 请求超时（秒）
```

### 5. 主要改进

#### 优势

- **更好的错误处理**：GuzzleHttp 提供更详细的异常信息
- **自动重试机制**：网络问题自动重试，提高成功率
- **更现代的 HTTP 客户端**：支持 HTTP/2、连接池等现代特性
- **更好的可测试性**：GuzzleHttp 支持模拟响应
- **更丰富的功能**：中间件、重试机制、超时控制等
- **更好的维护性**：活跃的社区支持和文档

#### 兼容性

- ✅ 保持了所有现有的 API 调用方式
- ✅ 保持了相同的参数和返回值
- ✅ 保持了相同的错误处理机制
- ✅ 支持所有 HTTP 方法（GET、POST、PUT、PATCH 等）
- ✅ 支持文件上传功能
- ✅ 支持自定义请求头

### 6. 测试文件更新

所有测试文件已更新以使用新的自动加载方式：

```php
// 新的加载方式
require_once __DIR__ . '/../index.php';

// 不再需要手动加载 vendor/autoload.php 和 config.php
```

### 7. 客户端重试配置

现在也可以通过 OceanEngineClient 对象配置重试：

```php
$client = new OceanEngineClient(TOKEN);

// 配置重试机制
$client->setRetryConfig(
    maxRetries: 3,
    retryDelay: 1000,
    retryableStatusCodes: [408, 429, 500, 502, 503, 504],
    enableRetry: true,
    retryableBusinessCodes: [40100, 40110, 50000]
);

// 动态控制重试开关
$client->setRetryEnabled(true);   // 启用重试
$client->setRetryEnabled(false);  // 禁用重试
```

## 迁移检查清单

- [ ] 更新 composer.json 依赖
- [ ] 运行 `composer update` 安装 GuzzleHttp
- [ ] 检查所有 API 调用是否正常工作
- [ ] 测试重试机制是否生效
- [ ] 验证文件上传功能
- [ ] 确认错误处理正常

## 注意事项

1. **方法名变更**：`HttpRequest::curl()` 已重命名为 `HttpRequest::request()`
2. **自动加载**：测试文件现在只需要加载 `index.php`
3. **配置方式**：支持通过客户端对象配置重试参数
4. **向后兼容**：所有现有的 API 调用方式保持不变
