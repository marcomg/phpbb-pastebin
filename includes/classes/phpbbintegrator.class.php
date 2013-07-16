<?php

class phpbb_integrator {
    
    var $config_phpbb_path;
    var $config_id_admin_groups;
    var $adminGroups;
    var $alwaysLoadPhpBB;
    
    /**
    * Set some vars and load init function.
    * @param string $config_phpbb_path Patch where is installed phpBB
    * @param array or null $config_id_admin_groups An array with user IDs that if an user has is admin
    */
    function __construct($config_phpbb_path, $config_id_admin_groups = null, $alwaysLoadPhpBB = false){
        // Set vars
        $this->config_phpbb_path = $config_phpbb_path;
        $this->config_id_admin_groups = $config_id_admin_groups;
        $this->adminGroups = $this->config_id_admin_groups;
        $this->alwaysLoadPhpBB = $alwaysLoadPhpBB;
        
        // Load class
        $this->init();
    }
    
    /**
    * Provided to load all the class
    */
    private function init(){
        $this->loadCheck();
        session_start();
        $this->loaderSelector();
    }
    
    /**
    * Control if some vars wich will be declared as global will be replaced
    */
    private function loadCheck(){
        global $phpbb_root_path, $phpEx, $user, $db, $config, $cache, $template;
        // If isset some of global vars I have to exit for not replace them
        if(isset($phpbb_root_path) or isset($phpEx) or isset($user) or isset($db) or isset($config) or isset($cache) or isset($template)){
            throw new Exception('I should replace some vars, but I am a class so I should not do it!');
        }
    }
    
    /**
    * Control if some vars are in $_SESSION supergolab var or provide to load it from pbpBB
    */
    private function loaderSelector(){
        if(empty($_SESSION['piap']['phpbbintegrator']) or $this->alwaysLoadPhpBB){
            $this->phpBBLoader();
        }
    }
    
    /**
    * Load phpBB, then load a function wich provide to set some vars in $_SESSION
    */
    private function phpBBLoader(){
        global $phpbb_root_path, $phpEx, $user, $db, $config, $cache, $template;
        // Load phpbb files
        define('IN_PHPBB', true);
        $phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : $this->config_phpbb_path;
        $phpEx = substr(strrchr(__FILE__, '.'), 1);
        include($phpbb_root_path . 'common.' . $phpEx);
        
        // Start session management
        $user->session_begin();
        $auth->acl($user->data);
        $user->setup('common');
                
        // Copy vars
        //$this->user = $user;
        
        // Build session
        $this->sessionBuilder($user);
        
        // Unset vars
        unset($phpbb_root_path, $phpEx, $user, $db, $config, $cache, $template);
    }
    
    /**
    * Provide to set some vars from phpBB user class in $_SESSION
    */
    private function sessionBuilder($user){
        $_SESSION['piap']['is_registered'] = $user->data['is_registered'];
        $_SESSION['piap']['username'] = $user->data['username'];
        $_SESSION['piap']['user_id'] = $user->data['user_id'];
        $_SESSION['piap']['group_id'] = $user->data['group_id'];
        $_SESSION['piap']['user_email'] = $user->data['user_email'];
        $_SESSION['piap']['user_lang'] = $user->data['user_lang'];
        $_SESSION['piap']['ip'] = $user->ip;
        $_SESSION['piap']['user_lang'] = $user->data['user_lang'];
        
        // Set a control var
        if($user->data['is_registered']){
            $_SESSION['piap']['phpbbintegrator'] = 'It is running!';
        }
    }
    
    
    /**
    * Check if user il logged
    * @return boolean True user logged, false user not logged
    */
    function isLogged(){
        if($_SESSION['piap']['is_registered']){
            return true;
        }
        else{
            return false;
        }
    }
    
    /**
    * Get username
    * @return string Username
    */
    function getUsername(){
        return $_SESSION['piap']['username'];
    }
    
    /**
    * Get phpBB id of the user
    * @return int User id
    */
    function getUserId(){
        return $_SESSION['piap']['user_id'];
    }
    
    /**
    * Get phpBB id of the user
    * @return int User id
    */
    function 
    getGroupId(){
        return $_SESSION['piap']['group_id'];
    }
    
    /**
    * Get the email of the user
    * @return string Email of the user
    */
    function getUserEmail(){
        return $_SESSION['piap']['user_email'];
    }
    
    /**
    * Get the IP of the user
    * @return string IP of the user
    */
    function getUserIp(){
        return $_SESSION['piap']['ip'];
    }
    
    /**
    * Get the language of the user
    * @return string Language of the user
    */
    function getUserLang(){
        return $_SESSION['piap']['user_lang'];
    }
    
    /**
    * Check if user il an admin
    * @return boolean True user logged as admin, false user not logged as admin or not logged
    */
    function isAdmin(){
        if(!is_array($this->adminGroups))
            return false;
        else{
            if(in_array($this->getGroupId(), $this->adminGroups))
                return true;
            else
                return false;
        }
    }
    
    /**
    * Test function
    * @deprecated
    */
    function printr(){
        print_r($this->user);
    }
}
