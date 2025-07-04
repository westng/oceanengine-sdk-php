# JuLiangQianChuan 巨量千川 API 结构

## AdvertiserMgmt 投放管理

### AccountBudget 广告账户预算

| 方法名称         | 调用方法                             |
| ---------------- | ------------------------------------ |
| 获取广告账户预算 | AccountBudget->AccountBudgetGet()    |
| 设置广告账户预算 | AccountBudget->AccountBudgetUpdate() |

### AdvertiserGroupMgmt 广告组管理

| 方法名称           | 调用方法                                         |
| ------------------ | ------------------------------------------------ |
| 广告组创建         | AdvertiserGroupMgmt->CampaignCreate()            |
| 广告组列表获取     | AdvertiserGroupMgmt->CampaignListGet()           |
| 广告组更新         | AdvertiserGroupMgmt->CampaignUpdate()            |
| 批量广告组状态更新 | AdvertiserGroupMgmt->BatchCampaignStatusUpdate() |

### AdvertisingMaterialMgmt 广告素材管理

| 方法名称           | 调用方法                                        |
| ------------------ | ----------------------------------------------- |
| 删除广告素材       | AdvertisingMaterialMgmt->AdMaterialDelete()     |
| 获取广告素材       | AdvertisingMaterialMgmt->AdMaterialGet()        |
| 获取素材审核建议   | AdvertisingMaterialMgmt->AdMaterialSuggestion() |
| 获取素材关联计划   | AdvertisingMaterialMgmt->MaterialAdGet()        |
| 获取账户下素材列表 | AdvertisingMaterialMgmt->MaterialGet()          |

### AdvertisingPlanMgmt 广告计划管理

| 方法名称              | 调用方法                                          |
| --------------------- | ------------------------------------------------- |
| 更新计划出价          | AdvertisingPlanMgmt->AdBidUpdate()                |
| 更新计划预算          | AdvertisingPlanMgmt->AdBudgetUpdate()             |
| 获取计划补偿状态      | AdvertisingPlanMgmt->AdCompensateStatusGet()      |
| 创建计划              | AdvertisingPlanMgmt->AdCreate()                   |
| 获取计划详情          | AdvertisingPlanMgmt->AdDetailGet()                |
| 获取计划列表          | AdvertisingPlanMgmt->AdGet()                      |
| 获取计划学习状态      | AdvertisingPlanMgmt->AdLearningStatusGet()        |
| 更新计划地域          | AdvertisingPlanMgmt->AdRegionUpdate()             |
| 获取计划拒绝原因      | AdvertisingPlanMgmt->AdRejectReason()             |
| 更新计划投放时间      | AdvertisingPlanMgmt->AdScheduleDateUpdate()       |
| 更新计划投放时段      | AdvertisingPlanMgmt->AdScheduleFixedRangeUpdate() |
| 更新计划投放时间      | AdvertisingPlanMgmt->AdScheduleTimeUpdate()       |
| 更新计划状态          | AdvertisingPlanMgmt->AdStatusUpdate()             |
| 更新计划              | AdvertisingPlanMgmt->AdUpdate()                   |
| 预估计划效果          | AdvertisingPlanMgmt->EstimateEffect()             |
| 获取千川计划          | AdvertisingPlanMgmt->LqAdGet()                    |
| 更新计划 ROI 目标     | AdvertisingPlanMgmt->RoiGoalUpdate()              |
| 获取计划出价建议      | AdvertisingPlanMgmt->SuggestBid()                 |
| 获取计划预算建议      | AdvertisingPlanMgmt->SuggestBudget()              |
| 获取计划 ROI 目标建议 | AdvertisingPlanMgmt->SuggestRoiGoal()             |

### GlobalPromotion 全域推广

| 方法名称                   | 调用方法                                        |
| -------------------------- | ----------------------------------------------- |
| 新建全域推广计划           | GlobalPromotion->UniAwemeAdCreate()             |
| 编辑全域推广计划           | GlobalPromotion->UniAwemeAdUpdate()             |
| 获取可投全域推广抖音号列表 | GlobalPromotion->UniAwemeAuthorizedGet()        |
| 获取全域预估效果           | GlobalPromotion->UniAwemeEstimateEffect()       |
| 获取全域建议预算           | GlobalPromotion->UniAwemeSuggestBudget()        |
| 获取全域推广广告详情       | GlobalPromotion->UniPromotionAdDetail()         |
| 删除全域推广广告素材       | GlobalPromotion->UniPromotionAdMaterialDelete() |
| 获取全域推广广告素材       | GlobalPromotion->UniPromotionAdMaterialGet()    |
| 更新全域推广广告状态       | GlobalPromotion->UniPromotionAdStatusUpdate()   |
| 获取全域推广广告屏蔽素材   | GlobalPromotion->UniPromotionBlockMaterialGet() |
| 获取全域推广列表           | GlobalPromotion->UniPromotionList()             |
| 获取全域推广商品抖音信息   | GlobalPromotion->UniPromotionProductAwemeGet()  |
| 获取全域推广商品信息       | GlobalPromotion->UniPromotionProductGet()       |

### KeywordMgmt 关键词管理

| 方法名称                 | 调用方法                              |
| ------------------------ | ------------------------------------- |
| 获取计划的搜索关键词     | KeywordMgmt->AdKeywordsGet()          |
| 更新关键词               | KeywordMgmt->AdKeywordsUpdate()       |
| 获取系统推荐的搜索关键词 | KeywordMgmt->AdRecommendKeywordsGet() |
| 关键词合规校验           | KeywordMgmt->KeywordCheck()           |
| 获取词包推荐关键词       | KeywordMgmt->KeywordPackageGet()      |

### NegativeWordMgmt 否定词管理

| 方法名称       | 调用方法                                  |
| -------------- | ----------------------------------------- |
| 获取否定词列表 | NegativeWordMgmt->AdPivativewordsGet()    |
| 更新否定词列表 | NegativeWordMgmt->AdPivativewordsUpdate() |

### ProductLiveMgmt 商品/直播间管理

| 方法名称                 | 调用方法                                    |
| ------------------------ | ------------------------------------------- |
| 达人获取可投商品列表     | ProductLiveMgmt->AwemeProductAvailableGet() |
| 获取广告主绑定的品牌列表 | ProductLiveMgmt->BrandAuthorizedGet()       |
| 商家获取可投商品列表     | ProductLiveMgmt->ProductAvailableGet()      |
| 获取广告主绑定的店铺列表 | ProductLiveMgmt->ShopAuthorizedGet()        |

## AssetMgmt 素材管理

### ImageVideoMgmt 图片/视频管理

| 方法名称                       | 调用方法                                          |
| ------------------------------ | ------------------------------------------------- |
| 上传图片素材                   | ImageVideoMgmt->OpenApiFileImageAd()              |
| 上传视频素材                   | ImageVideoMgmt->OpenApiFileVideoAd()              |
| 获取千川素材库图文             | ImageVideoMgmt->QianchuanCarouselGet()            |
| 获取抖音号下的图文             | ImageVideoMgmt->QianchuanCarouselAwemeGet()       |
| 批量删除图片素材               | ImageVideoMgmt->QianchuanFileImageDelete()        |
| 获取抖音号下的视频             | ImageVideoMgmt->QianchuanFileVideoAwemeGet()      |
| 批量删除视频素材               | ImageVideoMgmt->QianchuanFileVideoDelete()        |
| 获取低效素材                   | ImageVideoMgmt->QianchuanFileVideoEfficiencyGet() |
| 获取首发素材                   | ImageVideoMgmt->QianchuanFileVideoOriginalGet()   |
| 获取千川素材库图片             | ImageVideoMgmt->QianchuanImageGet()               |
| 获取抖音主页视频对应素材库视频 | ImageVideoMgmt->QianchuanVideoByAwemeGet()        |
| 获取千川素材库视频             | ImageVideoMgmt->QianchuanVideoGet()               |

## DataPushService 数据推送服务

### SubTaskAccountMgmt 订阅任务账户管理

| 方法名称      | 调用方法                                      |
| ------------- | --------------------------------------------- |
| 新增 Adv 订阅 | SubTaskAccountMgmt->SubscribeAccountsAdd()    |
| 查询订阅 Adv  | SubTaskAccountMgmt->SubscribeAccountsList()   |
| 取消 Adv 订阅 | SubTaskAccountMgmt->SubscribeAccountsRemove() |

## FreestylePushGlobal 随心推全域
| 方法名称                     | 调用方法                                                           |
| ---------------------------- | ------------------------------------------------------------------ |
| 获取随心推全域投放效果预估       | FreestylePushGlobal->QianchuanAwemeUniPromotionEstimateEffect()                |
| 创建随心推全域订单       | FreestylePushGlobal->QianchuanAwemeUniPromotionOrderCreate()                |
| 获取随心推全域订单详情       | FreestylePushGlobal->QianchuanAwemeUniPromotionOrderDetail()                |
| 获取随心推全域订单列表       | FreestylePushGlobal->QianchuanAwemeUniPromotionOrderGet()                |
| 获取随心推全域账户数据       | FreestylePushGlobal->QianchuanAwemeUniPromotionReport()                |
| 获取随心推全域投放建议       | FreestylePushGlobal->QianchuanAwemeUniPromotionSuggest()                |
| 获取随心推全域手动出价计划建议ROI       | FreestylePushGlobal->QianchuanAwemeUniPromotionSuggestRoi()                |


## FreestylePushPlcmnt 随心推投放

| 方法名称                     | 调用方法                                                           |
| ---------------------------- | ------------------------------------------------------------------ |
| 获取随心推投放效果预估       | FreestylePushPlcmnt->QianchuanAwemeEstimateProfit()                |
| 获取随心推兴趣标签           | FreestylePushPlcmnt->QianchuanAwemeInterestActionInterestKeyword() |
| 追加随心推订单预算           | FreestylePushPlcmnt->QianchuanAwemeOrderBudgetAdd()                |
| 创建随心推订单               | FreestylePushPlcmnt->QianchuanAwemeOrderCreate()                   |
| 获取随心推订单详情           | FreestylePushPlcmnt->QianchuanAwemeOrderDetailGet()                |
| 获取随心推订单列表           | FreestylePushPlcmnt->QianchuanAwemeOrderGet()                      |
| 查询随心推使用中订单配额信息 | FreestylePushPlcmnt->QianchuanAwemeOrderQuotaGet()                 |
| 获取建议延长时长             | FreestylePushPlcmnt->QianchuanAwemeOrderSuggestDeliveryTimeGet()   |
| 终止随心推订单               | FreestylePushPlcmnt->QianchuanAwemeOrderTerminate()                |
| 获取随心推订单数据           | FreestylePushPlcmnt->QianchuanAwemeReportOrderGet()                |
| 获取随心推短视频建议出价     | FreestylePushPlcmnt->QianchuanAwemeSuggestBid()                    |
| 获取随心推 ROI 建议出价      | FreestylePushPlcmnt->QianchuanAwemeSuggestRoiGoal()                |
| 获取随心推可投视频列表       | FreestylePushPlcmnt->QianchuanAwemeVideoGet()                      |

## FundsMgmt 资金管理

| 方法名称                      | 调用方法                                       |
| ----------------------------- | ---------------------------------------------- |
| 【代理商】批量查询账户余额    | FundsMgmt->AccountFundGet()                    |
| 查询财务流水明细              | FundsMgmt->AdvertiserFundTransactionGet()      |
| 工作台转账-获取最大可转余额   | FundsMgmt->CgTransferCanTransferBalanceGet()   |
| 工作台转账-获取可转列表       | FundsMgmt->CgTransferCanTransferTargetList()   |
| 转账-发起转账（代理）         | FundsMgmt->CgTransferCreateTransfer()          |
| 转账-获取最大可转余额（代理） | FundsMgmt->CgTransferQueryCanTransferBalance() |
| 转账-查询账户转账余额（代理） | FundsMgmt->CgTransferQueryTransferBalance()    |
| 转账-查询转账单信息（代理）   | FundsMgmt->CgTransferQueryTransferDetail()     |
| 工作台转账-查询账户转账余额   | FundsMgmt->CgTransferTransferBalanceGet()      |
| 工作台转账-发起转账           | FundsMgmt->CgTransferTransferCreate()          |
| 获取账户余额                  | FundsMgmt->QianchuanAccountBalanceGet()        |
| 获取财务流水信息              | FundsMgmt->QianchuanFinanceDetailGet()         |
| 获取账户钱包信息              | FundsMgmt->QianchuanFinanceWalletGet()         |
| 工作台转账-查询转账单信息     | FundsMgmt->CgTransferTransferDetailGet()       |
