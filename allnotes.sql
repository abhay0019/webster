create database allnotes;
use allnotes;
create table users
 (
   ID int NOT NULL AUTO_INCREMENT,
   NAME varchar(60) NOT NULL,
   USERNAME varchar(30) NOT NULL,
   REG_NO int NOT NULL,
   PROGRAM varchar(100),
   SEMESTER int NOT NULL,
   EMAIL_ID varchar(100) NOT NULL,
   MOBILE_NO int,
   PASSWD varchar(80) NOT NULL,
   PRIMARY KEY (ID)
  );
create table info1
 (
   SEMESTER int NOT NULL,
   BRANCH varchar(100) NOT NULL,
   SUBJECTS varchar(100) NOT NULL
  );
create table sub_materials
 (
   SUBJECTS varchar(100) NOT NULL,
   PDF varchar(100) NOT NULL,
   IMAGES varchar(100) NOT NULL,
   VEDIO varchar(100) NOT NULL,
   AUDIO varchar(100) NOT NULL
  );
create table admin
  (
    NAME varchar(100) NOT NULL,
    PASSWD varchar(80) NOT NULL
   );

 
