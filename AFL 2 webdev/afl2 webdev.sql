drop database if exists afl2;
create database afl2;
use afl2;
CREATE table table1
(
	id int primary key auto_increment,
	nama varchar(100),
	email varchar(50),
	phone varchar(15),
	msg varchar(500)
);
select *from table1;