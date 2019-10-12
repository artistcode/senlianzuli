create table if not exists tpt_attribute_type
(
	attr_type_id int unsigned auto_increment
		constraint `PRIMARY`
			primary key,
	attr_type_name varchar(30) default '' not null comment '属性名称'
)
comment '属性类型';

