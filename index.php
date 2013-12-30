<?php
/**
 * The PHP page that serves all page requests on a phpbb-pastebin installation.
 */

define('ROOT', getcwd());

// Require needed files
require(ROOT.'/includes/config.php'); // script local config
require(ROOT.'/includes/classes/mysql.class.php'); // the database class
require(ROOT.'/includes/functions/functions.php'); // all functions
require(ROOT.'/includes/classes/smarty/Smarty.class.php'); // smarty template engine
require(ROOT.'/includes/classes/gettext/gettext.inc'); // gettext emulator
require(ROOT.'/includes/classes/phpbbintegrator.class.php'); // a class for login with phpbb
require(ROOT.'/includes/classes/geshi/geshi.php'); // a class for code parsing
require(ROOT.'/includes/commons.php'); // commons file (for many actions)

// Instancing the classes
$phpbb = new phpbb_integrator($config_phpbb_path, $config_id_admin_groups, $config_alwaysLoadPhpBB);
$db = new MYSQL();
$smarty = new Smarty();

// Load cron
require(ROOT.'/includes/cron.php');

// Smarty config
require(ROOT.'/includes/config_smarty.php');

// Load gettext
T_setlocale(LC_MESSAGES, $config_locale);
T_bindtextdomain($config_domain, LOCALE_DIR);
T_textdomain($config_domain);

/*
 * Load needed script (if don't exist load error script)
 */
if(!isset($_GET['q']) or empty($_GET['q']))
    header('location: index.php?q=pages/index');
else
    $q = explode('/', $_GET['q']);

if(file_exists(ROOT.'/scripts/'.$q[0].'.php'))
    include(ROOT.'/scripts/'.$q[0].'.php');
else{
    $q[1] = 404;
    include(ROOT.'/scripts/errors.php');
}

?>
