CREATE TABLE Users (
	id int CHECK(id>0),
	pic varchar(100),
	url varchar(100),
	name varchar(200),
	type varchar(10),
	PRIMARY KEY(id)
) ENGINE=InnoDB;
