/* Database and Table */

create database tasks_db;

use tasks_db;

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL auto_increment,
  `task` varchar(500),
  `urgency` varchar(100),
  PRIMARY KEY  (`id`)
);