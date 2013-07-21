<?php

// If not logged print login page
if(!$phpbb->isLogged()){
    header('location: index.php?q=pages/requiredlogin');
    exit;
}
else
    // Set user menu
    $smarty->assign('user_menu', true);

// Set admin menu
if($phpbb->isAdmin())
    $smarty->assign('admin_menu', true);

if(empty($q[1]))
    $q[1] = 'overview';

switch($q[1]){
    case 'delete':
        if(empty($q[2]))
            header('location: index.php?q=ucp');
        else{
            $tid = $db->escape_string($q[2]);
            $db->query("DELETE FROM `$config_table_paste` WHERE `uid` = '{$phpbb->getUserId()}' AND `tid` = '$tid'");
            header('location: index.php?q=ucp');
        }
    break;
    
    default:
        $from = (!empty($q[2]) and is_numeric($q[2])) ? $db->escape_string($q[2]) : 0;
        
        $query = $db->query("SELECT * FROM `paste` WHERE `uid` = '{$phpbb->getUserId()}' ORDER BY `id` DESC LIMIT $from , 10");

        while($result = $db->fetch_array($query)){
            $tid[] = $result['tid'];
            $posted[] = $result['posted'];
            $code[] = str_replace(PHP_EOL, '', substr($result['code'], 0, 20));
            $lang[] = $result['lang'];
            $expires[] = $result['expires'];
        }
        
        if(empty($tid)){
            $tid = null;
            $posted = null;
            $code = null;
            $lang = null;
            $expires = null;
        }
        $smarty->assign('title', T_('Personal pastes list'));
        $smarty->assign('tid', $tid);
        $smarty->assign('posted', $posted);
        $smarty->assign('code', $code);
        $smarty->assign('lang', $lang);
        $smarty->assign('expires', $expires);
        $smarty->assign('from', $from);
        
        $smarty->display('ucp.tpl');
    break;
}

?>