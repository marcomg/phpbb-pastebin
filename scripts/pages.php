<?php
if($phpbb->isLogged()){
    $smarty->assign('user_menu', true);
}

if(empty($q[1])){
    $q[1] = '?';
}

switch($q[1]){
    case 'index':
        header('Location: index.php?q=list');
        //$smarty->display('page_index.tpl');
    break;
    
    case 'requiredlogin':
        $smarty->assign('title', T_('Required login'));
        $smarty->display('page_requiredlogin.tpl');
    break;
    
    case 'about':
        $smarty->assign('title', T_('About'));
        $smarty->display('page_about.tpl');
    break;
    
    case '?':
    default:
        header('Location: index.php?q=errors/404');
    break;
}

?>
