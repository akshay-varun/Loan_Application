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
	`email` VARCHAR(100) NOT NULL,
	`age` INT(8) NOT NULL,
	`dob` VARCHAR(16) NOT NULL,
	`income` INT(16) NOT NULL,
	`amount` INT(16) NOT NULL,
	`purpose` VARCHAR(25) NOT NULL,
	`tenure` INT(8) NOT NULL,
	`status` INT(8) NOT NULL DEFAULT '0'
);

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `form` ADD CONSTRAINT `form_fk0` FOREIGN KEY (`email`) REFERENCES `users`(`email`);