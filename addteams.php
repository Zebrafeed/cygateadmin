<?php 
	require 'connect.php';
	header("Access-Control-Allow-Origin: *");

	$numteams = $_POST['numTeams'];
	$team = $_POST['team1'];

	$sql = mysql_query("INSERT INTO `cygate`(`lag`, `poang`) VALUES ('wat','0')");
	
	if ($sql) {
		echo "Success";
	}else{
		echo "Fail";
	}

	/*
	for ($i=0; $i < numteams; $i++) { 
		$team = $_POST['team' . (i+1)];
		echo team . "<br>";
		$sql = mysql_query("INSERT INTO cygate VALUES ('$team')");
		if($sql){
			echo "Posted";
		}*/
	}
?>