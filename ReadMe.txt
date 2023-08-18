create database bus;
use bus;
create table admin (
admin varchar(50),
password varchar(30)
);
create table bus_details(
Busid int not null primary key auto_increment,
Bus_number char(10),
source varchar(100),
destination varchar(100)
);
create table sign_up (
id int not null primary key auto_increment,
fname varchar(100),
lname varchar(100),
email varchar(22),
pass varchar(87),
cpass varchar(87),
mobile_no varchar(11)
);

create table user_info(
Ticket_Number int not null primary key auto_increment,
name varchar(99),
middile varchar(99),
last varchar(99),
source varchar(99),
destination varchar(99),
adhar varchar(15),
mobile_no varchar(10),
Time1 varchar(10),
Timing varchar(13)
);


insert into bus_details(bus_number,source,destination) value('CG04AB0001','Raipur','Bhilai');
insert into bus_details(bus_number,source,destination) value('CG04AB0002','Bhilai','Raipur');
insert into bus_details(bus_number,source,destination) value('CG04AB0003','Durg','Bhilai');
insert into bus_details(bus_number,source,destination) value('CG04AB0004','Bhilai','Durg');