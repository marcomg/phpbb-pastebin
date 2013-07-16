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
else
    $smarty->assign('admin_menu', false);

// If form not ok echo it
if(!isset($_POST['lang']) or !isset($_POST['expire']) or empty($_POST['code'])){
    $smarty->assign('title', T_('Create a paste'));
    $smarty->display('create_form.tpl');
}
// Check paste size
elseif(strlen($_POST['code']) > $config_max_paste_lenght and $config_max_paste_lenght !== 0){
    $smarty->assign('error', sprintf(T_('Paste too big! Max chars: %d'), $config_max_paste_lenght));
    $smarty->assign('title', T_('Create a paste'));
    $smarty->display('create_form.tpl');
}
else{
    $username = $phpbb->getUsername();
    
    $posted = time();
    
    $code = $db->escape_string($_POST['code']);
    
    $lang = $db->escape_string($_POST['lang']);
    
    $tid = getNewTid();
    
    $expires = is_numeric($_POST['expire']) ? $_POST['expire'] : -1;
    
    $sha1 = sha1($code);
    
    $hidden = isset($_POST['hidden']) and $_POST['hidden'] == 1 ? 1 : 0;
    
    
    // if wrap text required
    if(isset($_POST['wrap']) and $_POST['wrap']==1)
        $code = wordwrap($code, 78, PHP_EOL, true);
    
    $db->query("INSERT INTO `$config_table_paste` (`id`, `tid`, `username`, `posted`, `code`, `lang`, `expires`, `sha1`, `hidden`) VALUES (NULL, '$tid', '$username', '$posted', '$code', '$lang', '$expires', '$sha1', '$hidden');");
    
    header("location: index.php?q=view/$tid");
    
}


?>