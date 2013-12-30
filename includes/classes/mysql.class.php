<?php
/**
 * Abstraction layer for mysql
 */
class MYSQL {
    /**
     * Connect to mysql database
     */
    function __construct() {
        # connessione al DBMS
        $mysql = mysql_connect(db_hostname, db_username, db_password) or die('Mysql error: ' . mysql_error());
        # selezione del database
        mysql_select_db(db_database, $mysql) or die('Database error: ' . mysql_error());
    }
    
    /**
     * Send a query to the database
     * @param string $query
     * @return resource
     */
    function query($query) {
        $query = mysql_query($query);
        return $query;
    }
    
    /**
     * Escape strings for the query
     * @param string $string
     * @return string
     */
    function escape_string($string){
        $string = mysql_real_escape_string($string);
        return $string;
    }
    
    /**
     * Make a fetch assoc
     * @param resource $result
     * @return multitype
     */
    function fetch_assoc($result) {
        $extract = mysql_fetch_assoc($result);
        return $extract;
    }
    
    /**
     * Make a fetch array
     * @param resource $result
     * @return multitype
     */
    function fetch_array($result) {
        $extract = mysql_fetch_array($result/*, MYSQL_ASSOC*/);
        return $extract;
    }
    
    /**
     * Make a getch row
     * @param resource $result
     */
    function fetch_row($result) {
        $extract = mysql_fetch_row($result);
        return $extract;
    }
    
    /**
     * Make a num fields
     * @param resource $result
     * @return multitype
     */
    function num_fields($result){
        $extract = mysql_num_fields($result);
        return $result;
    }
    
    /**
     * Close the connection
     */
    function close() {
        mysql_close();
    }
    
}
