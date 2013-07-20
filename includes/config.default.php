<?php
// Error reporting: 6143 for all errors, 0 for no errors
error_reporting (6143);

/*
Database config
*/
define('db_hostname', 'localhost');// Hostname server mysql
define('db_username', 'root');// Username mysql
define('db_password', '');// Password mysql
define('db_database', 'phpbb_with_pastebin');// Databse to use

// Name of the tables to use
$config_table_paste = 'paste';

/*
Script config
*/
// Length of many casual ids
$config_leng = 5;

// Length of preview of pastes
$config_preview_leng = 20;

// Max lenght of a paste if 0 has no limit (the number is the number of chars)
$config_max_paste_lenght = 0;

// Enable local cron
$config_enable_cron = true;
$config_cron_time = 50;
/*
phpBB config
*/
// Path where is installed phpBB
$config_phpbb_path = '../phpBB3/';

// Group id (of phpBB) where if an user has it as default group is an admin
// set it as null if disable admins
// set an array with numbers of groups to enable it
// example : $config_id_admin_groups = array(5, 4); for administrators, global moderators
$config_id_admin_groups = null;

// If you set this var to true phpBB is always loaded in the class. This could slow all
// but you have to do it if you want to sync the logout in the board and in phpbb-pastebin.
// Else user will be logged as long as his browser is open though he is unlogged in phpBB
$config_alwaysLoadPhpBB = false;
/*
Gettext config
*/
// Directory where are located translations files
define('LOCALE_DIR', ROOT .'/locale');

// Languages supported
$supported_locales = array('en_US', 'it_IT');

// Encoding
$encoding = 'UTF-8';

// Default language
$config_locale = 'en_US';

// Domain
$config_domain = 'messages';

// If the sistem can auto detect user language
$config_allow_user_language = true;

?>
