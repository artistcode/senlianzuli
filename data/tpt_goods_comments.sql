create table if not exists tpt_goods_comments
(
	id int(11) unsigned auto_increment comment '自增id'
		constraint `PRIMARY`
			primary key,
	user_id int(11) unsigned default 0 not null comment '用户id',
	order_id int(11) unsigned default 0 not null comment '业务订单id',
	goods_id int(11) unsigned default 0 not null comment '商品id',
	business_type char(30) default '' not null comment '业务类型名称（如订单 order）',
	content char(255) default '' not null comment '评价内容',
	reply char(255) default '' not null comment '回复内容',
	rating tinyint(1) unsigned default 0 not null comment '评价级别（默认0 1~5）',
	is_show tinyint(1) unsigned default 0 not null comment '是否显示（0否, 1是）',
	is_anonymous tinyint(1) unsigned default 0 not null comment '是否匿名（0否，1是）',
	is_reply tinyint(1) unsigned default 0 not null comment '是否回复（0否，1是）',
	reply_time int(11) unsigned default 0 not null comment '回复时间',
	add_time int(11) unsigned default 0 not null comment '添加时间',
	upd_time int(11) unsigned default 0 not null comment '更新时间'
)
comment '商品评论' engine=InnoDB charset=utf8mb4;

create index goods_id
	on tpt_goods_comments (goods_id);

create index order_id
	on tpt_goods_comments (order_id);

create index user_id
	on tpt_goods_comments (user_id);

