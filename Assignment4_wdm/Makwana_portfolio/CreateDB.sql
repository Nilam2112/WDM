CREATE TABLE about_me (
name text(20) NOT NULL,
phone decimal (10,0) NOT NULL,
address varchar (50) NOT NULL,
email varchar(50) NOT NULL,
dob varchar (50) NOT NULL,
nationality text (50) NOT NULL,
para1 text(200) NOT NULL
);

CREATE TABLE admin
(
User varchar(50) NOT NULL,
Password varchar (50) NOT NULL
);

CREATE TABLE Contact  (
Name varchar (50) NOT NULL,
Email varchar(50) NOT NULL,
phone int (50) NOT NULL,
Message varchar (50) NOT NULL
);


CREATE TABLE exp  (
year int (50) NOT NULL,
c_name varchar(50) NOT NULL,
position varchar (50) NOT NULL
);

CREATE TABLE signup  (
Firstname varchar(50) NOT NULL,
Lastname varchar(50) NOT NULL,
Email varchar(50) NOT NULL,
User varchar(50) NOT NULL,
Password varchar(50) NOT NULL,
Repeat_Password varchar (50) NOT NULL
);

CREATE TABLE skill  (
skill_name varchar (50) NOT NULL,
percentage varchar(50) NOT NULL,
skill_type varchar (50) NOT NULL
);

CREATE TABLE website  (
description longtext  NOT NULL,
img blob NOT NULL,
title text (50) NOT NULL
);

