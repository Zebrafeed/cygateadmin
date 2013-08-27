<?php 
	require "connect.php";
	header("Access-Control-Allow-Origin: *");

	$sql = mysql_query("SELECT * FROM cygate ORDER BY poang DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Serverside</title>
</head>
<body>
	<div id="content">
		<table>
			<tr>
				<td>Lag</td>
				<td>Poäng</td>
				<td></td>
			</tr>
			<?php while($row = mysql_fetch_assoc($sql)){ ?>
				<tr>
					<td><?php echo $row['lag']; ?></td>
					<td><?php echo $row['poang']; ?></td>
					<td><button onclick="removePoint();">-</button></td>
					<td><button onclick="addPoint();">+</button></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>