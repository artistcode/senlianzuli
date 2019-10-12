create table if not exists tpt_order
(
	id int auto_increment
		constraint `PRIMARY`
			primary key,
	order_id varchar(80) null,
	receiver varchar(30) null,
	address varchar(80) default '' null,
	tel char(15) null,
	zcode varchar(6) null,
	total_price decimal(10,2) null,
	user_id int null,
	pay_status tinyint default 0 not null comment '默认0 0-未付款 . 1-已付款',
	send_status tinyint default 0 not null comment '默认为0 0-未发货 ， 1-已发货 ，2-已收货 ，3-退货中 4-退货成功',
	ali_order_id varchar(255) default '' not null comment '当买家使用支付宝支付后支付宝给卖家的订单号',
	order_time int null,
	wuliu varchar(255) default '' null,
	com varchar(100) default '' null comment '物流公司'
)
engine=InnoDB;

