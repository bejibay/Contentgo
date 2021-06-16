﻿
// create database


CREATE DATABASE soowecco;
use soowecco;

CREATE TABLE admin IF NOT EXIST C
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username  VARCHAR() NOT NULL,
Firstname  VARCHAR() NOT NULL,
Lastname  VARCHAR() NOT NULL,
email  VARCHAR() NOT NULL,
Password  VARCHAR() NOT NULL,
date TIMESTAMP,
ipaddress VARCHAR()
); 

CREATE TABLE pages IF NOT EXIST C
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pagename VARCHAR() NOT NULL,
pageurl  VARCHAR() NOT NULL,
title SMALLTEXT,
description SMALLTEXT,
content TEXT,
date TIMESTAMP,
ipaddress VARCHAR()
);


CREATE TABLE posts IF NOT EXIST C
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
posturl  VARCHAR() NOT NULL,
title SMALLTEXT,
description SMALLTEXT,
categoryid VARCHAR() NOT NULL,
nediaid VARCHAR() NOT NULL,
authorid VARCHAR() NOT NULL,
commentid VARCHAR() NOT NULL,
content TEXT,
date TIMESTAMP,
ipaddress VARCHAR()
); 
   

CREATE TABLE media IF NOT EXIST C
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
mediaurl  VARCHAR() NOT NULL,
postid  VARCHAR() NOT NULL,
title SMALLTEXT,
description SMALLTEXT,
content BLOB,
date TIMESTAMP,
ipaddress VARCHAR()
); 


CREATE TABLE comment IF NOT EXIST C
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name  VARCHAR() NOT NULL,
email  VARCHAR() NOT NULL,
postid  VARCHAR() NOT NULL,
content TEXT,
wbsite VARCHAR() NOT NULL,
date TIMESTAMP,
ipaddress VARCHAR()
);

CREATE TABLE user IF NOT EXIST C
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name  VARCHAR() NOT NULL,
username VARCHAR() NOT NULl UNIQUE,
email  VARCHAR() NOT NULL UNIQUE,
password VARCHAR() NOT NULL,
reseturl VARCHAR() NOT NULl,
date TIMESTAMP,
ipaddress VARCHAR()
UNIQUE
);






