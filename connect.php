<?php
	$host	= 'mysql.neq3.com';
	$user	= 'u885764264_root';
	$pass	= '29erSail!';
	$db		= 'u885764264_c';

	$con = mysql_connect($host, $user, $pass);

	if (!$con) {
		die("Cannot connect to database");
		echo "Failed connection";
	}else{
		mysql_select_db($db) or die('Cannot select database');
		echo "Connected";
	}

?>