# Model
/*2015/03/01 変更*/
create table students(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  email VARCHAR (255),
  password VARCHAR (255),
  gender enum('male', 'female'),
  birthday date,
  email_accept int,
  university VARCHAR (255),
  year int,
  faculty VARCHAR (255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);


# Test
INSERT INTO students(name, password, created, modified) VALUES ('user1', 'password1', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user2', 'password2', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user3', 'password3', now(), now());



#model

create table events(
id int auto_increment primary key,
state int,
title varchar(25),
company_name varchar(255),
company_info text,
body text,
detail text,
period VARCHAR (50),
thumbnail VARCHAR (255),
location VARCHAR (255),
date datetime,
created datetime DEFAULT null,
modified datetime DEFAULT null
);


create table intern(
  id int auto_increment primary key,
  event_id int,
  state int,
  target VARCHAR (50),
  limit_num int,
  skill VARCHAR (50),
  payment int,
  conditions VARCHAR (255),
  treatment VARCHAR (255),
  country_name VARCHAR (255)

);

create table study_abroad(
  id int auto_increment primary key,
  event_id int,
  skill VARCHAR (50),
  class VARCHAR (50),
  cost int,
  stay_type VARCHAR (50),
  conditions VARCHAR (255),
  envirionment text,
  deadline datetime,
  country_name VARCHAR (255)

);

create table camp(
  id int auto_increment primary key,
  event_id int,
  fromwhere VARCHAR (50),
  limit_num int,
  food VARCHAR (255),
  withmen VARCHAR (50),
  tuition int,
  stay_type VARCHAR (50),
  schedule text,
  cost int,
  pref VARCHAR (255)

);



create table lesson(
  id int auto_increment primary key,
  event_id int,
  skill VARCHAR (50),
  cost int,
  pref VARCHAR (255)

);


create table funny_event(
  id int auto_increment primary key,
  event_id int,
  limit_num int,
  limit_min int,
  deadline datetime,
  cost int,
  schedule text,
  pref VARCHAR (255)

);


create table student_group(
  id int auto_increment primary key,
  event_id int,
  cost int,
  limit_num int,
  pref VARCHAR (255)

);
















#model

create table facebook_users(
  id int not null primary key auto_increment,
  student_id int not null,
  facebook_user_id VARCHAR (255),
  birthday VARCHAR (255),
	email VARCHAR (255),
	first_name VARCHAR (255),
	gender VARCHAR (50),
	last_name VARCHAR (255),
	link VARCHAR (255),
	locale VARCHAR (50),
	name VARCHAR (255),
	timezone int,
	updated_time VARCHAR (255),
	verified VARCHAR (50),
	university VARCHAR (255),
	faculty VARCHAR (255),
	friends_num int,
	access_token VARCHAR (255),
	created datetime DEFAULT null,
	modified datetime DEFAULT null
);

#追加分



#追加分byMarkTagTable


CREATE TABLE etags(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);

CREATE TABLE stags(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);





create table etags_events(
  id int not null primary key auto_increment,
  etag_id int,
  event_id int,
  created datetime DEFAULT null,
  modified datetime DEFAULT null


);


create table stags_students(
  id int not null primary key auto_increment,
  stag_id int,
  student_id int,
  created datetime DEFAULT null,
  modified datetime DEFAULT null

);


create table applies_events(
  id int not null primary key auto_increment,
  student_id int,
  event_id int,
  created datetime DEFAULT null,
  modified datetime DEFAULT null

);


create table events_logs(
  id int not null primary key auto_increment,
  student_id int,
  event_id int,
  counter int DEFAULT 1,
  created datetime DEFAULT null,
  modified datetime DEFAULT null


);

CREATE table attachments (
    id int NOT NULL auto_increment PRIMARY KEY,
    model varchar(20) NOT NULL,
    foreign_key int(11) NOT NULL,
    attachment varchar(255) NOT NULL,
    dir varchar(255) NOT NULL,
    type  varchar(255) DEFAULT NULL,
    size int(11) DEFAULT 0,
    active tinyint(1) DEFAULT 1

);

/*追加分byMark20150415*/
create table student_group_info(
  id int NOT NULL auto_increment PRIMARY KEY,
  event_id int,
  universities text,
  activities text,
  created datetime DEFAULT null,
  modified datetime DEFAULT null
);








