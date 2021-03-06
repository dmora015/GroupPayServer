
CREATE TABLE MEMBERS (
	login CHAR(20) UNIQUE NOT NULL,
	password CHAR(20) NOT NULL,
	fname CHAR(20) NOT NULL,
	lname CHAR(20) NOT NULL,
	email CHAR(50) NOT NULL UNIQUE,
	pic CHAR(20),
	PRIMARY KEY(login));
	
CREATE TABLE GROUPS (
	gid SERIAL,
	grpname CHAR(100) NOT NULL,
	grpsize INTEGER NOT NULL,
	description TEXT,
	managed_by CHAR(20) NOT NULL,
	PRIMARY KEY(gid),
	FOREIGN KEY (managed_by) REFERENCES MEMBERS(login));
	
CREATE TABLE BELONGS_TO (
	login CHAR(20) NOT NULL,
	gid BIGINT UNSIGNED NOT NULL,
	PRIMARY KEY(login, gid),
	FOREIGN KEY(login) REFERENCES MEMBERS(login),
	FOREIGN KEY(gid) REFERENCES GROUPS(gid));
	

	
	