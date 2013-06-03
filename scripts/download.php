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
    $m0 = memory_get_usage();
    $code = $_['code'];
    $m1 = memory_get_usage();
    
    unset($_);
    
    $size = $m1-$m0;
    
    header('Cache-Control: public');
    header('Content-Description: File Transfer');
    header('Content-type: text/plain');
    header('Content-Disposition: attachment; filename= "'.$tid.'.txt"');
    header('Content-Length: '.$size);
    header('Content-Transfer-Encoding: binary');
    echo(stripslashes($code));
}

?>