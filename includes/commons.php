<?php
// Set the user language if config allow it
if($config_allow_user_language){
    $config_locale = get_language($config_locale, $supported_locales);
}
?>