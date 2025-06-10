⚠️⚠️⚠️ 项目正在进行重构 期待 2.0 正式版本

# Marketing PHP SDK

## 概述

在技术蓬勃发展的当下，巨量引擎开放平台的 Marketing API SDK，本应是普惠所有开发者的得力工具，涵盖巨量广告、巨量千川、巨量本地推、巨量星图及企业号相关功能，从 Token 获取到请求封装、响应解释，每个环节都暗藏助力高效开发的玄机。

其本地化设计，理应为开发者开辟便捷通道，无论经验如何，都能借它在 API 调用之路上畅行无阻。可现实却令人咋舌，面对 PHP 这片高手云集、活力满满的领域，官方竟然缺失 PHP 版本的 SDK！

这简直荒谬至极。PHP 开发者们为互联网立下汗马功劳，如今却像被抛弃的孩子。看着其他语言开发者仗着官方 SDK 大步快跑，自己只能徒手在荆棘中挣扎，太不公平！好比马拉松赛场，别人装备精良、补给充足，自己却赤脚前行、无水可饮。

幸有补救性 SDK，让 PHP 开发者不至于掉队，能凭本事搭起投放管理系统，但背后是他们付出的诸多额外心血。官方这种"偏心"做法，实在该反省，给 PHP 开发者们一个交代！

## 使用条件

### 开发者条件
- 使用 SDK 需要首先注册成为巨量引擎开发者，请参考[开发者快速入门文档](https://open.oceanengine.com/labels/7/docs/1696710498372623)
- 使用 SDK 需要先拥有 API 的访问权限，所有 SDK 的使用与应用拥有的权限组相关联

### 环境要求

- PHP >= 8.0
- curl 扩展支持
- 推荐使用 Composer 安装依赖

## 安装

```shell
composer require westng/oceanengine-sdk-php
```

## 🚀 快速入门

### 用户授权（获取 Access Token）

#### 1. 获取授权 URL

| 参数     | 说明                             | 默认值             | 示例值              | 版本  |
| -------- | -------------------------------- | ------------------ | ------------------- | ----- |
| `cb_url` | 即回调链接                       | -                  | https://xxx.xxx.xxx | 1.0.0 |
| `scope`  | 即授权范围（全部权限 null 即可） | -                  | -                   | 1.0.0 |
| `state`  | 自定义参数                       | your_custom_params | -                   | 1.0.0 |
| `type`   | 授权类型                         | QC                 | `QC`｜`AD`          | 1.0.0 |

```php
<?php

declare(strict_types=1);
/**
 * This file is part of Marketing PHP SDK.
 *
 * @link     https://github.com/westng/oceanengine-sdk-php
 * @document https://github.com/westng/oceanengine-sdk-php
 * @contact  westng
 * @license  https://github.com/westng/oceanengine-sdk-php/blob/main/LICENSE
 */
use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineAuth;

require_once __DIR__ . '/../index.php';
require_once __DIR__ . '/config/config.php';

/**
 * Name 获取授权链接
 * Class GetAuthCodeUrl.
 */
class GetAuthCodeUrl
{
    public static function run(): void
    {
        try {
            $auth = new OceanEngineAuth(APPID, SECRET);
            $url = $auth->getAuthCodeUrl(CALLBACK_URL, '', 'auth_code', 'AD');
            echo "[授权链接]\n{$url}\n";
        } catch (OceanEngineException $e) {
            echo '错误类型: ' . $e->getErrorType() . PHP_EOL;
            echo '错误码: ' . $e->getErrorCode() . PHP_EOL;
            echo '错误信息: ' . $e->getErrorMessage() . PHP_EOL;
            exit(1);
        }
    }
}

GetAuthCodeUrl::run();
```

#### 2. 获取 Access Token

```php
<?php


declare(strict_types=1);

/**
 * This file is part of Marketing PHP SDK.
 *
 * @link     https://github.com/westng/oceanengine-sdk-php
 * @document https://github.com/westng/oceanengine-sdk-php
 * @contact  westng
 * @license  https://github.com/westng/oceanengine-sdk-php/blob/main/LICENSE
 */

use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineAuth;

require_once __DIR__ . '/../../index.php';
require_once __DIR__ . '/../config/config.php';

/**
 * Name 刷新Token
 * Class RefreshToken.
 */
class RefreshToken
{
    public static function run(): void
    {
        try {
            $auth = new OceanEngineAuth(APPID, SECRET);
            $rsp_data = $auth->RefreshToken(REFRESH_TOKEN);
            print_r($rsp_data);
        } catch (OceanEngineException $e) {
            echo '错误类型: ' . $e->getErrorType() . PHP_EOL;
            echo '错误码: ' . $e->getErrorCode() . PHP_EOL;
            echo '错误信息: ' . $e->getErrorMessage() . PHP_EOL;
            exit(1);
        }
    }
}

RefreshToken::run();

```

### 使用 API（基于已获取的 Token）

#### 1. 获取广告主信息
更多方法请查询tests文件，或者docs文档

```php
<?php

declare(strict_types=1);
/**
 * This file is part of Marketing PHP SDK.
 *
 * @link     https://github.com/westng/oceanengine-sdk-php
 * @document https://github.com/westng/oceanengine-sdk-php
 * @contact  westng
 * @license  https://github.com/westng/oceanengine-sdk-php/blob/main/LICENSE
 */
use Core\Exception\OceanEngineException;
use OceanEngineSDK\OceanEngineClient;

require_once __DIR__ . '/../../../index.php';
require_once __DIR__ . '/../../config/config.php';

/**
 * Name 获取广告主信息
 * Class AdvertiserInfo.
 */
class AdvertiserInfo
{
    public static function run(): void
    {
        try {
            $client = new OceanEngineClient(TOKEN);

            $args = [
                'account_ids' => ADVERTISER_IDS,
            ];

            $response = $client->module('Account')
                ->AccountInfo
                ->AdvertiserInfo()
                ->setParams($args)
                ->send();

            echo "[请求成功]\n";

            $body = $response->getBody();
            $array = json_decode((string) $body, true);

            print_r($array);  // 清晰数组输出
        } catch (OceanEngineException $e) {
            echo '错误类型: ' . $e->getErrorType() . PHP_EOL;
            echo '错误码: ' . $e->getErrorCode() . PHP_EOL;
            echo '错误信息: ' . $e->getErrorMessage() . PHP_EOL;
            exit(1);
        }
    }
}

AdvertiserInfo::run();

```

### SDK 包结构

```
docs/                                           // 接口文档
├── JULIANGQIANCHUAN.md                         // 巨量千川文档
├── JULIANGADS.md                               // 巨量广告文档
├── ACCOUNT.md                                  // 账号服务文档
├── JULIANGLOCALPUSH.md                         // 巨量本地推文档
├── TOOLS.md                                    // 工具文档
└── JULIANGSTARMAP.md                           // 巨量星图文档
src/
├── Oauth/
│   ├── GetAccessToken.php                      // 获取 AccessToken
│   └── RefreshToken.php                        // 刷新 AccessToken
├── Core/                                       // 核心包
│   ├── Autoloader/
│   │   └── Autoloader.php
│   ├── Exception/                              // 异常处理
│   ├── Helper/                                 // 助手函数
│   ├── Http/                                   // Http请求
│   └── Profile/                                // 核心
├── Api/
│   ├── Account/                                // 账号管理
│   │   ├── AdQualification/                    // 广告主信息与资质管理
│   ├── JuLiangAds/                             // 巨量广告
│   │   ├── AdsPro/                             // 巨量广告升级版
│   │   │   ├── AdAccountBudget/                // 广告账户预算
│   │   │   ├── AdManagement/                   // 广告管理模块
│   │   │   │   ├── CdpBrandGet.php             // 获取关联云图的广告主账户信息
│   │   │   │   └── Module.php                  // 模型
│   │   └── Module.php
│   ├── JuLiangQianChuan/                       // 巨量千川
│   ├── JuLiangStarMap/                         // 巨量星图
│   ├── EnterpriseAccount/                      // 企业号
│   └── JuLiangLocalPush/                       // 本地推
├── tests/                                      // 接口测试
├── LICENSE
└── README.md
```

## 当前开发进度

> 🚧 注意：账户管理\素材管理\数据报表\工具 模块部分接口在巨量各平台（广告、千川、本地推、星图）通用。

| **模块**   | **实例调用模块**                       | **状态**  | **文档链接**                         |
| ---------- | -------------------------------------- | --------- | ------------------------------------ |
| 账户管理   | `$client->module('Account')`           | ✅ 已完成 | [点击查看](docs/ACCOUNT.md)          |
| 素材管理   | `$client->module('Materials')`         | ✅ 已完成 | [点击查看](docs/MATERIALS.md)        |
| 数据报表   | `$client->module('DataReports')`       | ✅ 已完成 | [点击查看](docs/DATAREPORTS.md)      |
| 工具       | `$client->module('Tools')`             | ✅ 已完成 | [点击查看](docs/TOOLS.md)            |
| 巨量广告   | `$client->module('JuLiangAds')`        | ✅ 已完成 | [点击查看](docs/JULIANGADS.md)       |
| 巨量千川   | `$client->module('JuLiangQianChuan')`  | ✅ 已完成 | [点击查看](docs/JULIANGQIANCHUAN.md) |
| 巨量星图   | `$client->module('JuLiangStarMap')`    | ✅ 已完成 | [点击查看](docs/JULIANGSTARMAP.md)   |
| 巨量本地推 | `$client->module('JuLiangLocalPush')`  | ✅ 已完成 | [点击查看](docs/JULIANGLOCALPUSH.md) |
| 企业号     | `$client->module('EnterpriseAccount')` | ⏳ 未开始 | -                                    |

> ⚠️ 上述进度仅供参考，实际以源码为准。  
> 🧠 欢迎查看源码深入探索，接口比文档更诚实！

## 问题反馈

如在使用过程中遇到问题、建议或灵感……请无视（开玩笑的）。

> 📨 实在憋不住可以提 Issue 或 PR ～
