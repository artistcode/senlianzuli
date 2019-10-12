create table if not exists tpt_cart
(
	cart_id int auto_increment
		constraint `PRIMARY`
			primary key,
	goods_id int default 0 null,
	goods_attr_ids varchar(80) default '' null,
	goods_number int default 0 null,
	user_id int default 0 null
)
engine=InnoDB;

