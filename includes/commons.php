<?php
/**
 * Do many things not categorized.
 */
// Set the user language if config allow it
if($config_allow_user_language)
    $config_locale = getLanguage($config_locale, $supported_locales);
?>