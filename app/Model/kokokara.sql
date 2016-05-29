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
  thumbnail VARCHAR(255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);


# Test
INSERT INTO students(name, password, created, modified) VALUES ('user1', 'password1', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user2', 'password2', now(), now());
INSERT INTO students(name, password, created, modified) VALUES ('user3', 'password3', now(), now());


create table companies(
  id int not null primary key auto_increment,
  name VARCHAR (255),
  email VARCHAR (255),
  password VARCHAR (255),
  member_num int,
  contory  enum,
  state enum,
  duties text,
  phone int,
  url VARCHAR(255),
  industry_type enum,
  thumbnail VARCHAR(255),
  facebook VARCHAR(255),
  twitter VARCHAR(255),
  created datetime DEFAULT NULL ,
  modified datetime DEFAULT NULL
);



#Model

create table events(
id int auto_increment primary key,
companies_id int not null,
reviews_id int
title varchar(25),
about text,
detail text,
thumbnail VARCHAR (255),
period enum,
frequency enum,
reward enum,
residence enum,
trnsportation_expense enum,
salary VARCHAR(255),
skill1 VARCHAR(13),
skill2 VARCHAR(13),
skill3 VARCHAR(13),
skill4 VARCHAR(13),
skill_required text,
recruit1 VARCHAR(13),
recruit2 VARCHAR(13),
recruit3 VARCHAR(13),
recruit4 VARCHAR(13),
contents text,
profile text,
staff_photo VARCHAR(255),
staff_message VARCHAR(140),
created datetime DEFAULT null,
modified datetime DEFAULT null
);


create table reviews(
id int auto_increment primary key,
event_id int.
student_id int,
body text,
period enum('1ヶ月未満','1-2ヶ月','3ヶ月以上'),
cost int
busyness int,
severity int,
created datetime DEFAULT null,
modified datetime DEFAULT null,
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







