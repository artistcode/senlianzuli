create table if not exists tpt_type
(
	type_id int auto_increment
		constraint `PRIMARY`
			primary key,
	type_name varchar(40) default '' null,
	mark text null
)
engine=InnoDB;

