CREATE TABLE PersonType
(
	id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	title VARCHAR(32) NOT NULL,
	details VARCHAR(255) NOT NULL,
	icon VARCHAR(64) DEFAULT 'person' NOT NULL,

	PRIMARY KEY(id)
);

CREATE TABLE Person
(
	id INT UNSIGNED AUTO_INCREMENT NOT NULL,
	username VARCHAR(32) NOT NULL,
	pass VARCHAR(255) NOT NULL,
	creation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
	gender CHAR NOT NULL,
	birth DATE NOT NULL,
	email VARCHAR(255) NOT NULL,
	first_name VARCHAR(32) NOT NULL,
	last_name VARCHAR(32) NOT NULL,
	biography VARCHAR(765) DEFAULT NULL,
    
	PRIMARY KEY(id)
);

CREATE TABLE Person_PersonType
(
	id_person INT UNSIGNED NOT NULL,
	id_persontype INT UNSIGNED NOT NULL,

	FOREIGN KEY(id_person) REFERENCES Person(id),
	FOREIGN KEY(id_persontype) REFERENCES PersonType(id),
    
	PRIMARY KEY(id_person, id_persontype)
);
