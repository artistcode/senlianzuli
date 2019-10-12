create table if not exists tpt_module
(
	module_id smallint unsigned auto_increment comment '模块id'
		constraint `PRIMARY`
			primary key,
	module_name varchar(30) default '' not null comment '模块名称',
	module_control varchar(30) default '' not null comment '模块控制名称',
	module_method varchar(30) default '' not null comment '模块方法',
	module_parent smallint unsigned not null comment '父级id',
	sort smallint unsigned default 255 not null comment '排序id',
	template_file varchar(50) default '' not null comment '模板文件',
	module_type tinyint default 0 not null comment '模板文件'
);

