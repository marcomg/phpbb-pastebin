<?php
/*
CORE FUNCTIONS
*/

/*
Generate a string
*/
function string_gen($long_string_gen){
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


/*
Get size in bytes
*/
function return_bytes($val) {
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
    }
}


/*
Get human size
*/
function return_human_value($val){
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

/*
Get language
*/
function get_language($default_language = 'en_US', $known_languages = array('en_US', 'it_IT')){
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
// Get tid (an unique id of pastes (tid: text id))
function get_tid(){
    global $db;
    global $config_leng;
    global $config_table_paste;
    
    $while = true;
    while($while){
        $tid = string_gen($config_leng);
        $result = $db->query("SELECT * FROM `$config_table_paste` WHERE `tid` = '$tid'");
        $result = $db->fetch_array($result);
        if(empty($result['tid'])){
            $while = false;
        }
    }

    return($tid);
}
?>
