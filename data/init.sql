DROP DATABASE IF EXISTS php_board;
CREATE DATABASE php_board;
USE php_board;
DROP TABLE IF EXISTS name;


CREATE TABLE users (
  id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(32) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  comment VARCHAR(255) DEFAULT "Thank you",
  del_flg INT(11) DEFAULT 0,
  admin_flg INT(11) DEFAULT 0,
  sing DATETIME NOT NULL,
  login DATETIME NULL,
  PRIMARY KEY(id)
)DEFAULT CHARACTER SET=utf8;

CREATE TABLE posts (
		id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
		user_id INT(11) NOT NULL,
		name VARCHAR(32) NOT NULL,
		post VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
)DEFAULT CHARACTER SET=utf8;

CREATE TABLE comment (
		id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
		user_id INT(11) NOT NULL,
    post_id INT(11) NOT NULL,
		name varchar(32) not null,
		comment varchar(255) not null,
    PRIMARY KEY(id)
)DEFAULT CHARACTER SET=utf8;

CREATE TABLE favorites (
		id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
		user_id INT(11) NOT NULL,
    post_id INT(11) NOT NULL,
    comment_id INT(11) NOT NULL,
    del_flg INT(11) NOT NULL,
    PRIMARY KEY(id)
)DEFAULT CHARACTER SET=utf8;

CREATE TABLE follows (
		id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
		user_id INT(11) NOT NULL,
    follw_id INT(11) NOT NULL,
    del_flg INT(11) NOT NULL,
    PRIMARY KEY(id)
)DEFAULT CHARACTER SET=utf8;

insert into users(name,password,email,sing) values('takuya','takuya0909','takuya@takuya.co.jp',cast('2009-08-03 23:58:01' as datetime));
insert into users(name,password,email,sing) values('kato','kato0909','kato@kato.co.jp',cast('2009-08-03 23:58:01' as datetime));
insert into users(name,password,email,sing) values('ito','ito0909','ito@ito.co.jp',cast('2009-08-03 23:58:01' as datetime));

insert into posts(user_id,name,post) values(1,'takuya','test1');
insert into posts(user_id,name,post) values(2,'kato','aaa');
insert into posts(user_id,name,post) values(3,'ito','bbb');

insert into comment(user_id,post_id,name,comment) values(1,1,'takuya','comment1');

SELECT * FROM users where name LIKE 'ito';
