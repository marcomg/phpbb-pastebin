<?php
// Set user menu
if($phpbb->isLogged())
    $smarty->assign('user_menu', true);
else
    $smarty->assign('user_menu', false);

// Set admin menu
if($phpbb->isAdmin())
    $smarty->assign('admin_menu', true);
else
    $smarty->assign('admin_menu', false);


$from = (!empty($q[1]) and is_numeric($q[1])) ? $db->escape_string($q[1]) : 0;

$query = $db->query("SELECT * FROM `paste` WHERE `hidden` =0 ORDER BY `id` DESC LIMIT $from , 10");

while($result = $db->fetch_array($query)){
    $tid[] = $result['tid'];
    $username[] = $result['username'];
    $posted[] = $result['posted'];
    $code[] = str_replace(PHP_EOL, '', substr($result['code'], 0, $config_preview_leng));
    $lang[] = $result['lang'];
    $expires[] = $result['expires'];
}
if(empty($tid)){
    $tid = null;
    $username = null;
    $posted = null;
    $code = null;
    $lang = null;
    $expires = null;
}

$smarty->assign('title', T_('Pastes list'));
$smarty->assign('tid', $tid);
$smarty->assign('username', $username);
$smarty->assign('posted', $posted);
$smarty->assign('code', $code);
$smarty->assign('lang', $lang);
$smarty->assign('expires', $expires);
$smarty->assign('from', $from);

$smarty->display('list.tpl');
?>