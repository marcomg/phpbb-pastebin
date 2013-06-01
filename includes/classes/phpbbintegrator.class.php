<?php
class phpbb_integrator {
    // Load php
    function __construct($config_phpbb_path){
        global $phpbb_root_path, $phpEx, $user, $db, $config, $cache, $template;
        
        // If isset some of global vars I have to exit for not replace them
        if(isset($phpbb_root_path) or isset($phpEx) or isset($user) or isset($db) or isset($config) or isset($cache) or isset($template)){
            throw new Exception('I should replace some vars, but I am a class so I should not do it!');
        }
        
        
        // Load phpbb files
        define('IN_PHPBB', true);
        $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : $config_phpbb_path;
        $phpEx = substr(strrchr(__FILE__, '.'), 1);
        include($phpbb_root_path . 'common.' . $phpEx);
        
        // Start session management
        $user->session_begin();
        $auth->acl($user->data);
        $user->setup('common');
                
        // Copy vars
        $this->user = $user;
        
        // Unset vars
        unset($phpbb_root_path, $phpEx, $user, $db, $config, $cache, $template);
    }
    
    // Control if is logged
    function is_logged(){
        if($this->user->data['is_registered']){
            return true;
        }
        else{
            return false;
        }
    }
    
    // Get user name
    function get_username(){
        return $this->user->data['username'];
    }
    
    // Get user id
    function get_user_id(){
        return $this->user->data['user_id'];
    }
    
    // Get user email
    function get_user_email(){
        return $this->user->data['user_email'];
    }
    
    // Get user ip
    function get_user_ip(){
        return $this->user->ip;
    }
    
    // Get user language
    function get_user_lang(){
        return $this->user->data['user_lang'];
    }
    
    
    
    function printr(){
        print_r($this->user);
    }
}
