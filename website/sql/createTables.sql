CREATE TABLE users (
	id int(5) NOT NULL AUTO_INCREMENT,
	name varchar(100) NOT NULL,
	type ENUM('administrator', 'student'),
	email varchar(200) NOT NULL,
	phone varchar(15) NOT NULL,
	pword varchar(30) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE notes (
	id int(5) NOT NULL AUTO_INCREMENT,
	reporterid int(5) NOT NULL,
	subjectid int(5) NOT NULL,
	notes varchar(300),
	PRIMARY KEY (id),
	FOREIGN KEY (reporterid) REFERENCES users(id),
	FOREIGN KEY (subjectid) REFERENCES users(id)
);

CREATE TABLE contacts (
	user1 int(5) NOT NULL,
	user2 int(5) NOT NULL,
	PRIMARY KEY (user1, user2),
	FOREIGN KEY (user1) REFERENCES users(id),
	FOREIGN KEY (user2) REFERENCES users(id)
);

CREATE TABLE files (
	id int(5) NOT NULL AUTO_INCREMENT,
	uploaderid int(5) NOT NULL,
	url varchar(255) NOT NULL,
	notes varchar(300),
	PRIMARY KEY (id),
	FOREIGN KEY (uploaderid) REFERENCES users(id)
);

CREATE TABLE groups (
	id int(5) NOT NULL AUTO_INCREMENT,
	type ENUM('school', 'other'),
	name varchar(100) NOT NULL,
	address varchar(300) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE groupmembers (
	userid int(5) NOT NULL,
	groupid int(5) NOT NULL,
	PRIMARY KEY (userid, groupid),
	FOREIGN KEY (userid) REFERENCES users(id),
	FOREIGN KEY (groupid) REFERENCES groups(id)
);