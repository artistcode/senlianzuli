create table if not exists tpt_member
(
	uid int auto_increment
		constraint `PRIMARY`
			primary key,
	username varchar(30) default '' null,
	password char(32) default '' null,
	email varchar(50) default '' null,
	phone varchar(20) null,
	register_time int null,
	openid varchar(50) default '' null
)
engine=InnoDB;

