<?php
###################################SQL CONNECTION#############################################
	session_start();
	error_reporting(E_ALL); // when you finish testing you should change this to E_NONE
	define("DBUSERNAME", "root",  true);
	define("DBPASSWORD", "" ,     true);
	define("DBHOST", "localhost", true);
	define("DBDATABASE", "young_chefs",  true); 
	
##############################################################################################
	define("DOMAIN", 'http://'.$_SERVER['HTTP_HOST']."/YoungChefs/", true);	
?>