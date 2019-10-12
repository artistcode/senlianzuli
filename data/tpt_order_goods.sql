create table if not exists tpt_order_goods
(
	id int auto_increment
		constraint `PRIMARY`
			primary key,
	order_id varchar(100) null,
	goods_id int null,
	goods_attr_ids varchar(30) null,
	goods_number int(5) null,
	goods_price decimal(10,2) null
)
engine=InnoDB;

