# Tools 工具 API 结构

> 该接口千川&广告&本地推&星图通用。

### GlobalPlanningTool 全域计划调控工具

| 方法名称         | 调用方法                                        |
| ---------------- | ----------------------------------------------- |
| 获取调控任务列表 | GlobalPlanningTool->AdControlTaskList()         |
| 修改任务调控状态 | GlobalPlanningTool->AdControlTaskStatusUpdate() |
| 创建调控任务     | GlobalPlanningTool->AdControlTaskCreate()       |

### AudienceMgmt 人群管理

| 方法名称         | 调用方法                               |
| ---------------- | -------------------------------------- |
| 删除人群         | AudienceMgmt->AudienceDelete()         |
| 大文件分片上传   | AudienceMgmt->AudienceFilePartUpload() |
| 小文件直接上传   | AudienceMgmt->AudienceFileUpload()     |
| 获取人群分组     | AudienceMgmt->AudienceGroupGet()       |
| 获取人群管理列表 | AudienceMgmt->AudienceListGet()        |
| 推送人群         | AudienceMgmt->AudiencePush()           |
| 查询创编可用人群 | AudienceMgmt->DmpAudiencesGet()        |
| 获取定向包列表   | AudienceMgmt->OrientationPackageGet()  |
| 上传人群         | AudienceMgmt->AudienceCreateByFile()   |

### DynamicCreativeWordPackMgmt 动态创意词包管理

| 方法名称         | 调用方法                                               |
| ---------------- | ------------------------------------------------------ |
| 查询动态创意词包 | DynamicCreativeWordPackMgmt->ToolsCreativeWordSelect() |

### GeographicInformationMgmt 地理信息管理

| 方法名称          | 调用方法                                        |
| ----------------- | ----------------------------------------------- |
| 查询国家/区域信息 | GeographicInformationMgmt->OpenApiFileImageAd() |
| 获取行政信息      | GeographicInformationMgmt->ToolsAdminInfo()     |

### OneClickCampaignScaling 计划一键起量

| 方法名称             | 调用方法                                                             |
| -------------------- | -------------------------------------------------------------------- |
| 获取计划一键起量报告 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostReportGet()  |
| 设置计划一键起量任务 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostSet()        |
| 获取计划一键起量状态 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostStatusGet()  |
| 获取计划一键起量版本 | OneClickCampaignScaling->QianchuanToolsSmartBoostAdBoostVersionGet() |

### DouYinInfluencerMgmt 抖音达人定向管理

| 方法名称                     | 调用方法                                                |
| ---------------------------- | ------------------------------------------------------- |
| 查询抖音号 id 对应的达人信息 | DouYinInfluencerMgmt->ToolsAwemeAuthorInfoGet()         |
| 查询抖音类目下的推荐达人     | DouYinInfluencerMgmt->ToolsAwemeCategoryTopAuthorGet()  |
| 查询抖音帐号和类目信息       | DouYinInfluencerMgmt->ToolsAwemeInfoSearch()            |
| 查询抖音类目列表             | DouYinInfluencerMgmt->ToolsAwemeMultiLevelCategoryGet() |
| 查询抖音类似帐号             | DouYinInfluencerMgmt->ToolsAwemeSimilarAuthorSearch()   |
| 查询授权直播抖音达人列表     | DouYinInfluencerMgmt->ToolsLiveAuthorizeList()          |

### BehavioralIntMgmt 行为兴趣词管理

| 方法名称                   | 调用方法                                                 |
| -------------------------- | -------------------------------------------------------- |
| 兴趣行为类目关键词 id 转词 | BehavioralIntMgmt->ToolsInterestActionId2Word()          |
| 兴趣行为类目               | BehavioralIntMgmt->ToolsInterestActionActionCategory()   |
| 兴趣行为类目关键词         | BehavioralIntMgmt->ToolsInterestActionActionKeyword()    |
| 兴趣类目                   | BehavioralIntMgmt->ToolsInterestActionInterestCategory() |
| 兴趣类目关键词             | BehavioralIntMgmt->ToolsInterestActionInterestKeyword()  |
| 兴趣行为关键词推荐         | BehavioralIntMgmt->ToolsInterestActionKeywordSuggest()   |

### CommentMgmt 评论管理

| 方法名称             | 调用方法                              |
| -------------------- | ------------------------------------- |
| 隐藏评论             | CommentMgmt->ToolsCommentHide()       |
| 获取评论视频 ID 列表 | CommentMgmt->ToolsCommentMid2ItemId() |
| 获取评论列表         | CommentMgmt->ToolsCommentGet()        |
| 获取评论统计指标     | CommentMgmt->ToolsCommentMetricsGet() |
| 回复评论             | CommentMgmt->ToolsCommentReply()      |
| 获取评论回复         | CommentMgmt->ToolsCommentReplyGet()   |
| 置顶/取消置顶评论    | CommentMgmt->ToolsCommentStickOnTop() |

### QueryTool 查询工具

| 方法名称             | 调用方法                                    | 平台                    |
| -------------------- | ------------------------------------------- | ----------------------- |
| 获取行业列表         | QueryTool->ToolsIndustryGet()               |                         |
| 获取在投计划配额信息 | QueryTool->AdQuotaGet()                     |                         |
| 查看积分处置详情     | QueryTool->SecurityScoreDisposalInfoGet()   |                         |
| 查询账户累计积分     | QueryTool->SecurityScoreTotalGet()          |                         |
| 查询违规积分明细     | QueryTool->SecurityScoreViolationEventGet() |                         |
| 智能优惠券白名单     | QueryTool->ToolsAllowCoupon()               |                         |
| 获取定向受众预估     | QueryTool->ToolsEstimateAudience()          |                         |
| 获取白名单能力       | QueryTool->ToolsGray()                      |                         |
| 操作日志查询         | QueryTool->ToolsLogSearch()                 | `千川` `广告` `本地推 ` |
