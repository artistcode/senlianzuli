create table if not exists tpt_goods_attr
(
	goods_attr_id smallint unsigned auto_increment
		constraint `PRIMARY`
			primary key,
	goods_id int unsigned not null,
	attr_id smallint unsigned not null,
	attr_value varchar(255) default '' null,
	attr_price decimal(10,2) null
)
engine=InnoDB;

