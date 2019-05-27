 DROP  TABLE IF EXISTS `tasks`;

 CREATE TABLE `tasks` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `created_at` timestamp,
    `update_at` timestamp,
    PRIMARY KEY (`id`)
    )ENGINE=InnoDB;
