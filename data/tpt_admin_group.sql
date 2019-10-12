create table if not exists tpt_admin_group
(
	admin_group_id int unsigned auto_increment comment '组id'
		constraint `PRIMARY`
			primary key,
	admin_group_name varchar(30) default '' not null comment '组名称',
	menu_id_list varchar(50) default '' not null comment '权限列表',
	addtime timestamp default CURRENT_TIMESTAMP not null comment '组添加时间',
	remarks varchar(30) default '' not null comment '备注'
)
comment '管理员用户组表';

