<?php
// Dir readable from web
const DIR_TEMPLATE_VAR = './template/templates';

// Template dir
$smarty->template_dir = ROOT.'/template/templates/';

// Compiiles dir
$smarty->compile_dir = ROOT.'/template/compiles/';

// Config dir
$smarty->config_dir = ROOT.'/template/configs/';

// Cache dir
$smarty->cache_dir = ROOT.'/template/cache/';

// Debug smarty
//$smarty->debugging = true;

// Cache
//$smarty->caching = true;

// Cache life time
//$smarty->cache_lifetime = 20;

// Compile check. To enable only in production mode
//$smarty->compile_check = true;

// Force recompile. To enable only in develop mode
//$smarty->force_compile=false;
?>
