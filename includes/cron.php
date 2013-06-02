<?php
// Cron
if($config_enable_cron){
    $_ = file_get_contents(ROOT.'/includes/text_databases/cron.txt');
    if(time() -$_ > $config_cron_time){
        $db->query('DELETE FROM `paste` WHERE `expires` != -1 and `posted` + `expires` < '.time().';');
        file_put_contents(ROOT.'/includes/text_databases/cron.txt', time());
    }
}
?>