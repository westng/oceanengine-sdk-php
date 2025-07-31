# 测试文件迁移指南

## 概述

本次迁移将所有测试文件从使用 `require_once` 的方式改为使用 `use` 语句和自动加载器的方式。

## 迁移内容

### 1. 自动加载器优化

#### 修改文件：`src/Core/Autoloader/Autoloader.php`

- **添加 Tests 命名空间支持**：自动加载器现在支持 `Tests\` 命名空间
- **优化路径映射**：正确处理 `Tests\Config\ConfigManager` 到 `tests/config/ConfigManager.php` 的映射
- **移除异常抛出**：自动加载器不再抛出异常，让其他加载器有机会处理

```php
// 特殊处理Tests命名空间
if (str_starts_with($className, 'Tests\\')) {
    $relativePath = str_replace('\\', DIRECTORY_SEPARATOR, substr($className, 6));
    $testFile = dirname($directories) . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . $relativePath . '.php';
    if (is_file($testFile)) {
        include_once $testFile;
        return;
    }
}
```

### 2. 测试文件迁移

#### 迁移的文件列表

| 文件路径                                                                        | 修改内容                         |
| ------------------------------------------------------------------------------- | -------------------------------- |
| `tests/getAuthCodeUrl.php`                                                      | 移除 require_once，添加 use 语句 |
| `tests/Oauth/RefreshToken.php`                                                  | 移除 require_once，添加 use 语句 |
| `tests/Account/AccountInfo/AdvertiserInfo.php`                                  | 移除 require_once，添加 use 语句 |
| `tests/Api/JuLiangAds/AdsPro/ProjectList.php`                                   | 移除 require_once，添加 use 语句 |
| `tests/Api/JuLiangQianChuan/AdvertisingMgmt/AccountBudget/AccountBudgetGet.php` | 移除 require_once，添加 use 语句 |
| `tests/Api/JuLiangStarMap/MassiveStarMap/StarClueGet.php`                       | 移除 require_once，添加 use 语句 |
| `tests/Tools/DouYinInfluencerMgmt/ToolsAwemeInfoSearch.php`                     | 移除 require_once，添加 use 语句 |

#### 迁移模式

**之前：**

```php
use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineClient;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../index.php';
require_once __DIR__ . '/config/config.php';
```

**之后：**

```php
use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineClient;
use Tests\Config\ConfigManager;

// 加载自动加载器
require_once __DIR__ . '/../index.php';
```

#### 配置加载方式

**之前：**

```php
// 直接使用常量（通过config.php加载）
$auth = new OceanEngineAuth(APPID, SECRET);
```

**之后：**

```php
// 通过ConfigManager加载配置
$config = ConfigManager::getInstance();
$config->exportConstants();

$auth = new OceanEngineAuth(APPID, SECRET);
```

## 优势

### 1. **更现代的 PHP 实践**

- 使用命名空间和自动加载器
- 减少硬编码的文件路径
- 更好的代码组织结构

### 2. **更好的可维护性**

- 统一的配置管理方式
- 自动加载器处理依赖关系
- 减少文件间的耦合

### 3. **更好的错误处理**

- 自动加载器不再抛出异常
- 更优雅的类加载失败处理
- 支持第三方依赖的正确加载

### 4. **更好的扩展性**

- 易于添加新的测试文件
- 支持复杂的命名空间结构
- 与 Composer 生态系统兼容

## 测试验证

所有迁移后的测试文件都能正常运行：

```bash
# 测试授权链接生成
php tests/getAuthCodeUrl.php

# 测试Token刷新
php tests/Oauth/RefreshToken.php

# 测试广告主信息获取
php tests/Account/AccountInfo/AdvertiserInfo.php

# 测试项目列表获取
php tests/Api/JuLiangAds/AdsPro/ProjectList.php
```

## 注意事项

1. **命名空间使用**：在测试文件中使用 `use Tests\Config\ConfigManager;` 来引用配置管理器
2. **自动加载器**：每个测试文件都需要包含 `require_once __DIR__ . '/../index.php';` 来加载自动加载器
3. **配置加载**：在测试方法开始时调用 `ConfigManager::getInstance()->exportConstants();` 来加载配置

## 兼容性

- ✅ 完全兼容现有的测试逻辑
- ✅ 保持原有的 API 调用方式
- ✅ 支持所有现有的配置项
- ✅ 与 GuzzleHttp 等第三方依赖兼容
