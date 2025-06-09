# Tools 工具 API 结构

> 该接口千川&广告&本地推&星图通用。

## GlobalPlanningTool 全域计划调控工具

| 方法名称         | 调用方法                                                 | 支持平台 |
| ---------------- | -------------------------------------------------------- | -------- |
| 创建调控任务     | GlobalPlanningTool->QianChuanAdControlTaskCreate()       | 巨量千川 |
| 修改任务调控状态 | GlobalPlanningTool->AdControlTaskStatusUpdate()          | 巨量千川 |
| 获取调控任务列表 | GlobalPlanningTool->QianChuanAdControlTaskStatusUpdate() | 巨量千川 |

## QueryTool 查询工具

| 方法名称                       | 调用方法                                         | 支持平台           |
| ------------------------------ | ------------------------------------------------ | ------------------ |
| 获取行业列表                   | QueryTool->ToolsIndustryGet()                    | 巨量广告、巨量千川 |
| 操作日志查询                   | QueryTool->ToolsLogSearch()                      | 巨量广告、巨量千川 |
| 获取千川操作日志               | QueryTool->QianChuanToolsLogSearch()             | 巨量千川           |
| 获取定向受众预估               | QueryTool->QianChuanToolsEstimateAudience()      | 巨量千川           |
| 获取在投计划配额信息           | QueryTool->QianChuanAdQuotaGet()                 | 巨量千川           |
| 获取白名单能力                 | QueryTool->QianChuanToolsGray()                  | 巨量千川           |
| 智能优惠券白名单               | QueryTool->QianChuanToolsAllowCoupon()           | 巨量千川           |
| 查询违规积分明细               | QueryTool->SecurityScoreViolationEventGet()      | 巨量广告、巨量千川 |
| 查询账户累计积分               | QueryTool->SecurityScoreTotalGet()               | 巨量广告、巨量千川 |
| 查看积分处置详情               | QueryTool->SecurityScoreDisposalInfoGet()        | 巨量广告、巨量千川 |
| 积分处置详情列表               | QueryTool->SecurityScoreDisposalListGet()        | 巨量千川           |
| 查询在投计划配额               | QueryTool->ToolsQuotaGet()                       | 巨量广告           |
| 查询受众预估结果               | QueryTool->ToolsEstimateAudience()               | 巨量广告           |
| 查询应用信息                   | QueryTool->ToolsAppSearch()                      | 巨量广告           |
| 获取绑定的抖音号               | QueryTool->ToolsIesAccountSearch()               | 巨量广告           |
| 行动号召字段内容获取           | QueryTool->ToolsActionTextGet()                  | 巨量广告           |
| 查询推广卡片推荐内容（新版）   | QueryTool->ToolsPromotionCardRecommendTitleGet() | 巨量广告           |
| 获取预估点击成本               | QueryTool->ToolsEstimatedPriceGet()              | 巨量广告           |
| 获取抖音授权关系               | QueryTool->ToolsAwemeAuthList()                  | 巨量广告           |
| 获取创编可用的抖音图文素材     | QueryTool->FileCarouselAwemeGet()                | 巨量广告           |
| 获取推荐使用的视频素材         | QueryTool->RecommendVideoList()                  | 巨量广告           |
| 查询视频是否挂载下载类锚点     | QueryTool->ToolsVideoCheckAvailableAnchor()      | 巨量广告           |
| 获取快投推荐出价系数           | QueryTool->ToolsSearchBidRatioGet()              | 巨量广告           |
| 获取广告预览二维码（升级版）   | QueryTool->ToolsAdPreviewQrcodeGet()             | 巨量广告           |
| 查询白名单能力                 | QueryTool->ToolsGrayGet()                        | 巨量广告           |
| 查询建议出价（巨量广告升级版） | QueryTool->ToolsBidsSuggest()                    | 巨量广告           |
| 【代理商】查询广告违规信息     | QueryTool->AgentQueryRiskPromotionList()         | 巨量广告           |

## DouYinInfluencerMgmt 抖音达人定向管理

| 方法名称                     | 调用方法                                                | 支持平台 |
| ---------------------------- | ------------------------------------------------------- | -------- |
| 查询抖音号 id 对应的达人信息 | DouYinInfluencerMgmt->ToolsAwemeAuthorInfoGet()         | 巨量千川 |
| 查询抖音类目下的推荐达人     | DouYinInfluencerMgmt->ToolsAwemeCategoryTopAuthorGet()  | 巨量千川 |
| 查询抖音帐号和类目信息       | DouYinInfluencerMgmt->ToolsAwemeInfoSearch()            | 巨量千川 |
| 查询抖音类目列表             | DouYinInfluencerMgmt->ToolsAwemeMultiLevelCategoryGet() | 巨量千川 |
| 查询抖音类似帐号             | DouYinInfluencerMgmt->ToolsAwemeSimilarAuthorSearch()   | 巨量千川 |
| 查询授权直播抖音达人列表     | DouYinInfluencerMgmt->ToolsLiveAuthorizeList()          | 巨量千川 |

## BehavioralIntMgmt 行为兴趣词管理

| 方法名称                   | 调用方法                                                 | 支持平台 |
| -------------------------- | -------------------------------------------------------- | -------- |
| 兴趣行为类目关键词 id 转词 | BehavioralIntMgmt->ToolsInterestActionId2Word()          | 巨量千川 |
| 行为类目查询               | BehavioralIntMgmt->ToolsInterestActionActionCategory()   | 巨量千川 |
| 行为关键词查询             | BehavioralIntMgmt->ToolsInterestActionActionKeyword()    | 巨量千川 |
| 兴趣类目查询               | BehavioralIntMgmt->ToolsInterestActionInterestCategory() | 巨量千川 |
| 兴趣关键词查询             | BehavioralIntMgmt->ToolsInterestActionInterestKeyword()  | 巨量千川 |
| 获取行为兴趣推荐关键词     | BehavioralIntMgmt->ToolsInterestActionKeywordSuggest()   | 巨量千川 |

## DynamicCreativeWordPackMgmt 动态创意词包管理

| 方法名称         | 调用方法                                               | 支持平台 |
| ---------------- | ------------------------------------------------------ | -------- |
| 查询动态创意词包 | DynamicCreativeWordPackMgmt->ToolsCreativeWordSelect() | 巨量千川 |

## AudienceMgmt 人群管理

| 方法名称         | 调用方法                                        | 支持平台 |
| ---------------- | ----------------------------------------------- | -------- |
| 查询创编可用人群 | AudienceMgmt->DmpAudiencesGet()                 | 巨量千川 |
| 获取定向包列表   | AudienceMgmt->QianChuanOrientationPackageGet()  | 巨量千川 |
| 获取人群管理列表 | AudienceMgmt->QianChuanAudienceListGet()        | 巨量千川 |
| 获取人群分组     | AudienceMgmt->QianChuanAudienceGroupGet()       | 巨量千川 |
| 上传人群         | AudienceMgmt->QianChuanAudienceCreateByFile()   | 巨量千川 |
| 推送人群         | AudienceMgmt->QianChuanAudiencePush()           | 巨量千川 |
| 删除人群         | AudienceMgmt->QianChuanAudienceDelete()         | 巨量千川 |
| 小文件直接上传   | AudienceMgmt->QianChuanAudienceFileUpload()     | 巨量千川 |
| 大文件分片上传   | AudienceMgmt->QianChuanAudienceFilePartUpload() | 巨量千川 |

## OneClickCampaignScaling 计划一键起量

| 方法名称             | 调用方法                                                             | 支持平台 |
| -------------------- | -------------------------------------------------------------------- | -------- |
| 设置计划一键起量任务 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostSet()        | 巨量千川 |
| 获取计划一键起量状态 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostStatusGet()  | 巨量千川 |
| 获取计划一键起量版本 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostVersionGet() | 巨量千川 |
| 获取计划一键起量报告 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostReportGet()  | 巨量千川 |

## CommentMgmt 评论管理

| 方法名称             | 调用方法                              | 支持平台 |
| -------------------- | ------------------------------------- | -------- |
| 获取评论列表         | CommentMgmt->ToolsCommentGet()        | 巨量千川 |
| 获取评论回复         | CommentMgmt->ToolsCommentReplyGet()   | 巨量千川 |
| 获取评论统计指标     | CommentMgmt->ToolsCommentMetricsGet() | 巨量千川 |
| 回复评论             | CommentMgmt->ToolsCommentReply()      | 巨量千川 |
| 隐藏评论             | CommentMgmt->ToolsCommentHide()       | 巨量千川 |
| 获取评论视频 ID 列表 | CommentMgmt->ToolsCommentMid2ItemId() | 巨量千川 |
| 置顶/取消置顶评论    | CommentMgmt->ToolsCommentStickOnTop() | 巨量千川 |

### 屏蔽词/屏蔽用户

| 方法名称         | 调用方法                                     | 支持平台 |
| ---------------- | -------------------------------------------- | -------- |
| 批量添加屏蔽词   | CommentMgmt->ToolsCommentTermsBannedAdd()    | 巨量千川 |
| 批量删除屏蔽词   | CommentMgmt->ToolsCommentTermsBannedDelete() | 巨量千川 |
| 更新屏蔽词       | CommentMgmt->ToolsCommentTermsBannedUpdate() | 巨量千川 |
| 获取屏蔽词       | CommentMgmt->ToolsCommentTermsBannedGet()    | 巨量千川 |
| 添加屏蔽用户     | CommentMgmt->ToolsAwemeBannedCreate()        | 巨量千川 |
| 删除屏蔽用户     | CommentMgmt->ToolsAwemeBannedDelete()        | 巨量千川 |
| 获取屏蔽用户列表 | CommentMgmt->ToolsAwemeBannedList()          | 巨量千川 |

## GeographicInformationMgmt 地理信息管理

| 方法名称          | 调用方法                                        | 支持平台 |
| ----------------- | ----------------------------------------------- | -------- |
| 查询国家/区域信息 | GeographicInformationMgmt->OpenApiFileImageAd() | 巨量千川 |
| 获取行政信息      | GeographicInformationMgmt->ToolsAdminInfo()     | 巨量千川 |
