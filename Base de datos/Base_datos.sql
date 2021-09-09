create database ajax;

Use ajax;

CREATE TABLE IF NOT EXISTS `prueba_users` (

`ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
`username` varchar(50) NOT NULL DEFAULT '',
`email` varchar(100) NOT NULL DEFAULT '',
`url` varchar(100) NOT NULL DEFAULT '',
PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


INSERT INTO `prueba_users` (`ID`, `username`, `email`, `url`) VALUES
(1, 'Pedro', 'thisismy@email.com', 'http://miblog.name'),
(2, 'Juan', 'elcorreode@juan.com', 'http://www.misitio.com'),
(3, 'Ana', 'escribrea@ana.com', 'http://lawebdeana.com');



create database h_blog;

Use h_blog;

CREATE TABLE IF NOT EXISTS `items` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`description` text COLLATE utf8_unicode_ci NOT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;
 