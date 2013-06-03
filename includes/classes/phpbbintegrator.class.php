<?php

class phpbb_integrator {
    /**
    * Get user info from phpBB database
    * @param string $config_phpbb_path Patch where is installed phpBB
    * @param array or null $config_id_admin_groups An array with user IDs that if an user has is admin
    */
    function __construct($config_phpbb_path, $config_id_admin_groups = null){
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
        $this->adminGroups = $config_id_admin_groups;
        
        // Unset vars
        unset($phpbb_root_path, $phpEx, $user, $db, $config, $cache, $template);
    }
    
    /**
    * Check if user il logged
    * @return boolean True user logged, false user not logged
    */
    function isLogged(){
        if($this->user->data['is_registered']){
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
        return $this->user->data['username'];
    }
    
    /**
    * Get phpBB id of the user
    * @return int User id
    */
    function getUserId(){
        return $this->user->data['user_id'];
    }
    
    /**
    * Get phpBB id of the user
    * @return int User id
    */
    function 
    getGroupId(){
        return $this->user->data['group_id'];
    }
    
    /**
    * Get the email of the user
    * @return string Email of the user
    */
    function getUserEmail(){
        return $this->user->data['user_email'];
    }
    
    /**
    * Get the IP of the user
    * @return string IP of the user
    */
    function getUserIp(){
        return $this->user->ip;
    }
    
    /**
    * Get the language of the user
    * @return string Language of the user
    */
    function getUserLang(){
        return $this->user->data['user_lang'];
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
