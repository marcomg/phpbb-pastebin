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

if(empty($q[1]))
    $q[1] = '?';

switch($q[1]){
    case 'index':
        header('Location: index.php?q=list');
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
