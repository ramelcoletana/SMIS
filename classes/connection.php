<?php

class DB_Connect{
	protected $con;
	
	/*Formatted computers*/
	private $db_name = "atissmis_group4";
	private $db_user = "student1";
	private $db_password = "password";
	private $db_host = "student1.e2ps";

	/*Unreformat computer*/
	/*private $db_name = "atissmis_group4";
	private $db_user = "root";
	private $db_password = "";
	private $db_host = "localhost";*/
	
	//connection to the database
	function openCon(){
		$con = mysql_connect($this->db_host,$this->db_user,$this->db_password);
		
		if(!$con){
			die('Could not connect to database'.mysql_error());
		}/*else{
			echo 'Successfully connected to database';
		}*/
		
		$db_selected = mysql_select_db($this->db_name,$con);
		if(!$db_selected){
			die ("Could not select database ".mysql_error());
		}
		
		return $con;
	}
	
	//close the connection
	function closeCon(){
		$con = mysql_close();
	}
}
