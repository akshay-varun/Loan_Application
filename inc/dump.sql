CREATE TABLE `users` (
	`id` INT(8) NOT NULL AUTO_INCREMENT UNIQUE,
	`username` VARCHAR(100) NOT NULL UNIQUE,
	`email` VARCHAR(100) NOT NULL UNIQUE,
	`password` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`username`,`email`)
);

CREATE TABLE `form` (
	`first_name` VARCHAR(100) NOT NULL,
	`last_name` VARCHAR(100) NOT NULL,
	`email` VARCHAR(100) NOT NULL UNIQUE,
	`age` INT(8) NOT NULL,
	`dob` VARCHAR(16) NOT NULL,
	`income` INT(16) NOT NULL,
	`amount` INT(16) NOT NULL,
	`purpose` VARCHAR(25) NOT NULL,
	`tenure` INT(8) NOT NULL
);

ALTER TABLE `form` ADD CONSTRAINT `form_fk0` FOREIGN KEY (`email`) REFERENCES `users`(`email`);

CREATE TABLE `admin` (
	`id` INT(8) NOT NULL AUTO_INCREMENT UNIQUE,
	`username` VARCHAR(100) NOT NULL UNIQUE,
	`email` VARCHAR(100) NOT NULL UNIQUE,
	`password` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`username`,`email`)
);