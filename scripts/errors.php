<?php
if($phpbb->isLogged())
    $smarty->assign('user_menu', true);

if(empty($q[1]))
    $q[1] = '?';

switch($q[1]){
    case '404':
        header("Status: 404 Not Found");
        $smarty->assign('title', T_('Error 404'));
        $smarty->display('errors_404.tpl');
    break;
    
    default:
        header('Location: index.php');
    break;
}
?>
