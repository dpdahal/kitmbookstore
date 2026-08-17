create database if not exists kitmbookstore;

use kitmbookstore;

create table if not exists users(
id int auto_increment primary key,
name varchar(100),
email varchar(100) unique,
password varchar(100),
gender enum("male","female","others"),
role set("admin","user") default 'user',
image varchar(100),
created_at datetime,
update_at datetime
);

create table if not exists category(
cid int auto_increment primary key,
name varchar(100) unique,
created_at datetime,
update_at datetime
);

create table if not exists books(
bid int auto_increment primary key,
category_id int,
user_id int,
title varchar(255),
slug varchar(255) unique,
price float,
quantity int,
image varchar(100),
description text,
created_at datetime,
update_at datetime,
foreign key (category_id) references category(cid), 
foreign key (user_id) references users(id)
)
