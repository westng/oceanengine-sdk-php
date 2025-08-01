# 测试文件迁移指南

## 概述

本次迁移将所有测试文件从使用 `require_once` 的方式改为使用 `use` 语句和自动加载器的方式，简化了配置加载流程。

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

// 加载自动加载器和配置
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
// 配置通过index.php自动加载，常量可直接使用
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

### 3. **更简洁的代码**

- 减少了 `require_once` 语句
- 配置加载更加自动化
- 代码更加简洁易读

### 4. **更好的错误处理**

- 统一的异常处理机制
- 更好的错误信息
- 更容易调试

## 迁移步骤

### 1. 更新测试文件

将测试文件中的：

```php
require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../index.php';
require_once __DIR__ . '/../../config/config.php';
```

替换为：

```php
require_once __DIR__ . '/../index.php';
```

### 2. 移除不必要的 use 语句

移除：

```php
use Tests\Config\ConfigManager;
```

### 3. 移除配置导出代码

移除：

```php
ConfigManager::getInstance()->exportConstants();
```

### 4. 验证配置加载

确保以下常量可以正常使用：

```php
echo "APPID: " . APPID . "\n";
echo "TOKEN: " . TOKEN . "\n";
echo "ADVERTISER_IDS: ";
var_dump(ADVERTISER_IDS);
```

## 配置管理

### 1. 环境变量文件

创建 `.env` 文件：

```env
# 应用配置
APPID=your_app_id_here
SECRET=your_app_secret_here

# 授权配置
TOKEN=your_access_token_here
REFRESH_TOKEN=your_refresh_token_here

# 广告主配置
ADVERTISER_ID=your_advertiser_id_here
ADVERTISER_IDS=["your_advertiser_id_here"]

# HTTP配置
HTTP_ENABLE_RETRY=true
HTTP_MAX_RETRIES=3
HTTP_RETRY_DELAY=1000
```

### 2. 配置优先级

1. **系统环境变量** (最高优先级)
2. **.env 文件**
3. **默认配置** (最低优先级)

## 测试验证

### 1. 运行测试

```bash
# 测试配置加载
php tests/Account/AccountInfo/AdvertiserInfo.php

# 测试OAuth流程
php tests/Oauth/RefreshToken.php

# 测试API调用
php tests/Api/JuLiangAds/AdsPro/ProjectList.php
```

### 2. 检查输出

确保测试文件能正常运行，没有配置相关的错误。

## 注意事项

1. **保持向后兼容**：所有现有的常量使用方式保持不变
2. **自动加载**：`index.php` 会自动加载 Composer 的 autoloader 和配置
3. **环境变量**：支持通过 `.env` 文件或系统环境变量配置
4. **错误处理**：配置加载失败会有明确的错误提示

## 常见问题

### Q: 为什么还需要 require_once index.php？

A: `index.php` 负责加载：

- Composer 的 autoloader
- 项目的自定义 autoloader
- 配置管理器
- 导出常量

### Q: 可以直接使用 ConfigManager 吗？

A: 可以，但通常不需要。常量已经自动导出，可以直接使用。

### Q: 配置加载失败怎么办？

A: 检查：

1. `.env` 文件是否存在
2. 文件权限是否正确
3. 配置格式是否正确

## 总结

本次迁移简化了测试文件的配置加载流程，使其更加现代化和易维护。所有测试文件现在只需要加载 `index.php` 即可获得完整的配置和自动加载功能。
