# HTTP 说明

SDK 当前使用 Guzzle 实现 HTTP 请求（`Core\Http\HttpRequest`）。

## 支持能力

- GET / POST / PUT / PATCH
- JSON、表单、文件上传
- 可配置重试策略
- 超时控制

## 重试配置

```php
$client->setRetryConfig(
    maxRetries: 3,
    retryDelay: 1000,
    retryableStatusCodes: [408, 429, 500, 502, 503, 504],
    enableRetry: true,
    retryableBusinessCodes: [40100, 40110, 50000]
);
```

## 关闭重试

```php
$client->setRetryEnabled(false);
```
