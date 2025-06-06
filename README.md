# Marketing PHP SDK

## 概述

在技术蓬勃发展的当下，巨量引擎开放平台的 Marketing API SDK，本应是普惠所有开发者的得力工具，涵盖巨量广告、巨量千川、巨量本地推、巨量星图及企业号相关功能，从 Token 获取到请求封装、响应解释，每个环节都暗藏助力高效开发的玄机。

其本地化设计，理应为开发者开辟便捷通道，无论经验如何，都能借它在 API 调用之路上畅行无阻。可现实却令人咋舌，面对 PHP 这片高手云集、活力满满的领域，官方竟然缺失 PHP 版本的 SDK！

这简直荒谬至极。PHP 开发者们为互联网立下汗马功劳，如今却像被抛弃的孩子。看着其他语言开发者仗着官方 SDK 大步快跑，自己只能徒手在荆棘中挣扎，太不公平！好比马拉松赛场，别人装备精良、补给充足，自己却赤脚前行、无水可饮。

幸有补救性 SDK，让 PHP 开发者不至于掉队，能凭本事搭起投放管理系统，但背后是他们付出的诸多额外心血。官方这种"偏心"做法，实在该反省，给 PHP 开发者们一个交代！

## 使用条件

1. 使用 SDK 需要首先注册成为巨量引擎开发者，请参考[开发者快速入门文档](https://open.oceanengine.com/labels/7/docs/1696710498372623)
2. 使用 SDK 需要先拥有 API 的访问权限，所有 SDK 的使用与应用拥有的权限组相关联

## 安装

```shell
composer require westng/oceanengine-sdk-php
```

## 快速入门

### 申请广告主授权

- getAuthCodeUrl 参数说明
- | 参数     | 说明                           | 默认值             | 示例值              | 版本  |
  | -------- | ------------------------------ | ------------------ | ------------------- | ----- |
  | `cb_url` | 即回调链接                     | -                  | https://xxx.xxx.xxx | 1.0.0 |
  | `scope`  | 即授权范围(全部权限 null 即可) | -                  | -                   | 1.0.0 |
  | `state`  | 自定义参数                     | your_custom_params | -                   | 1.0.0 |
  | `type`   | 授权类型                       | QC                 | `QC`｜`AD`          | 1.0.0 |

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
use OceanEngineSDK\OceanEngineAuth;

// 申请广告主授权URL
$auth = new OceanEngineAuth(APPID, SECRET);
$auth->getAuthCodeUrl(CALLBACK_URL, null, AUTH_CODE, 'AD')

// 获取授权
$auth->getAccessToken(AUTH_CODE)

// 刷新授权
$auth->refreshToken(REFRESH_TOKEN)

// 业务接口需要调用
$client = $auth->makeClient(TOKEN);
$args = [
    // 业务接口请求参数
];
$req = $client::JuLiangQianChuan()
        ->AccountRel
        ->AwemeAuthorizedGet()
        ->setArgs($args)
        ->send();

var_dump($req->getBody());
```

### SDK 包结构

```
docs/
├── JULIANGQIANCHUAN.md
├── JULIANGADS.md
└── JULIANGSTARMAP.md
src/
├── AdOauth/
│   ├── GetAccessToken.php // 获取access_token
│   └── RefreshToken.php // 刷新access_token
├── Core/
│   ├── Autoloader/
│   │   └── Autoloader.php
│   ├── Exception/
│   ├── Helper/
│   ├── Http/
│   └── Profile/
├── Api/
│   ├── JuLiangAds/ // 接口平台目录
│   │   ├── AccountMgmt/ // 一级接口目录
│   │   │   ├── AccountInfo/ // 二级接口目录
│   │   │   ├── AccountRel/ // 二级接口目录
│   │   │   │   ├── AwemeAuthorizedGet.php // 具体接口文件
│   │   │   │   ├── Module.php
│   │   └── Module.php
│   ├── EnterpriseAccount/
│   └── JuLiangLocalPush/
├── test
├── LICENSE
└── README.md
```

## 其他的自己看吧

移步 tests 目录 查阅使用方法

## 开发进度

- [x] 巨量广告：`$sdk::JuLiangAds()` [使用文档](doce/JULIANGADS.md)
- [x] 巨量千川：`$sdk::JuLiangQianChuan()` [使用文档](doce/JULIANGQIANCHUAN.md)
- [x] 巨量星图：`$sdk::JuLiangStarMap()` [使用文档](doce/JULIANGSTARMAP.md)
- [ ] 企业号：`$sdk::EnterpriseAccount()`
- [ ] 巨量本地推：`$sdk::JuLiangLocalPush()`

> 🧾 本页开发进度仅供参考，可能与实际代码不符。  
> 🫡 请移步源码查看，毕竟写接口不如写代码！  
> 舅宠你一回 😠

## 问题建议与反馈

如果您在使用 SDK 过程中有任何问题与建议，请忽略！！！

## 后续计划

做完回家过年 🧨
