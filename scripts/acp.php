<?php

// If not logged print login page
if(!$phpbb->isLogged() or !$phpbb->isAdmin()){
    header('location: index.php?q=errors/404');
    exit;
}
else
    // Set user menu
    $smarty->assign('user_menu', true);

// Set admin menu
if($phpbb->isAdmin())
    $smarty->assign('admin_menu', true);


if(!isset($q[1]))
    $q[1] = 'overview';

switch($q[1]){
    case 'delete':
        if(empty($q[2]) and empty($_POST['acp']))
            header('location: index.php?q=ucp');
        else{
            $tid = empty($_POST['acp']) ? $db->escape_string($q[2]) : $db->escape_string($_POST['acp']);
            $db->query("DELETE FROM `$config_table_paste` WHERE `tid` = '$tid'");
            header('location: index.php?q=acp');
        }
    break;
    
    case 'deleteAllByUser':
        if(!empty($_POST['acp'])){
            $username = $db->escape_string($_POST['acp']);
            $db->query("DELETE FROM `$config_table_paste` WHERE `username` = '$username'");
        }
        header('location: index.php?q=acp');
    break;
    
    default:
        $from = (!empty($q[2]) and is_numeric($q[2])) ? $db->escape_string($q[2]) : 0;
        $query = $db->query("SELECT * FROM `paste` ORDER BY `id` DESC LIMIT $from , 10");
            
        
        while($result = $db->fetch_array($query)){
            $tid[] = $result['tid'];
            $username[] = $result['username'];
            $posted[] = $result['posted'];
            $code[] = str_replace(PHP_EOL, '', substr($result['code'], 0, $config_preview_leng));
            $lang[] = $result['lang'];
            $expires[] = $result['expires'];
            $hidden[] = $result['hidden'];
        }

        $smarty->assign('title', T_('Acp panel overview'));
        $smarty->assign('tid', $tid);
        $smarty->assign('username', $username);
        $smarty->assign('posted', $posted);
        $smarty->assign('code', $code);
        $smarty->assign('lang', $lang);
        $smarty->assign('expires', $expires);
        $smarty->assign('from', $from);
        $smarty->assign('hidden', $hidden);
        
        $smarty->display('acp.tpl');
    break;
}

?>