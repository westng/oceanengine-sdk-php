# JuLiangStarMap 巨量星图 API 结构

## AccountServices 账号服务

### AdvertiserInfoMgmt 广告主信息与资质管理

| 方法名称         | 方法名     |
| ---------------- | ---------- |
| 获取星图账户信息 | StarInfo() |

### AgencyAccountMgmt 代理商账号管理

| 方法名称           | 方法名                  |
| ------------------ | ----------------------- |
| 获取代理商信息     | AgentInfo()             |
| 二级代理商列表     | AgentChildAgentSelect() |
| 代理商管理账户列表 | AgentAdvertiserSelect() |

### FundsTransactionMgmt 资金和流水管理

| 方法名称           | 方法名                           |
| ------------------ | -------------------------------- |
| 查询账号流水明细   | AdvertiserFundTransactionGet()   |
| 查询代理商转账记录 | AgentTransferTransactionRecord() |
| 查询账户日流水     | AdvertiserFundDailyStat()        |
| 批量查询账户余额   | AccountFundGet()                 |

## MassiveStarMap 巨量星图

| 方法名称                         | 方法名                                 |
| -------------------------------- | -------------------------------------- |
| 获取星广联投(星图版)任务列表     | StarStarAdUniteTaskList()              |
| 获取星广联投(星图版)视频维度数据 | StarStarAdUniteTaskItemList()          |
| 获取星广联投(星图版)任务详情     | StarStarAdUniteTaskDetail()            |
| 获取订单投后分析报表             | StarReportOrderOverviewGet()           |
| 获取任务下累计可查询的数据指标   | StarReportDataTopicConfig()            |
| 获取投后数据主题累计数据         | StarReportCustomDataTopicReport()      |
| 获取投后每日趋势数据（短视频）   | StarReportCustomDataTopicDailyReport() |
| 获取星图客户任务订单列表         | StarDemandOrderList()                  |
| 获取星图订单投后线索             | StarClueGet()                          |
| 获取星图需求列表                 | StarDemandList()                       |
| 获取星图订单用户分布报表         | StarReportOrderUserDistributionGet()   |
