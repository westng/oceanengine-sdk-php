# Account 账号服务 API 结构

> 该接口千川&广告&本地推&星图通用。

## 账户关系管理

## AccountInfo 账户信息

| 方法名称                 | 调用方法                                  |
| ------------------------ | ----------------------------------------- |
| 获取千川广告账户基础信息 | AccountInfo->AdvertiserPublicInfo()       |
| 获取千川广告账户全量信息 | AccountInfo->AdvertiserInfo()             |
| 广告主账户信息查询       | AccountInfo->AgentAdvertiserInfoQuery()   |
| 获取授权时登录用户信息   | AccountInfo->UserInfo()                   |
| 获取店铺账户信息         | AccountInfo->QianchuanShopGet()           |
| 获取千川账户类型         | AccountInfo->QianchuanAdvertiserTypeGet() |

## AccountRel 账户关系

| 方法名称                             | 调用方法                         |
| ------------------------------------ | -------------------------------- |
| 获取店铺账户关联的广告账户列表       | AccountRel->ShopAdvertiserList() |
| 获取已授权的账户（店铺/代理商/组织） | AccountRel->AdvertiserGet()      |
| 获取千川账户下抖音号授权列表         | AccountRel->AwemeAuthListGet()   |
| 广告主添加抖音号                     | AccountRel->ToolsAwemeAuth()     |
| 店铺新客定向授权                     | AccountRel->ToolsShopAuth()      |
| 获取千川账户下可投广抖音号           | AccountRel->AwemeAuthorizedGet() |

## AdQualification 广告主信息与资质管理

| 方法名称             | 调用方法                                                 |
| -------------------- | -------------------------------------------------------- |
| 获取星图账户信息     | AdQualification->StarInfo()                              |
| 获取主体资质（新版） | AdQualification->AdvertiserQualificationGet()            |
| 提交主体资质（新版） | AdQualification->AdvertiserQualificationSubmit()         |
| 提交投放资质包       | AdQualification->AdvertiserDeliveryPkgSubmit()           |
| 删除投放资质包       | AdQualification->AdvertiserDeliveryPkgDelete()           |
| 提交投放资质         | AdQualification->AdvertiserDeliveryQualificationSubmit() |
| 选择主体资质（新版） | AdQualification->AdvertiserQualificationSelectV2()       |
| 创建主体资质（新版） | AdQualification->AdvertiserQualificationCreateV2()       |
| 配置投放资质包       | AdQualification->AdvertiserDeliveryPkgConfig()           |
| 获取投放资质包       | AdQualification->AdvertiserDeliveryPkgGet()              |
| 上传广告主头像       | AdQualification->AdvertiserAvatarUpload()                |
| 上传广告主图片       | AdQualification->FileImageAdvertiser()                   |
| 提交广告主头像       | AdQualification->AdvertiserAvatarSubmit()                |
| 删除投放资质         | AdQualification->AdvertiserDeliveryQualificationDelete() |
| 获取投放资质列表     | AdQualification->AdvertiserDeliveryQualificationList()   |
| 获取广告主头像       | AdQualification->AdvertiserAvatarGet()                   |

## Agency 代理商账户管理

| 方法名称             | 调用方法                               |
| -------------------- | -------------------------------------- |
| 二级代理商列表       | Agency->AgentChildAgentSelect()        |
| 获取代理商账户信息   | Agency->AgentInfo()                    |
| 代理商广告主列表     | Agency->AgentAdvertiserSelect()        |
| 代理商广告主更新     | Agency->AgentAdvertiserUpdate()        |
| 代理商广告主复制     | Agency->AgentAdvertiserCopy()          |
| 代理商广告主更新销售 | Agency->AgentAdvAdvertiserUpdateSale() |

## Finance 资金和流水管理

| 方法名称                              | 调用方法                                              |
| ------------------------------------- | ----------------------------------------------------- |
| 共享钱包-查询账户对应公司下的钱包关系 | Finance->SharedWalletAccountRelationGet()             |
| 资金共享-查询共享钱包日流水           | Finance->SharedWalletDailyStatGet()                   |
| 资金共享-共享钱包信息查询             | Finance->SharedWalletMainWalletGet()                  |
| 资金共享-查询共享钱包流水明细         | Finance->SharedWalletTransactionDetailGet()           |
| 资金共享-批量查询钱包余额             | Finance->SharedWalletWalletBalanceGet()               |
| 资金共享-查询共享钱包信息             | Finance->SharedWalletWalletInfoGet()                  |
| 资金共享-查询共享钱包关系             | Finance->SharedWalletWalletRelationGet()              |
| 批量查询账户余额                      | Finance->AccountFundGet()                             |
| 查询账户日流水                        | Finance->AdvertiserFundDailyStat()                    |
| 查询账号余额                          | Finance->AdvertiserFundGet()                          |
| 查询账号流水明细                      | Finance->AdvertiserFundTransactionGet()               |
| 查询代理商转账记录                    | Finance->AgentTransferTransactionRecord()             |
| 工作台转账-获取最大可转余额           | Finance->CgTransferCanTransferBalanceGet()            |
| 工作台转账-获取可转列表               | Finance->CgTransferCanTransferTargetList()            |
| 转账-发起转账（代理）                 | Finance->CgTransferCreateTransfer()                   |
| 转账-获取最大可转余额（代理）         | Finance->CgTransferQueryCanTransferBalance()          |
| 转账-查询账户转账余额（代理）         | Finance->CgTransferQueryTransferBalance()             |
| 转账-查询转账单信息（代理）           | Finance->CgTransferQueryTransferDetail()              |
| 工作台转账-查询账户转账余额           | Finance->CgTransferTransferBalanceGet()               |
| 工作台转账-发起转账                   | Finance->CgTransferTransferCreate()                   |
| 工作台转账-查询转账单信息             | Finance->CgTransferTransferDetailGet()                |
| 资金共享-最大可转余额查询             | Finance->CgTransferWalletTransferCanTransferBalance() |
| 资金共享-发起转账                     | Finance->CgTransferWalletTransferCreate()             |
| 资金共享-查询转账单信息               | Finance->CgTransferWalletTransferDetail()             |
| 资金共享-查询转账列表                 | Finance->CgTransferWalletTransferList()               |
| 开票-新建开票申请单（代理商版）       | Finance->CreateStatementInvoice()                     |
| 获取返货共享钱包余额                  | Finance->FundSharedWalletBalanceGet()                 |
| 排期—查询业务实体 ID                  | Finance->QueryBookingBusinessEntityIdGet()            |
| 开票-查询开票单数据（代理商版）       | Finance->QueryInvoice()                               |
| 开票-获取电子发票文件接口（代理商版） | Finance->QueryInvoiceElectronicUrl()                  |
| 查询项目信息                          | Finance->QueryProject()                               |
| 返点-查询返点核算流水                 | Finance->QueryRebateAccountingInfo()                  |
| 返点-查询返点流水                     | Finance->QueryRebateBalance()                         |
| 查询项目关联结算单信息                | Finance->QueryStatement()                             |

## Workbench 工作台账户管理

| 方法名称                               | 调用方法                                             |
| -------------------------------------- | ---------------------------------------------------- |
| 获取工作台下账户列表                   | Workbench->CustomerCenterAdvertiserList()            |
| 查询合作组织                           | Workbench->BusinessPlatformPartnerOrganizationList() |
| 获取工作台（原纵横组织）下所有主体信息 | Workbench->BusinessPlatformCompanyInfoGet()          |
| 获取主体下的账户列表                   | Workbench->BusinessPlatformCompanyAccountGet()       |
