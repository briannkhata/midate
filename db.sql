
USE `mchinves_mch`;

/*Table structure for table `applications` */

DROP TABLE IF EXISTS `applications`;

CREATE TABLE `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date_applied` datetime DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `product` text CHARACTER SET utf8mb4,
  `name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4,
  `occupation` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `district` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `applications` */

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `business` varchar(250) DEFAULT NULL,
  `desc` text,
  `photo` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `clients` */

insert  into `clients`(`id`,`name`,`business`,`desc`,`photo`) values 
(1,'Jozy','Testing business','Testing description','WIN_20220723_16_53_01_Pro.jpg'),
(2,'Jozy','Testing business','photobbbbbbbbbbbbbb','WIN_20220723_16_52_59_Pro (2).jpg');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `relationship` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `branch` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `phone` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `complaints` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `details` text,
  `company` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `jobs` */

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text CHARACTER SET utf8mb4,
  `email` text CHARACTER SET utf8mb4,
  `name` text CHARACTER SET utf8mb4,
  `message` text CHARACTER SET utf8mb4,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `messages` */

/*Table structure for table `notes` */

DROP TABLE IF EXISTS `notes`;

CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` text,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `notes` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `desc` varchar(300) DEFAULT NULL,
  `image` text,
  `qualification` text,
  `count` int(11) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`id`,`product`,`desc`,`image`,`qualification`,`count`,`class`) values 
(1,'PAYROLL LOAN','<p>This is an employer guarantee loan facility which designed and suitable for salaried employees. An employer\'s letter of undertaking is required for you to access and use this facility. You can get be</p>',NULL,'<p>Qualifications</p>',3,NULL),
(2,'Sick Leave','Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis\r\n                            civelit sed quia non numquam eius modi.',NULL,NULL,6,NULL),
(3,'Mutual Funds','Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis\r\n                            civelit sed quia non numquam eius modi.',NULL,NULL,13,NULL),
(4,'Retirements','Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis\r\n                            civelit sed quia non numquam eius modi.',NULL,NULL,12,NULL);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `services` */

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `address` text CHARACTER SET latin1,
  `phone1` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `phone2` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `phone3` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `email1` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email2` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email3` varchar(100) DEFAULT NULL,
  `motto` text,
  `mission` text,
  `history` text,
  `about` text,
  `vision` text,
  `privacy` text,
  `terms` text,
  `cookie_policy` text,
  `tcs` text,
  `twitter` text,
  `instagram` text,
  `facebook` text,
  `whatsapp` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `settings` */

insert  into `settings`(`id`,`company`,`address`,`phone1`,`phone2`,`phone3`,`email1`,`email2`,`email3`,`motto`,`mission`,`history`,`about`,`vision`,`privacy`,`terms`,`cookie_policy`,`tcs`,`twitter`,`instagram`,`facebook`,`whatsapp`) values 
(2,'Savanna','Box 10,\r\nbT','0882247444','+265888015904','sKeMc.jpg','briannkhata@gmail.com','DM',NULL,'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis\r\n                                civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis\r\n                                civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum\r\n                                quia dolor sit amet, consectetur','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi- tecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae abarchitecto.','With headquarters in Washington, DC, FINCA Impact Finance reaches out to 2.6 million clients through its 20 subsidiaries in Africa, Eurasia, the Middle East and South Asia and Latin America and the Caribbean. Our outreach is among the broadest and most comprehensive of any microfinance network operating today.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'265888015904');

/*Table structure for table `slides` */

DROP TABLE IF EXISTS `slides`;

CREATE TABLE `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `title3` varchar(250) DEFAULT NULL,
  `title2` varchar(250) DEFAULT NULL,
  `title1` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `desc` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `details` text,
  `caption` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `slides` */

insert  into `slides`(`id`,`image`,`title3`,`title2`,`title1`,`desc`,`details`,`caption`) values 
(2,'1.jpg','Title1','Ttitl2','SLIDE ONE','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br />sed do eiusmod tempor incididunt ut labore et dolore.</p>','<p>blo blo</p>','Visit LOcation'),
(5,'2.jpg',NULL,NULL,'SLIDE TWO','Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt\r\n                        ut labore et dolore.',NULL,'Get Us'),
(6,'4.jpg',NULL,NULL,'SLIDE THREE','Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt\r\n                        ut labore et dolore.',NULL,'Check with Us'),
(7,'7.jpg',NULL,NULL,'SLIDE FOUR','Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt\r\n                        ut labore et dolore.',NULL,'View Details'),
(8,'8.jpg',NULL,NULL,'SLIDE FOUR','Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt\r\n                        ut labore et dolore.',NULL,'Go there'),
(9,'3.jpg',NULL,NULL,'SLIDE TWO','Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt\r\n                        ut labore et dolore.',NULL,'Check out'),
(10,'6.jpg',NULL,NULL,'SLIDE THREE','Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt\r\n                        ut labore et dolore.',NULL,'Visit Link'),
(11,'5.jpg',NULL,NULL,'SLIDE THREE','Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt\r\n                        ut labore et dolore.',NULL,'Say Hi');

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `testimonial` varchar(250) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `testimonials` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `role` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `desc` text,
  `photo` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`user_id`,`name`,`username`,`password`,`deleted`,`role`,`position`,`desc`,`photo`) values 
(1,'admin','admin','admin',0,'admin','admin',NULL,NULL);

/*Table structure for table `values` */

DROP TABLE IF EXISTS `values`;

CREATE TABLE `values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `values` */

/*Table structure for table `why` */

DROP TABLE IF EXISTS `why`;

CREATE TABLE `why` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `why` text,
  `desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `why` */

insert  into `why`(`id`,`why`,`desc`) values 
(1,'Quick & Efficient ',' Applications and approvals within 75 Hours'),
(2,' Trustworthy  ','We have no hidden fees or registration fees'),
(3,' Cashless & Paperless  ','All funds are sent and received through mobile platform');
