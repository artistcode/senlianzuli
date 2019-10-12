create table if not exists tpt_category
(
	cat_id int auto_increment
		constraint `PRIMARY`
			primary key,
	cat_name varchar(40) default '' null,
	pid smallint default 0 null,
	cat_path varchar(50) null,
	is_show tinyint default 1 null comment '1-显示 0-不显示',
	link varchar(150) default '' null comment '链接地址',
	icon varchar(50) default '' not null,
	is_cat tinyint unsigned default 0 not null comment '是否显示分类栏',
	is_home tinyint(1) default 0 not null comment '是否显示主页',
	sort smallint unsigned default 0 not null comment '排序'
)
engine=InnoDB;

