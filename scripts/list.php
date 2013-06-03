<?php
if($phpbb->isLogged())
    $smarty->assign('user_menu', true);

$from = (!empty($q[1]) and is_numeric($q[1])) ? $db->escape_string($q[1]) : 0;


$smarty->caching = true;
$smarty->cache_lifetime = 20;

// If there is a cache print it
if(!$smarty->isCached('list.tpl', $from)) {
    $query = $db->query("SELECT * FROM `paste` WHERE `hidden` =0 ORDER BY `id` DESC LIMIT $from , 10");

    while($result = $db->fetch_array($query)){
        $tid[] = $result['tid'];
        $username[] = $result['username'];
        $posted[] = $result['posted'];
        $code[] = str_replace(PHP_EOL, '', substr($result['code'], 0, $config_preview_leng));
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
}
$smarty->display('list.tpl', $from);
?>