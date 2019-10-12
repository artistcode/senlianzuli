create table if not exists tpt_column
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
	model_id tinyint unsigned default 0 not null comment '模块id',
	nav_show tinyint(4) unsigned default 0 not null comment ' 0 不显示 0头部主导航条 0尾部导航条 0都显示',
	keywords varchar(50) default '' not null comment 'seo关键字',
	description varchar(100) default '' not null comment 'seo描述',
	short_description varchar(255) default ' ' not null comment '简短描述',
	home_is_show tinyint(1) default 0 not null comment '主页是否显示'
)
comment '前台导航';

