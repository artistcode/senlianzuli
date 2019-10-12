create table if not exists tpt_goods
(
	goods_id int auto_increment
		constraint `PRIMARY`
			primary key,
	goods_name varchar(100) default '' null,
	goods_sn varchar(150) default '' null,
	goods_price decimal(10,2) null comment 'decimal(10,2)',
	goods_number int default 0 null,
	type_id smallint default 0 null,
	cat_id smallint default 0 null,
	add_time int null,
	is_delete tinyint default 0 null comment '是否在回站 0-不在回收站 1-在回收站',
	is_sale tinyint default 1 null comment '默认为1： 0-未上架 1-已上架',
	is_new tinyint default 1 null comment '默认为1： 0-不是新品 1-是新品',
	is_best tinyint default 1 null comment '默认为1： 0-不是推荐 1-是推荐',
	is_hot tinyint default 1 null comment '默认为1： 0-不是热卖 1-是热卖商品',
	goods_desc text null,
	seo_title varchar(200) null comment 'SEO标题',
	seo_keywords varchar(200) null comment 'SEO关键词',
	seo_desc varchar(1000) null comment 'SEO描述'
)
engine=InnoDB;

