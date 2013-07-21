CREATE TABLE IF NOT EXISTS `paste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` text COLLATE utf8_bin NOT NULL,
  `uid` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `posted` text COLLATE utf8_bin NOT NULL,
  `code` longtext COLLATE utf8_bin NOT NULL,
  `lang` text COLLATE utf8_bin NOT NULL,
  `expires` text COLLATE utf8_bin NOT NULL,
  `sha1` text COLLATE utf8_bin NOT NULL,
  `hidden` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;