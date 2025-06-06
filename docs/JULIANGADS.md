# JuLiangAds 巨量广告 API 结构

## Account 账号服务

### Advertiser 广告主信息与资质管理

| 方法名称                  | 调用方法                                            |
| ------------------------- | --------------------------------------------------- |
| 获取广告主信息            | Advertiser->AdvertiserInfo()                        |
| 获取广告主公开信息        | Advertiser->AdvertiserPublicInfo()                  |
| 获取广告主账户头像        | Advertiser->AdvertiserAvatarGet()                   |
| 获取广告主账户头像 ID     | Advertiser->AdvertiserAvatarUpload()                |
| 更新广告主账户头像        | Advertiser->AdvertiserAvatarSubmit()                |
| 上传资质图片              | Advertiser->FileImageAdvertiser()                   |
| 获取推广产品资质          | Advertiser->AdvertiserDeliveryPkgGet()              |
| 获取推广产品资质规则配置  | Advertiser->AdvertiserDeliveryPkgConfig()           |
| 批量删除推广产品资质      | Advertiser->AdvertiserDeliveryPkgDelete()           |
| 上传/更新推广产品资质     | Advertiser->AdvertiserDeliveryPkgSubmit()           |
| 批量删除投放资质          | Advertiser->AdvertiserDeliveryQualificationDelete() |
| 上传/更新投放资质（新版） | Advertiser->AdvertiserDeliveryQualificationSubmit() |
| 上传投放资质（旧版）      | Advertiser->AdvertiserQualificationCreateV2()       |
| 获取投放资质（新版）      | Advertiser->AdvertiserDeliveryQualificationList()   |
| 获取投放资质（旧版）      | Advertiser->AdvertiserQualificationSelectV2()       |
| 上传主体资质（新版）      | Advertiser->AdvertiserQualificationSubmit()         |
| 获取主体资质（新版）      | Advertiser->AdvertiserQualificationGet()            |

### Agency 代理商账号管理

| 方法名称           | 调用方法                               |
| ------------------ | -------------------------------------- |
| 获取代理商信息     | Agency->AgentInfo()                    |
| 更新广告主所属销售 | Agency->AgentAdvAdvertiserUpdateSale() |
| 广告主账户复制     | Agency->AgentAdvertiserCopy()          |
| 更新广告主信息     | Agency->AgentAdvertiserUpdate()        |
| 二级代理商列表     | Agency->AgentChildAgentSelect()        |
| 广告主账户信息查询 | Agency->AgentAdvertiserInfoQuery()     |
| 代理商管理账户列表 | Agency->AgentAdvertiserSelect()        |

### Finance 资金和流水管理

| 方法名称                      | 调用方法                                              |
| ----------------------------- | ----------------------------------------------------- |
| 工作台转账-获取最大可转余额   | Finance->CgTransferCanTransferBalanceGet()            |
| 查询账号余额                  | Finance->AdvertiserFundGet()                          |
| 工作台转账-查询转账单信息     | Finance->CgTransferTransferDetailGet()                |
| 工作台转账-查询转账余额       | Finance->CgTransferTransferBalanceGet()               |
| 共享钱包-交易明细查询         | Finance->SharedWalletTransactionDetailGet()           |
| 工作台转账-创建转账           | Finance->CgTransferTransferCreate()                   |
| 工作台转账-获取可转账对象列表 | Finance->CgTransferCanTransferTargetList()            |
| 查询电子发票 URL              | Finance->QueryInvoiceElectronicUrl()                  |
| 查询发票                      | Finance->QueryInvoice()                               |
| 创建对账单发票                | Finance->CreateStatementInvoice()                     |
| 查询预存业务实体 ID           | Finance->QueryBookingBusinessEntityIdGet()            |
| 查询返点余额                  | Finance->QueryRebateBalance()                         |
| 查询返点核算信息              | Finance->QueryRebateAccountingInfo()                  |
| 工作台转账-钱包转账明细查询   | Finance->CgTransferWalletTransferDetail()             |
| 工作台转账-钱包转账列表查询   | Finance->CgTransferWalletTransferList()               |
| 工作台转账-钱包转账创建       | Finance->CgTransferWalletTransferCreate()             |
| 工作台转账-钱包可转余额查询   | Finance->CgTransferWalletTransferCanTransferBalance() |
| 共享钱包-账户关系查询         | Finance->SharedWalletAccountRelationGet()             |
| 共享钱包-钱包关系查询         | Finance->SharedWalletWalletRelationGet()              |
| 共享钱包-钱包信息查询         | Finance->SharedWalletWalletInfoGet()                  |
| 共享钱包-主钱包查询           | Finance->SharedWalletMainWalletGet()                  |
| 共享钱包-日统计查询           | Finance->SharedWalletDailyStatGet()                   |
| 共享钱包-钱包余额查询         | Finance->SharedWalletWalletBalanceGet()               |
| 工作台转账-查询转账明细       | Finance->CgTransferQueryTransferDetail()              |
| 工作台转账-创建转账           | Finance->CgTransferCreateTransfer()                   |
| 工作台转账-查询可转余额       | Finance->CgTransferQueryCanTransferBalance()          |
| 工作台转账-查询转账余额       | Finance->CgTransferQueryTransferBalance()             |
| 查询项目                      | Finance->QueryProject()                               |
| 查询对账单                    | Finance->QueryStatement()                             |
| 资金-共享钱包余额查询         | Finance->FundSharedWalletBalanceGet()                 |
| 广告主资金流水查询            | Finance->AdvertiserFundTransactionGet()               |
| 代理商转账流水记录            | Finance->AgentTransferTransactionRecord()             |
| 广告主资金日统计              | Finance->AdvertiserFundDailyStat()                    |
| 账户资金查询                  | Finance->AccountFundGet()                             |

### Workbench 工作台（原纵横组织）账户管理

| 方法名称                               | 调用方法                                             |
| -------------------------------------- | ---------------------------------------------------- |
| 获取工作台下账户列表                   | Workbench->CustomerCenterAdvertiserList()            |
| 获取主体下的账户列表                   | Workbench->BusinessPlatformCompanyAccountGet()       |
| 查询合作组织                           | Workbench->BusinessPlatformPartnerOrganizationList() |
| 获取工作台（原纵横组织）下所有主体信息 | Workbench->BusinessPlatformCompanyInfoGet()          |

## AdsPro 巨量广告升级版

### AdAccountBudget 广告账户预算

| 方法名称       | 调用方法                                  |
| -------------- | ----------------------------------------- |
| 更新账户日预算 | AdAccountBudget->AdvertiserUpdateBudget() |
| 获取账户日预算 | AdAccountBudget->AdvertiserBudgetGet()    |

### AdManagement 广告管理模块

| 方法名称             | 调用方法                                      |
| -------------------- | --------------------------------------------- |
| 删除广告下素材       | AdManagement->PromotionMaterialDelete()       |
| 批量更新广告投放时段 | AdManagement->PromotionScheduleTimeUpdate()   |
| 获取品牌信息         | AdManagement->CdpBrandGet()                   |
| 获取成本保障状态     | AdManagement->PromotionCostProtectStatusGet() |
| 更新素材状态         | AdManagement->MaterialStatusUpdate()          |
| 获取广告审核拒绝原因 | AdManagement->PromotionRejectReasonGet()      |
| 删除广告             | AdManagement->PromotionDelete()               |
| 更新广告状态         | AdManagement->PromotionStatusUpdate()         |
| 更新广告深度出价     | AdManagement->PromotionDeepBidUpdate()        |
| 更新广告出价         | AdManagement->PromotionBidUpdate()            |
| 更新广告预算         | AdManagement->PromotionBudgetUpdate()         |
| 获取广告列表         | AdManagement->PromotionList()                 |
| 更新广告             | AdManagement->PromotionUpdate()               |
| 创建广告             | AdManagement->PromotionCreate()               |

### ProjectManagement 项目管理模块

| 方法名称             | 调用方法                                         |
| -------------------- | ------------------------------------------------ |
| 批量更新项目投放时段 | ProjectManagement->ProjectWeekScheduleUpdate()   |
| 更新项目             | ProjectManagement->ProjectUpdate()               |
| 更新项目状态         | ProjectManagement->ProjectStatusUpdate()         |
| 更新项目投放时段     | ProjectManagement->ProjectScheduleTimeUpdate()   |
| 更新项目 ROI 目标    | ProjectManagement->ProjectRoiGoalUpdate()        |
| 获取项目列表         | ProjectManagement->ProjectList()                 |
| 删除项目             | ProjectManagement->ProjectDelete()               |
| 创建项目             | ProjectManagement->ProjectCreate()               |
| 获取项目成本保障状态 | ProjectManagement->ProjectCostProtectStatusGet() |
| 更新项目预算         | ProjectManagement->ProjectBudgetUpdate()         |
| 更新预算组           | ProjectManagement->BudgetGroupUpdate()           |
| 获取预算组列表       | ProjectManagement->BudgetGroupList()             |
| 删除预算组           | ProjectManagement->BudgetGroupDelete()           |
| 创建预算组           | ProjectManagement->BudgetGroupCreate()           |

### SearchAdTool 搜索广告投放工具

#### 基础工具

| 方法名称                 | 调用方法                                 |
| ------------------------ | ---------------------------------------- |
| 获取推荐关键词           | SearchAdTool->ToolsSuggWords()           |
| 获取蓝海流量包           | SearchAdTool->ToolsBlueFlowPackageList() |
| 获取广告下可用蓝海关键词 | SearchAdTool->ToolsBlueFlowKeywordList() |

#### KeywordManagement 关键词管理

| 方法名称       | 调用方法                                         |
| -------------- | ------------------------------------------------ |
| 获取关键词列表 | SearchAdTool->KeywordManagement->KeywordList()   |
| 删除关键词     | SearchAdTool->KeywordManagement->KeywordDelete() |
| 更新关键词     | SearchAdTool->KeywordManagement->KeywordUpdate() |
| 创建关键词     | SearchAdTool->KeywordManagement->KeywordCreate() |

#### AccountKeywordBoost 账户关键词提升

| 方法名称           | 调用方法                                                         |
| ------------------ | ---------------------------------------------------------------- |
| 获取关键词项目信息 | SearchAdTool->AccountKeywordBoost->ToolsKeywordsProjectInfoGet() |
| 获取关键词出价比例 | SearchAdTool->AccountKeywordBoost->ToolsKeywordsBidRatioGet()    |
| 删除关键词出价比例 | SearchAdTool->AccountKeywordBoost->ToolsKeywordsBidRatioDelete() |
| 更新关键词出价比例 | SearchAdTool->AccountKeywordBoost->ToolsKeywordsBidRatioUpdate() |
| 创建关键词出价比例 | SearchAdTool->AccountKeywordBoost->ToolsKeywordsBidRatioCreate() |

#### NegativeKeywords 否定词管理

| 方法名称       | 调用方法                                                            |
| -------------- | ------------------------------------------------------------------- |
| 添加广告否定词 | SearchAdTool->NegativeKeywords->ToolsPrivativeWordPromotionAdd()    |
| 更新项目否定词 | SearchAdTool->NegativeKeywords->ToolsPrivativeWordProjectUpdate()   |
| 批量获取否定词 | SearchAdTool->NegativeKeywords->ToolsPrivativeWordBatchGet()        |
| 更新广告否定词 | SearchAdTool->NegativeKeywords->ToolsPrivativeWordPromotionUpdate() |
| 添加项目否定词 | SearchAdTool->NegativeKeywords->ToolsPrivativeWordProjectAdd()      |

### AssetManagement 资产管理

| 方法名称                                 | 调用方法                                               |
| ---------------------------------------- | ------------------------------------------------------ |
| 广告素材预审结果查询（连山云视频点播版） | AssetManagement->OpenMaterialAuditProGet()             |
| 广告素材预审提交接口（连山云视频点播版） | AssetManagement->OpenMaterialAuditProSubmit()          |
| 广告主轮询任务结果                       | AssetManagement->DiagnosisTaskAdvGet()                 |
| 广告主获取前测任务列表                   | AssetManagement->DiagnosisTaskAdvList()                |
| 创建广告主诊断任务                       | AssetManagement->DiagnosisTaskAdvCreate()              |
| 获取代理商诊断任务                       | AssetManagement->DiagnosisTaskAgentGet()               |
| 获取代理商诊断任务列表                   | AssetManagement->DiagnosisTaskAgentList()              |
| 创建代理商诊断任务                       | AssetManagement->DiagnosisTaskAgentCreate()            |
| 代理商批量暂停明点无效素材               | AssetManagement->FileVideoPause()                      |
| 上传代理商视频                           | AssetManagement->FileVideoAgent()                      |
| 获取代理商视频                           | AssetManagement->FileVideoAgentGet()                   |
| 获取轮播图信息                           | AssetManagement->CarouselAdGet()                       |
| 更新轮播图                               | AssetManagement->CarouselUpdate()                      |
| 获取轮播图列表                           | AssetManagement->CarouselList()                        |
| 创建轮播图                               | AssetManagement->CarouselCreate()                      |
| 上传广告音频                             | AssetManagement->FileAudioAd()                         |
| 获取音频信息                             | AssetManagement->FileAudioGet()                        |
| 获取素材清理任务结果                     | AssetManagement->FileVideoMaterialClearTaskResultGet() |
| 获取素材清理任务                         | AssetManagement->FileVideoMaterialClearTaskGet()       |
| 创建素材清理任务                         | AssetManagement->FileVideoMaterialClearTaskCreate()    |
| 获取素材属性列表                         | AssetManagement->FileMaterialAttributesList()          |
| 获取素材详情                             | AssetManagement->FileMaterialDetail()                  |
| 获取素材列表                             | AssetManagement->FileMaterialList()                    |
| 获取视频效率数据                         | AssetManagement->FileVideoEfficiencyGet()              |
| 获取视频抖音数据                         | AssetManagement->FileVideoAwemeGet()                   |
| 更新视频信息                             | AssetManagement->FileVideoUpdate()                     |
| 删除轮播图                               | AssetManagement->CarouselDelete()                      |
| 删除图片                                 | AssetManagement->FileImageDelete()                     |
| 删除视频                                 | AssetManagement->FileVideoDelete()                     |
| 绑定素材                                 | AssetManagement->FileMaterialBind()                    |
| 获取广告视频                             | AssetManagement->FileVideoAdGet()                      |
| 获取视频封面建议                         | AssetManagement->ToolsVideoCoverSuggest()              |
| 获取视频上传任务列表                     | AssetManagement->FileVideoUploadTaskList()             |
| 创建上传任务                             | AssetManagement->FileUploadTaskCreate()                |
| 上传广告视频                             | AssetManagement->FileVideoAd()                         |
| 上传广告图片                             | AssetManagement->FileImageAd()                         |
| 获取广告图片                             | AssetManagement->FileImageAdGet()                      |
| 获取视频信息                             | AssetManagement->FileVideoGet()                        |
| 获取图片信息                             | AssetManagement->FileImageGet()                        |
