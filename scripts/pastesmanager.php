<?php

// If not logged print login page
if(!$phpbb->isLogged()){
    header('location: index.php?q=pages/requiredlogin');
    exit;
}
else
    $smarty->assign('user_menu', true);

if(empty($q[1]))
    $q[1] = 'overview';

switch($q[1]){
    case 'delete':
        if(empty($q[2]))
            header('location: index.php?q=pastesmanager');
        else{
            $tid = $db->escape_string($q[2]);
            $db->query("DELETE FROM `$config_table_paste` WHERE `username` = '{$phpbb->getUsername()}' AND `tid` = '$tid'");
            header('location: index.php?q=pastesmanager');
        }
    break;
    
    default:
        $from = (!empty($q[2]) and is_numeric($q[2])) ? $db->escape_string($q[2]) : 0;
        
        $query = $db->query("SELECT * FROM `paste` WHERE `username` = '{$phpbb->getUsername()}' ORDER BY `id` DESC LIMIT $from , 10");

        while($result = $db->fetch_array($query)){
            $tid[] = $result['tid'];
            $posted[] = $result['posted'];
            $code[] = str_replace(PHP_EOL, '', substr($result['code'], 0, 20));
            $lang[] = $result['lang'];
            $expires[] = $result['expires'];
        }

        $smarty->assign('title', T_('Personal pastes list'));
        $smarty->assign('tid', $tid);
        $smarty->assign('posted', $posted);
        $smarty->assign('code', $code);
        $smarty->assign('lang', $lang);
        $smarty->assign('expires', $expires);
        $smarty->assign('from', $from);
        
        $smarty->display('pastesmanager.tpl');
    break;
}

?>