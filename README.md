# Marketing PHP SDK

PHP Version License Composer

[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.0-777BB4.svg?style=flat-square&logo=php)](https://www.php.net/)
[![License](https://img.shields.io/github/license/westng/oceanengine-sdk-php?style=flat-square)](LICENSE)
[![Composer](https://img.shields.io/packagist/v/westng/oceanengine-sdk-php?style=flat-square)](https://packagist.org/packages/westng/oceanengine-sdk-php)

🚀 巨量引擎开放平台 PHP SDK - 为 PHP 开发者提供完整的巨量引擎 API 集成解决方案

## 📖 概述

在技术蓬勃发展的当下，巨量引擎开放平台的 Marketing API SDK，本应是普惠所有开发者的得力工具，涵盖巨量广告、巨量千川、巨量本地推、巨量星图及企业号相关功能，从 Token 获取到请求封装、响应解释，每个环节都暗藏助力高效开发的玄机。

其本地化设计，理应为开发者开辟便捷通道，无论经验如何，都能借它在 API 调用之路上畅行无阻。可现实却令人咋舌，面对 PHP 这片高手云集、活力满满的领域，官方竟然缺失 PHP 版本的 SDK！

这简直荒谬至极。PHP 开发者们为互联网立下汗马功劳，如今却像被抛弃的孩子。看着其他语言开发者仗着官方 SDK 大步快跑，自己只能徒手在荆棘中挣扎，太不公平！好比马拉松赛场，别人装备精良、补给充足，自己却赤脚前行、无水可饮。

幸有补救性 SDK，让 PHP 开发者不至于掉队，能凭本事搭起投放管理系统，但背后是他们付出的诸多额外心血。官方这种"偏心"做法，实在该反省，给 PHP 开发者们一个交代！

## ✨ 核心特性

- 链式调用（基于 `ChainProxy`，无需再维护大量 `Module.php`）
- 顶层模块自动发现（`src/Api/*`）
- OAuth 授权流程支持（授权链接、获取 token、刷新 token）
- 统一请求模型（`RpcRequest` + `OceanEngineClient`）
- 标准化测试体系（`Unit` / `Module` / `Integration`）

## ✅ 使用条件

1. 先注册成为巨量引擎开发者。
2. 确保应用已开通对应 API 权限组。
3. 准备好调用所需参数（如 token、advertiser_id、app_id、secret 等）。

## 📦 安装

```bash
composer require westng/oceanengine-sdk-php
```

## 🚀 快速开始

### 1) 初始化客户端

```php
<?php

use OceanEngineSDK\OceanEngineClient;

$client = new OceanEngineClient('your_access_token');
```

### 2) 链式调用业务接口

```php
<?php

use OceanEngineSDK\OceanEngineClient;

$client = new OceanEngineClient('your_access_token');

$response = $client->Account()
    ->AccountInfo
    ->AdvertiserInfo()
    ->setParams([
        'advertiser_ids' => ['your_advertiser_id'],
    ])
    ->send();

echo $response->getBody();
```

### 3) 获取授权链接

```php
<?php

use OceanEngineSDK\OceanEngineAuth;

$auth = new OceanEngineAuth('your_app_id', 'your_secret');

$url = $auth->getAuthCodeUrl(
    'https://your.domain/callback',
    '',
    'your_custom_state',
    'qc'
);

echo $url;
```

### 4) 获取/刷新 Token

```php
<?php

use OceanEngineSDK\OceanEngineAuth;

$auth = new OceanEngineAuth('your_app_id', 'your_secret');

$tokenData = $auth->getAccessToken('auth_code_from_callback');
$refreshData = $auth->refreshToken('your_refresh_token');

print_r($tokenData);
print_r($refreshData);
```

## 🧭 模块入口

| 模块入口方法 | 中文说明 | 文档 |
| --- | --- | --- |
| `Account()` | 账号服务（账户信息、账户关系、资质、财务、工作台等） | [ACCOUNT.md](docs/ACCOUNT.md) |
| `DataReports()` | 数据报表（广告、直播、落地页、全域与代理报表能力） | [DATAREPORTS.md](docs/DATAREPORTS.md) |
| `Materials()` | 素材管理（图片、视频、图文、音频上传与查询管理） | [MATERIALS.md](docs/MATERIALS.md) |
| `Tools()` | 工具能力（定向、人群、评论、应用、诊断、起量等工具接口） | [TOOLS.md](docs/TOOLS.md) |
| `JuLiangAds()` | 巨量广告主业务能力（项目、广告、商品、资产等） | [JULIANGADS.md](docs/JULIANGADS.md) |
| `JuLiangQianChuan()` | 巨量千川业务能力（投放管理、全域推广、随心推等） | [JULIANGQIANCHUAN.md](docs/JULIANGQIANCHUAN.md) |
| `JuLiangStarMap()` | 巨量星图业务能力（任务、订单与投后数据分析） | [JULIANGSTARMAP.md](docs/JULIANGSTARMAP.md) |
| `JuLiangLocalPush()` | 巨量本地推业务能力（本地推投放、报表、素材、线索） | [JULIANGLOCALPUSH.md](docs/JULIANGLOCALPUSH.md) |
| `EnterpriseAccount()` | 企业号相关能力（按开放平台权限逐步补充） | - |

也支持：`$client->module('JuLiangAds')` 这种通用入口写法。

## 📚 文档导航

- [配置说明](CONFIG_GUIDE.md)
- [错误处理](ERROR_CODES_GUIDE.md)
- [HTTP 说明](HTTP_MIGRATION.md)
- [测试说明](TEST_MIGRATION.md)
- [链式调用机制](docs/CHAIN_PROXY.md)
- 模块文档：
  - [Account](docs/ACCOUNT.md)
  - [DataReports](docs/DATAREPORTS.md)
  - [Materials](docs/MATERIALS.md)
  - [Tools](docs/TOOLS.md)
  - [JuLiangAds](docs/JULIANGADS.md)
  - [JuLiangQianChuan](docs/JULIANGQIANCHUAN.md)
  - [JuLiangStarMap](docs/JULIANGSTARMAP.md)
  - [JuLiangLocalPush](docs/JULIANGLOCALPUSH.md)

## 🧪 测试

```bash
# 单元 + 模块测试
composer test

# 仅单元
composer test:unit

# 仅模块
composer test:module

# 集成（真实请求）
composer test:integration
```

`Integration` 测试会读取项目根目录 `.env`（用于测试环境）：

- `TOKEN`
- `ADVERTISER_ID` 或 `ADVERTISER_IDS`
- `APPID`
- `SECRET`
- `AUTH_CODE`
- `REFRESH_TOKEN`

## 📁 项目结构

```text
docs/                # 各业务模块文档
src/
  Api/               # API 请求类（按业务域分目录）
  Core/              # 核心能力（Client、Auth、HTTP、异常等）
  Oauth/             # OAuth 请求类
tests/
  Unit/              # 单元测试
  Module/            # 模块调用测试
  Integration/       # 真实接口集成测试
```

## 🤝 问题反馈

欢迎提交 Issue / PR，一起把 PHP 生态里的巨量引擎接入体验做得更好。

## License

MIT
