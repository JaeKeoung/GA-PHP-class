drop table if exists board;
CREATE TABLE board(
id int(11) unsigned not null auto_increment,
name varchar(20) not null,
email varchar(30),
pass varchar(12) not null,
title varchar(70) not null,
content text not null,
wdate datetime not null,
ip varchar(15) not null,
view int(11) not null default 0,
primary key(id)
)DEFAULT CHARSET=utf8;

insert into board(name, email, pass, title, content, wdate, ip, view) values ('test01', 'test01@exapmle.com', 'pass01', 'title01', 'testcontent01', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test02', 'test02@exapmle.com', 'pass02', 'title02', 'testcontent02', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test03', 'test03@exapmle.com', 'pass03', 'title03', 'testcontent03', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test04', 'test04@exapmle.com', 'pass04', 'title04', 'testcontent04', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test05', 'test05@exapmle.com', 'pass05', 'title05', 'testcontent05', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test06', 'test06@exapmle.com', 'pass06', 'title06', 'testcontent06', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test07', 'test07@exapmle.com', 'pass07', 'title07', 'testcontent07', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test08', 'test01@exapmle.com', 'pass08', 'title08', 'testcontent01', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test09', 'test09@exapmle.com', 'pass09', 'title09', 'testcontent09', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test10', 'test10@exapmle.com', 'pass10', 'title10', 'testcontent10', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test11', 'test11@exapmle.com', 'pass11', 'title11', 'testcontent11', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test12', 'test12@exapmle.com', 'pass12', 'title12', 'testcontent12', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test13', 'test13@exapmle.com', 'pass13', 'title13', 'testcontent13', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test14', 'test14@exapmle.com', 'pass14', 'title14', 'testcontent14', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test15', 'test15@exapmle.com', 'pass15', 'title15', 'testcontent15', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test16', 'test16@exapmle.com', 'pass16', 'title16', 'testcontent16', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test17', 'test17@exapmle.com', 'pass17', 'title17', 'testcontent17', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test18', 'test18@exapmle.com', 'pass18', 'title18', 'testcontent18', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test19', 'test19@exapmle.com', 'pass19', 'title19', 'testcontent19', now(), '127.0.0.1', 0);
insert into board(name, email, pass, title, content, wdate, ip, view) values ('test20', 'test20@exapmle.com', 'pass20', 'title20', 'testcontent20', now(), '127.0.0.1', 0);