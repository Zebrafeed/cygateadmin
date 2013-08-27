<?php 
	require 'connect.php';
	header("Access-Control-Allow-Origin: *");

	$team = $_POST['teams'];
	$numTeams = sizeof($team);

	for ($i=0; $i < $numTeams; $i++) { 
		$sql = mysql_query("INSERT INTO `cygate`(`lag`, `poang`) VALUES ('$team[$i]','0')") or die(mysql_error());
	}
	echo "Lag tillagda";
?>