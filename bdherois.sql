create database dbherois CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbherois;

create table tbherois(
id int not null auto_increment,
nome varchar(200) NOT NULL,
realname varchar(200) NOT NULL,
teamaffiliation varchar(100) NOT NULL,
rating int NOT NULL,
primary key(id))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;