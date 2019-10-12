create table if not exists tpt_admin_menu
(
	menu_id smallint unsigned auto_increment comment '菜单id'
		constraint `PRIMARY`
			primary key,
	menu_name varchar(30) default '' not null comment '菜单昵称',
	menu_parent_id smallint unsigned default 0 not null comment '父级菜单',
	menu_addtime timestamp default CURRENT_TIMESTAMP not null comment '菜单添加时间',
	method varchar(30) default '' not null comment '模型',
	control varchar(30) default '' not null comment '控制器',
	icon varchar(30) default '' not null comment '图标',
	sort tinyint unsigned default 0 not null,
	is_menu tinyint(1) default 0 not null comment '是否是菜单 0(是) 1(不是)'
)
comment '后台菜单';

