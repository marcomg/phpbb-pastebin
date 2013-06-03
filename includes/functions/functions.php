<?php
/*
CORE FUNCTIONS
*/

/**
* Get a casual alfanumeric string
* @param int $long_string_gen Chars number of casual string
* @return string Casual string
*/
function getCasualStr($long_string_gen){
	$string_gen=NULL;
	for ($i=1; $i<=$long_string_gen; $i++){
		if ($i % 2){
			$string_gen = $string_gen . chr(rand(97,122));
		}
		else{
			$string_gen = $string_gen . rand(0,9);
		}
	}
	return $string_gen;
}


/**
* Get bytes value form kB(k), MB(M), GB(G)
* @param string $val Size in kB, MB, GB
* @return int Byte size
* @deprecated
*/
function getBytes($val) {
    $val = trim($val);
    $last = $val{strlen($val)-1};
    switch($last) {
        case 'k':
        case 'K':
            return (int) $val * 1024;
            break;
        case 'm':
        case 'M':
            return (int) $val * 1048576;
            break;
        case 'g':
        case 'G':
            return (int) $val * 1073741824;
        break;
        
        default:
            return $val;
        break;
    }
}


/**
* Get Human value form Bytes
* @param int $val Size in byte
* @return string size in KiB or MiB or GiB or TiB or PiB or EiB
* @deprecated
*/
function getHumanValue($val){
    if(!is_numeric($val)){
        return false;
    }
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'KiB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'MiB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'GiB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'TiB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'PiB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'EiB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'ZiB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'YiB');
        }
    }
    
    else{
        return(round($val).'B');
    }

}

/**
* Get language from browser or cookies
* @param string $default_language Default language to user if there aren't results
* @param array $known_languages Languages supported
* @return string Language to use
*/
function getLanguage($default_language = 'en_US', $known_languages = array('en_US', 'it_IT')){
    if(!empty($_COOKIE['language'])){
        if(in_array($_COOKIE['language'], $known_languages)){
            return $_COOKIE['language'];
        }
    }
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
        $accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $accept_language = str_replace('-', '_', $accept_language);
        $supported_languages = explode(',', $accept_language);
        $languages_to_use = (array_intersect($known_languages, $supported_languages));
        if(empty($languages_to_use)){
            return $default_language;
        }
        $languages_to_use = array_values($languages_to_use);
        return($languages_to_use[0]);
        
    }
    else{
        return $default_language;
    }
}

/*
SCRIPT FUNCTIONS
*/
/**
* Get a casual unique id for pastes
* @return string Unique id
*/
function getNewTid(){
    global $db;
    global $config_leng;
    global $config_table_paste;
    
    $while = true;
    while($while){
        $tid = getCasualStr($config_leng);
        $result = $db->query("SELECT * FROM `$config_table_paste` WHERE `tid` = '$tid'");
        $result = $db->fetch_array($result);
        if(empty($result['tid'])){
            $while = false;
        }
    }

    return($tid);
}
?>
