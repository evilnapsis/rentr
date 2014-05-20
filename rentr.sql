create database rentr;
use rentr;

create table user(
	id int not null auto_increment primary key,
	name varchar(100) not null,
	lastname varchar(100) not null,
	email varchar(255) not null,
	password varchar(60) not null,
	is_admin boolean not null default 0,
	created_at datetime not null
);

insert into user(name,lastname,email,password,is_admin,created_at) value("Admin","","admin@rentr.co","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad",1,NOW());

create table stuff(
	id int not null auto_increment primary key,
	name varchar(100) not null,
	description varchar(500) not null,
	image varchar(255),
	price float not null,
	is_active boolean not null default 0,
	created_at datetime not null
);

create table rent(
	id int not null auto_increment primary key,
	client_id int not null,
	stuff_id int not null,
	days int not null,
	is_deliver boolean not null default 0,
	foreign key (client_id) references user(id),
	foreign key (stuff_id) references stuff(id)
);

