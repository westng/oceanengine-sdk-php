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

#### 参数说明

getAuthCodeUrl 参数说明

| 参数     | 说明                             | 默认值             | 示例值              | 版本  |
| -------- | -------------------------------- | ------------------ | ------------------- | ----- |
| `cb_url` | 即回调链接                       | -                  | https://xxx.xxx.xxx | 1.0.0 |
| `scope`  | 即授权范围（全部权限 null 即可） | -                  | -                   | 1.0.0 |
| `state`  | 自定义参数                       | your_custom_params | -                   | 1.0.0 |
| `type`   | 授权类型                         | QC                 | `QC`｜`AD`          | 1.0.0 |

### SDK 包结构

```
docs/
├── JULIANGQIANCHUAN.md
├── JULIANGADS.md
├── ACCOUNT.md
└── JULIANGSTARMAP.md
src/
├── AdOauth/
│   ├── GetAccessToken.php         // 获取 AccessToken
│   └── RefreshToken.php           // 刷新 AccessToken
├── Core/
│   ├── Autoloader/
│   │   └── Autoloader.php
│   ├── Exception/
│   ├── Helper/
│   ├── Http/
│   └── Profile/
├── Api/
│   ├── Account/                                // 账号管理  
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
├── tests/
├── LICENSE
└── README.md
```

## 当前开发进度

| 模块       | 实例调用模块                           | 静态调用模块                | 状态    | 文档链接                             |
| ---------- | -------------------------------------- | --------------------------- |-------| ------------------------------------ |
| 巨量广告   | `$client->module('JuLiangAds')`        | `$sdk::JuLiangAds()`        | ✅ 已完成 | [点击查看](docs/JULIANGADS.md)       |
| 巨量千川   | `$client->module('JuLiangQianChuan')`  | `$sdk::JuLiangQianChuan()`  | ✅ 已完成 | [点击查看](docs/JULIANGQIANCHUAN.md) |
| 巨量星图   | `$client->module('JuLiangStarMap')`    | `$sdk::JuLiangStarMap()`    | ✅ 已完成 | [点击查看](docs/JULIANGSTARMAP.md)   |
| 企业号     | `$client->module('EnterpriseAccount')` | `$sdk::EnterpriseAccount()` | ⏳ 未开始 | -                                    |
| 巨量本地推 | `$client->module('JuLiangLocalPush')`  | `$sdk::JuLiangLocalPush()`  | ⏳ 开发中 | [点击查看](docs/JULIANGLOCALPUSH.md)    |
| 账户管理   | `$client->module('Account')`           | `$sdk::Account()`           | ✅ 已完成 | [点击查看](docs/ACCOUNT.md)          |
> ⚠️ 账户管理 【千川｜广告｜本地推｜星图】接口通用都在这里面。   
> ⚠️ 上述进度仅供参考，实际以源码为准。  
> 🧠 欢迎查看源码深入探索，接口比文档更诚实！  
> 舅宠你一回 😠

## 问题反馈

如在使用过程中遇到问题、建议或灵感……请无视（开玩笑的）。

> 📨 实在憋不住可以提 Issue 或 PR ～

## 后续计划

做完回家过年 🧨  
保佑不被甲方催！🙏
