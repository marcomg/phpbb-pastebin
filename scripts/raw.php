<?php
if(!empty($q[1]))
    $tid = $db->escape_string($q[1]);
else{
    header('location: index.php?q=errors/404');
    exit;
}

$_ = $db->query("SELECT * FROM `$config_table_paste` WHERE `tid` = '$tid'");
$_ = $db->fetch_array($_);

// Not found
if(empty($_))
    header('location: index.php?q=errors/404');
else{
    $code = $_['code'];
    
    unset($_);
    
    header('Content-type: text/plain');
    
    echo(stripslashes($code));
}

?>