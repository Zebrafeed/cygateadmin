<?php
	$host	= 'localhost';
	$user	= 'root';
	$pass	= '';
	$db		= 'cygate';

	$con = mysql_connect($host, $user, $pass);

	if (!$con) {
		die("Cannot connect to database");
		echo "Failed connection";
	}else{
		mysql_select_db($db) or die('Cannot select database');
	}

?>