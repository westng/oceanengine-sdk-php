# Marketing PHP SDK

PHP Version License Composer

🚀 巨量引擎开放平台 PHP SDK - 为 PHP 开发者提供完整的巨量引擎 API 集成解决方案

## 📖 概述

在技术蓬勃发展的当下，巨量引擎开放平台的 Marketing API SDK，本应是普惠所有开发者的得力工具，涵盖巨量广告、巨量千川、巨量本地推、巨量星图及企业号相关功能，从 Token 获取到请求封装、响应解释，每个环节都暗藏助力高效开发的玄机。

其本地化设计，理应为开发者开辟便捷通道，无论经验如何，都能借它在 API 调用之路上畅行无阻。可现实却令人咋舌，面对 PHP 这片高手云集、活力满满的领域，官方竟然缺失 PHP 版本的 SDK！

这简直荒谬至极。PHP 开发者们为互联网立下汗马功劳，如今却像被抛弃的孩子。看着其他语言开发者仗着官方 SDK 大步快跑，自己只能徒手在荆棘中挣扎，太不公平！好比马拉松赛场，别人装备精良、补给充足，自己却赤脚前行、无水可饮。

幸有补救性 SDK，让 PHP 开发者不至于掉队，能凭本事搭起投放管理系统，但背后是他们付出的诸多额外心血。官方这种"偏心"做法，实在该反省，给 PHP 开发者们一个交代！

## 核心特性

- 链式调用（基于 `ChainProxy`）
- 顶层模块自动发现（`src/Api/*`）
- OAuth 授权与刷新
- 统一请求对象（`RpcRequest`）
- 单元测试 / 模块测试 / 集成测试

## 安装

```bash
composer require westng/oceanengine-sdk-php
```

## 快速开始

```php
<?php

use OceanEngineSDK\OceanEngineClient;

$client = new OceanEngineClient(TOKEN);

$response = $client->Account()
    ->AccountInfo
    ->AdvertiserInfo()
    ->setParams([
        'account_ids' => [ADVERTISER_ID],
    ])
    ->send();

echo $response->getBody();
```

## 模块入口

- `Account()`
- `DataReports()`
- `Materials()`
- `Tools()`
- `JuLiangAds()`
- `JuLiangQianChuan()`
- `JuLiangStarMap()`
- `JuLiangLocalPush()`
- `EnterpriseAccount()`

## 测试

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

集成测试读取项目根目录 `.env`：

- `TOKEN`
- `ADVERTISER_ID` 或 `ADVERTISER_IDS`
- `APPID`
- `SECRET`
- `AUTH_CODE`
- `REFRESH_TOKEN`

## 文档

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

## License

MIT
