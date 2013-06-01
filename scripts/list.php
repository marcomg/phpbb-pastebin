<?php
if($phpbb->is_logged()){
    $smarty->assign('user_menu', true);
}

if(!empty($q[1]) and is_numeric($q[1])){
    $from = $db->escape_string($q[1]);
}
else{
    $from = 0;
}

$query = $db->query("SELECT * FROM `paste` WHERE `hidden` =0 ORDER BY `id` DESC LIMIT $from , 10");

while($result = $db->fetch_array($query)){
    $tid[] = $result['tid'];
    $username[] = $result['username'];
    $posted[] = $result['posted'];
    $code[] = str_replace(PHP_EOL, '', substr($result['code'], 0, 20));
    $lang[] = $result['lang'];
    $expires[] = $result['expires'];
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