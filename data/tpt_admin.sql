create table if not exists tpt_admin
(
	admin_id int unsigned auto_increment comment '用户id'
		constraint `PRIMARY`
			primary key,
	admin_nickname varchar(30) default '' not null comment '用户昵称',
	admin_passwd char(32) default '' not null comment '用户密码',
	admin_account varchar(30) default '' not null comment '用户账户',
	admin_group int unsigned default 1 not null comment '用户所属组',
	addtime timestamp default CURRENT_TIMESTAMP not null comment '用户添加时间',
	sex tinyint(1) default 0 not null comment '1 男 2女 0 人妖',
	status tinyint(1) default 0 not null comment '0 锁定 1 开启',
	remarks varchar(30) default '' not null comment '备注'
)
comment '管理员用户表';

