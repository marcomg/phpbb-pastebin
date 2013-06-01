<?php
class MYSQL {

	// Costruttore
	function __construct() {
		# connessione al DBMS
		$mysql = mysql_connect(db_hostname, db_username, db_password) or die('Mysql error: ' . mysql_error());
		# selezione del database
		mysql_select_db(db_database, $mysql) or die('Database error: ' . mysql_error());
	}


	function query($query) {
		$query = mysql_query($query);
		return $query;
	}

	function escape_string($string){
		$string = mysql_real_escape_string($string);
		return $string;
	}

	function fetch_assoc($result) {
		$extract = mysql_fetch_assoc($result);
		return $extract;
	}

	function fetch_array($result) {
		$extract = mysql_fetch_array($result/*, MYSQL_ASSOC*/);
		return $extract;
	}

	function fetch_row($result) {
		$extract = mysql_fetch_row($result);
		return $extract;
	}

	function num_fields($result){
		$extract = mysql_num_fields($result);
		return $result;
	}

	function close() {
		mysql_close();
	}

}
