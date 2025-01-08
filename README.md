# Marketing PHP SDK

## 概述
在技术蓬勃发展的当下，巨量引擎开放平台的Marketing API SDK，本应是普惠所有开发者的得力工具，涵盖巨量广告、巨量千川、巨量本地推、巨量星图及企业号相关功能，从Token获取到请求封装、响应解释，每个环节都暗藏助力高效开发的玄机。

其本地化设计，理应为开发者开辟便捷通道，无论经验如何，都能借它在API调用之路上畅行无阻。可现实却令人咋舌，面对PHP这片高手云集、活力满满的领域，官方竟然缺失PHP版本的SDK！

这简直荒谬至极。PHP开发者们为互联网立下汗马功劳，如今却像被抛弃的孩子。看着其他语言开发者仗着官方SDK大步快跑，自己只能徒手在荆棘中挣扎，太不公平！好比马拉松赛场，别人装备精良、补给充足，自己却赤脚前行、无水可饮。

幸有补救性SDK，让PHP开发者不至于掉队，能凭本事搭起投放管理系统，但背后是他们付出的诸多额外心血。官方这种“偏心”做法，实在该反省，给PHP开发者们一个交代！ 

## 使用条件
1. 使用SDK需要首先注册成为巨量引擎开发者，请参考[开发者快速入门文档](https://open.oceanengine.com/labels/7/docs/1696710498372623)
2. 使用SDK需要先拥有API的访问权限，所有SDK的使用与应用拥有的权限组相关联

## 安装

```shell
composer require westng/oceanengine-sdk-php
```

## 使用

### SDK包结构
```php
.
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
移步tests目录 查阅使用方法