create table if not exists tpt_attribute
(
	attr_id int auto_increment
		constraint `PRIMARY`
			primary key,
	type_id tinyint null,
	attr_name varchar(30) default '' null,
	attr_type tinyint null comment 'attr_type值为0唯一属性，单选属性值为1',
	attr_values varchar(255) default '' null
)
engine=InnoDB;

