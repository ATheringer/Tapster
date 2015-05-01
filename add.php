<html>
	<style>
		body {
			background-color: #d3d3d3;
			font-family: "Ubuntu", sans-serif;
			color: purple;
		}
	</style>
	<?php
	$beer = htmlspecialchars($_GET['v']);
	$hostname = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'tapster';
	$name = 'name';
	$pw = 'password';
	
	$dbhandle = MYSQL_CONNECT($hostname, $dbuser, $dbpass)or die("Unable to connect to mysql");
	$selected = mysql_select_db($db, $dbhandle)or die("Unable to connect to database");

	if($_COOKIE['user']!="") {
		$table = $_COOKIE['user']."_lib";
		$query = "select beer from ".$table." where beer=\"".$beer."\"";
		$return = mysql_query($query);
		$flag = TRUE;
		while($row = mysql_fetch_array($return)) {
			$extant = $row{'beer'};
			if($beer == $extant) { 
				echo "Beer already exists! <br> <a href=\"lib.php\">Return to Library</a>";
				$flag = FALSE;
				break;
			}
		}
		if($flag) {
			$query = "insert into ".$table."(beer) values(\"".$beer."\")";
			$return = mysql_query($query);
	
			if($return) {
				echo $beer." Added Succesfully! <br> <a href=\"lib.php\"> Your Library </a>";
			} else {
				echo "Something went wrong. <a href=\"tapster.php\"> Return Home </a>";
			}
		}
	} else {
		echo "It looks like you're not logged in. <a href=\"login.html\">Login.</a>";
	}
	mysql_close($dbhandle);	
	?>
</html>
