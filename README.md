# 森联租赁

开发技术  PHP +mysql +apache
开发框架  layui  thinkphp5
作者  廖桂钦
所属公司 森联租赁
业务 
1 出租  电子设备 

需求

平台开发	一级目录	　二级目录	三级目录	功能描述	　人员工作类型
1	
需求调研	
对需求进行梳理，并根据细化的需求设计出产品原型图（UE）	UE设计
2	
交互设计	
根据UE，设计出符合项目需要的交互界面（UI）	UI设计
设计费用
程序功能开发
系统	一级目录	　二级目录	三级目录	功能描述	　人员工作类型
微信小程序端、接口	首页	注册登录	
微信授权登录	微信小程序端、接口
地址定位	
定位所在地点
搜索	
输入商品名称可以进行商品搜索
边栏	关于	关于我们图文介绍
分享	可以将APP分享到微信
清理缓存	可以进行缓存清理
banner广告	
数张滚动的banner广告，点击可跳转至内部相关跳转页面
公告	
展示平台相关公告及资讯信息
商品分类导航	
数个商品分类导航框，点击后会跳转到相应的商品分类产品	微信小程序端、接口
领取抵用券	
点击可以领取抵用券
热门商品	
列表展示热门商品，点击进入可以查看商品详情信息，可以添加入购物车或者立即购买（支持微信支付），可以咨询客服，添加商品收藏，可以查看商品详细的图文介绍信息，用户可以对商品进行评价，也可以查看其它用户的评价信息
热门资讯	
列表显示热门资讯信息，点击进入后可以查看资讯详情信息（图文介绍）
全部商品	租	已租产品	已租产品/已租时长/退还跳转 列表展示	微信小程序端、接口
在租产品列表展示	在租产品图片（数张图片）、标题、价格、商品详情、在线咨询、加入购物车、立即购买（租赁协议、支付方式等接口）、保币租金管理（租期90天起）
退	已退列表	退租协议确认/预退费用预估/确认退还/手工物流信息完善/物流状态/在退押金/已完成（关闭以上数据）
换	已换列表	换租协议确认/换租费用预估/确认换租/手工物流信息完善/物流状态/在换押金/已完成（关闭以上数据）
租转售	已转买列表	转买协议确认/转买费用预估/补差价确认转买/已完成（关闭以上数据）
商品分类	
分类显示所有商品，点击某个分类，可以查看此分类下的所有该分类商品
商品分类详情	商品搜索	可以根据商品名称进行商品搜索
商品筛选	可以根据评价量、销量、价格进行商品筛选
商品详情	展示商品详情信息：可以添加入购物车或者立即购买或租赁（微信小程序支持微信支付），可以咨询客服，添加商品收藏，可以查看商品详细的图文介绍信息，用户可以对商品进行评价，也可以查看其它用户的评价信息
购物车	购买	选择	可以从购物车选择要结算的商品进行结算，可以进行全选	微信小程序端、接口
编辑	编辑购物车商品信息：可以进行删除，增加数量的操作
结算	点击结算，会弹出订单界面，显示商品金额，需填写收件人地址，点击提交订单后，可以进行微信支付，生成订单）
博主	信息列表	
可以查看发布的所有博主图文信息，可以进行评论，可以进行分享	微信小程序端、接口
信息发布	
可以进行信息发布
会员中心	基本信息	
姓名、电话号码、微信号、城市、会员ID	微信小程序端、接口
会员	
可以查看会员权益，可以进行会员在线购买，可以联系客服
余额	
显示我的余额金额，可以进行充值、转账给其他用户、提现，可以查看收入明细
积分	我的积分	显示我的积分余额，可以将积分转账给其他用户，列表显示积分收支信息
积分商城	可以用积分兑换抵用券等商品；
可以查看积分兑换记录
我的订单	
分类显示我的所有订单（租、退、换、买）：全部、待付款、待发货、待收货、已完成，显示每个分类状态下的所有商品订单信息	微信小程序端、接口
基础工具	收藏	列表显示我收藏的所有商品信息
足迹	列表显示我过去浏览过的所有商品信息
评论	显示我待评价、已评价的商品信息
关系	显示我推荐的人：一级，可以根据角色以及等级进行筛选
地址管理	管理商品的收货地址信息，可以对收货地址信息进行增删改查操作
抵用券	显示待使用、已过期、已使用的优惠券信息，可以点击领券链接，前去领券
消息通知	显示所有推送的消息信息：包括平台消息，以及订单提醒等消息
签到	签到可以获得积分奖励
我的推广	基本信息	手机号、会员ID、收入分享
收入信息	显示累计收入、可提现收入，可将可提现收入提现到微信
收入明细	列表显示我的收入来源明细列表，可以根据日期进行筛选
提现明细	显示我的提现记录信息，包括全部、已打款、无效
权限	1、申请成为分销商（填写姓名、电话信息）
2、显示分销收入、点击进入可以查看分销收入获得的详情
3、显示分销特权：拥有专属二维码、推广收入计算规则
4、查看分销商信息，显示下级的分销商等级
门店申请	
设置账号、设置密码、填写姓名、手机号、门店名称、所属类型、所在城市、详细地址、地理位置经纬度、营业开始时间、营业结束时间、门店图片、营业执照、备注信息，同意申请协议，进行门店申请
用户端开发
商家管理后台	商品管理	商品列表	
显示商城商品信息、快速修改商品价格、库存等信息，复制商品、编辑商品、删除商品、获取商品链接	商家管理后台端、接口
商品分类	
添加商品一级、二级、三级分类，设置商品基本信息、推荐、显示属性，商品分类页面广告
品牌管理	
添加品牌、设置品牌基本信息
配送模板	
支持按重量（首重、续重）、件数设置运费模板，支持不同区域设置不同的运费；支持添加过个运费模板
评论管理	
查看管理商品评价信息、手动添加商品评价
优惠券管理	
添加多张满减、打折优惠券，支持设置优惠券会员等级权限、期限、指定使用范围，优惠券领券中心
订单管理	订单列表	
订单状态、下单会员信息、下单商品信息、订单搜索、筛选、导出
订单处理	
修改价格、确认付款、发货、确认收货、退换货、退款
财务管理	营收数据	
店铺每日营收情况，营销明细管理	商家管理后台端、接口
支付	
打通各大支付平台（微信、支付宝）
分销提点	
分销流程中，相关提点情况查询提现
商家后台开发费用

系统管理	商城入口	
获取商城首页、分类、会员中心等主要页面入口链接	PC web管理后台端、接口
商城设置	
商城基础信息、客服、会员等级升级依据、强制绑定手机号、分类层级、短信、抵用券到期提醒、会员资料自定义表单、语言设置、自动完成订单设置、支付方式设置、分享引导关注设置、消息提醒设置。
角色管理	
设置商城管理角色，赋予角色指定操作权限
操作员设置	
添加商城操作员，赋予操作员角色或者指定操作权限
插件管理	
安装、更新商城插件
系统升级	
更新商城系统
商品管理	商品信息	
自定义创建多个品类及单品信息	PC web管理后台端、接口
商品详情	
自定义商品标签、调节详情页以及发布时间自定义
库存管理	
库存管理、库存预警
商品模板	
新建商品模板，支持商品一键式导入
评论管理	
商品评论功能
商品详情	
自定义商品详情页
配送管理	
商品配送、物流信息管理追踪
抵用券管理	
添加多张满减抵扣券，支持设置优惠券会员等级权限、期限、指定使用范围，抵扣券领券中心
客户管理	会员管理	
列表管理会员信息
采集客户信息	
根据浏览足迹自主采集客户相关信息
会员等级	
会员等级系统，等级权益（6个等级）、积分、余额、提现，
积分	
会员积分及兑换系统
提醒	
客户微标签，抵用券提醒
短信通知	
客户群发通知短信
基础工具	
基础工具（收藏、足迹、评论、地址管理、消息通知）
订单管理	订单列表	
订单状态、下单会员信息、下单商品信息、订单搜索、筛选、导出
订单处理	
修改价格、确认付款、发货、确认收货、退换货、退款
财务管理	营收数据	
店铺每日营收情况，营销明细管理	PC web管理后台端、接口
支付	
打通各大支付平台（微信、支付宝）
分销提点	
分销流程中，相关提点情况查询提现，保币押金管理
营销功能	分销	
导购分销系统、分销机制	PC web管理后台端、接口
促销	
店铺促销，抵用券等各类促销功能
营销推广操作	
定向发券、大转盘营销推广操作
客服	
客服功能
博主管理	

管理发布的博主信息
LBS商家定位	LBS商家定位	
定位附近商家，周边生活服务的搜索：以点评网或者生活信息类网站与地理位置服务结合的模式，代表大众点评网、台湾的折扣王等。主要体验在于工具性的实用特质，问题在于信息量的积累和覆盖面需要比较广泛。	PC web管理后台端、接口

以地理位置为基础的小型社区：地理位置为基础的小型社区

店内模式：ShopKick将用户吸引到指定的商场里

    
