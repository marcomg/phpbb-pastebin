<?php
// Set user menu
if($phpbb->isLogged())
    $smarty->assign('user_menu', true);
    
// Set admin menu
if($phpbb->isAdmin())
    $smarty->assign('admin_menu', true);

if(!empty($q[1]))
    $tid = $db->escape_string($q[1]);
else{
    header('location: index.php?q=errors/404');
    exit;
}

$smarty->caching = true;
$smarty->cache_lifetime = -1;

$_ = $db->query("SELECT * FROM `$config_table_paste` WHERE `tid` = '$tid'");
$_ = $db->fetch_array($_);

// Not found
if(empty($_))
    header('location: index.php?q=errors/404');
else{
    // Set line numbers
    if(!empty($q[2]) and $q[2]=='nl'){
        $flag = GESHI_NO_LINE_NUMBERS;
        $smarty->assign('geshi_lines', false);
    }
    elseif($q[2]=='fl'){
        $flag = GESHI_FANCY_LINE_NUMBERS;
        $smarty->assign('geshi_lines', true);
    }
    else{
        $flag = GESHI_NORMAL_LINE_NUMBERS;
        $smarty->assign('geshi_lines', true);
    }
    
    if(!$smarty->isCached('view.tpl', $tid.$flag)) {
        $code = stripslashes($_['code']);
        $geshi = new GeSHi($code, $_['lang']);
        $geshi->enable_line_numbers($flag);
        $code = $geshi->parse_code();
        
        $smarty->assign('title', T_('View paste with tid: ').$tid);
        
        $smarty->assign('tid', $tid);
        $smarty->assign('username', $_['username']);
        $smarty->assign('posted', $_['posted']);
        $smarty->assign('code', $code);
        $smarty->assign('lang', $_['lang']);
        $smarty->assign('expires', $_['expires']);
        $smarty->assign('sha1', $_['sha1']);
        $smarty->assign('hidden', $_['hidden']);
    }
    $smarty->display('view.tpl', $tid.$flag);
}

?>