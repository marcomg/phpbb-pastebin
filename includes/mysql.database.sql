DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `idf` int(11) NOT NULL AUTO_INCREMENT,
  `idu` int(11) NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `file_type` text COLLATE utf8_unicode_ci NOT NULL,
  `file_new_name` text COLLATE utf8_unicode_ci NOT NULL,
  `file_password` text COLLATE utf8_unicode_ci NOT NULL,
  `file_visibility` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idf`),
  KEY `idu` (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `ids_casual` text COLLATE utf8_unicode_ci NOT NULL,
  `idu` int(11) NOT NULL,
  `ip` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `rule` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `idu` int(11) NOT NULL,
  `idf` int(11) NOT NULL,
  `idfcd` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
