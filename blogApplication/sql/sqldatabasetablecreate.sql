create database blog_application;
show databases;
use blog_application;

create table user(
	id bigint(20) auto_increment primary key,
	prefix varchar(10),
	first_name varchar(50) ,
	last_name varchar(50),
	mobile varchar(15),
	email varchar(50) ,
	password_hash varchar(32),
	last_login_at datetime,
	information varchar(100),
	created_at datetime,
	updated_at datetime
);
describe user;

create table category(
	id bigint(20) auto_increment primary key,
	parent_category_id bigint(20),
	title varchar(75),
	meta_title varchar(100),
	url varchar(100),
	content text,
	created_at datetime,
	updated_at datetime,
	foreign key (parent_category_id) references category (id)
);
describe category;

create table blog_post(
	id bigint(20) auto_increment primary key,
	user_id bigint(20),
	title varchar(75),
	url varchar(100),
	content text,
	image blob,
	published_at datetime,
	created_at datetime,
	updated_at datetime,
	foreign key (user_id) references `user` (id)
);

describe blog_post;

create table post_category(
	post_id bigint(20),
	category_id bigint(20),
	foreign key (post_id) references blog_post (id),
	foreign key (category_id) references category (id)
);
describe post_category;

alter table `user` add UNIQUE(email);
describe `user`;

select * from blog_post;
select b.id,b.title,c.title,b.published_at from category c inner join post_category pc on pc.category_id = c.id inner join blog_post b on b.id = pc.post_id;
select b.id,c.title as categoryName,b.title,b.published_at from category c inner join post_category pc on pc.category_id = c.id inner join blog_post b on b.id = pc.post_id;
select c.id,c.title,b.image,c.created_at from category c inner join post_category pc on pc.category_id = c.id inner join blog_post b on b.id = pc.post_id;