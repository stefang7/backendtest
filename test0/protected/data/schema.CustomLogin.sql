CREATE TABLE `Users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(128) NOT NULL,
	`password` varchar(128) NOT NULL,
	`email` varchar(128) NOT NULL,
	`firstname` varchar(128) DEFAULT NULL,
	`lastname` varchar(128) DEFAULT NULL,
	`pagination` tinyint(3) NOT NULL DEFAULT '25',
	`role` int(1) NOT NULL DEFAULT '0',
	`create_date` datetime NOT NULL,
	`last_login_time` datetime NOT NULL,
	`status` int(1) NOT NULL DEFAULT '0',
	`password_expiry_date` datetime DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `username` (`username`),
	UNIQUE KEY `email` (`email`),
	KEY `status` (`status`),
	KEY `superuser` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8


