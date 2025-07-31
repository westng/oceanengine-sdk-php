# 配置管理使用指南

## 概述

本项目提供了灵活的配置管理系统，支持多种配置方式，专门用于本地测试环境。

## 配置方式

### 1. 环境变量文件 (.env)

在项目根目录创建 `.env` 文件：

```bash
# 复制示例文件
cp env.example .env

# 编辑配置文件
vim .env
```

`.env` 文件示例：

```env
# 应用配置
APPID=your_app_id_here
SECRET=your_app_secret_here

# 授权配置
AUTH_CODE=your_auth_code_here
TOKEN=your_access_token_here
REFRESH_TOKEN=your_refresh_token_here

# 广告主配置
ADVERTISER_ID=your_advertiser_id_here
ADVERTISER_IDS=["your_advertiser_id_here"]

# 回调地址
CALLBACK_URL=https://your-domain.com/api/callback

# 环境配置
APP_ENV=test

# HTTP配置（可选）
HTTP_CONNECT_TIMEOUT=20
HTTP_READ_TIMEOUT=30
HTTP_ENABLE_RETRY=true
HTTP_MAX_RETRIES=3
HTTP_RETRY_DELAY=1000
HTTP_RETRYABLE_BUSINESS_CODES=40100,40110,50000
```

### 2. 系统环境变量

也可以通过系统环境变量设置：

```bash
export APPID=your_app_id_here
export SECRET=your_app_secret_here
export TOKEN=your_access_token_here
# ... 其他配置
```

### 3. 默认配置

如果没有设置环境变量或 `.env` 文件，系统会使用默认配置。

## 使用方法

### 在测试文件中使用

```php
<?php

declare(strict_types=1);

require_once __DIR__ . '/../index.php';

use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineClient;

class MyTest
{
    public static function run(): void
    {
        try {
            // 使用常量（兼容旧版本）
            $client = new OceanEngineClient(TOKEN);

            // 或者使用配置管理器
            $config = \Tests\Config\ConfigManager::getInstance();
            $client = new OceanEngineClient($config->getToken());

            // ... 其他代码
        } catch (OceanEngineException $e) {
            echo '错误: ' . $e->getMessage() . PHP_EOL;
        }
    }
}

MyTest::run();
```

### 配置管理器 API

```php
use Tests\Config\ConfigManager;

$config = ConfigManager::getInstance();

// 获取配置
$appId = $config->getAppId();
$secret = $config->getSecret();
$token = $config->getToken();
$advertiserId = $config->getAdvertiserId();
$advertiserIds = $config->getAdvertiserIds();
$callbackUrl = $config->getCallbackUrl();

// 设置配置
$config->set('CUSTOM_KEY', 'custom_value');

// 获取所有配置
$allConfig = $config->getAll();

// 检查环境
if ($config->isTestEnvironment()) {
    // 测试环境逻辑
}

// 重新加载配置
$config->reload();

// HTTP重试配置示例
HttpRequest::setRetryEnabled(true);  // 启用重试
HttpRequest::setRetryEnabled(false); // 禁用重试

// 或者通过setRetryConfig方法设置
HttpRequest::setRetryConfig(
    maxRetries: 5,
    retryDelay: 2000,
    retryableStatusCodes: [408, 429, 500, 502, 503, 504],
    enableRetry: true,
    retryableBusinessCodes: [40100, 40110, 50000] // 业务错误码
);
```

## 配置优先级

配置加载优先级（从高到低）：

1. **系统环境变量** - 最高优先级
2. **`.env` 文件** - 中等优先级
3. **默认配置** - 最低优先级

## 支持的配置项

| 配置项                          | 类型   | 说明                           | 默认值                                 |
| ------------------------------- | ------ | ------------------------------ | -------------------------------------- |
| `APPID`                         | string | 应用 ID                        | `your_app_id_here`                     |
| `SECRET`                        | string | 应用密钥                       | `your_app_secret_here`                 |
| `AUTH_CODE`                     | string | 授权码                         | `your_auth_code_here`                  |
| `TOKEN`                         | string | 访问令牌                       | `your_access_token_here`               |
| `REFRESH_TOKEN`                 | string | 刷新令牌                       | `your_refresh_token_here`              |
| `ADVERTISER_ID`                 | int    | 广告主 ID                      | `your_advertiser_id_here`              |
| `ADVERTISER_IDS`                | array  | 广告主 ID 列表                 | `["your_advertiser_id_here"]`          |
| `CALLBACK_URL`                  | string | 回调地址                       | `https://your-domain.com/api/callback` |
| `APP_ENV`                       | string | 环境标识                       | `test`                                 |
| `HTTP_CONNECT_TIMEOUT`          | int    | 连接超时（秒）                 | `20`                                   |
| `HTTP_READ_TIMEOUT`             | int    | 请求超时（秒）                 | `30`                                   |
| `HTTP_ENABLE_RETRY`             | bool   | 是否启用重试机制               | `true`                                 |
| `HTTP_MAX_RETRIES`              | int    | 最大重试次数                   | `3`                                    |
| `HTTP_RETRY_DELAY`              | int    | 重试延迟（毫秒）               | `1000`                                 |
| `HTTP_RETRYABLE_BUSINESS_CODES` | string | 可重试的业务错误码（逗号分隔） | `40100,40110,50000`                    |

## 安全注意事项

1. **不要提交敏感信息**：确保 `.env` 文件已添加到 `.gitignore`
2. **使用示例配置**：`env.example` 文件可以提交到版本控制
3. **环境变量优先**：生产环境建议使用系统环境变量

## 测试配置

运行配置测试：

```bash
php tests/test_config.php
```

这将验证配置管理器的所有功能。

## 迁移指南

### 从旧版本迁移

如果您之前使用的是 `tests/config/config.php`，只需要：

1. 将配置内容复制到 `.env` 文件
2. 在测试文件中将：

   ```php
   require_once __DIR__ . '/config/config.php';
   ```

   替换为：

   ```php
   require_once __DIR__ . '/../index.php';
   ```

3. 其他代码无需修改，常量会自动导出

### 兼容性

- ✅ 完全兼容现有的常量使用方式
- ✅ 支持新的配置管理器 API
- ✅ 支持环境变量和.env 文件
- ✅ 自动加载 HTTP 配置
- ✅ 支持重试机制开关控制
