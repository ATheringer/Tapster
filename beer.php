<html>
	<head>
		<title>Tapster</title>
		<style>
		#container {
			width: 1000px;
			margin: 0 auto;
		}
		.floatLeft {
			float: left;
		}
		
		.floatRight {
			float: right;
		}
		.floatCenter {
			float: center;
		}
		body {
			background-color: #d3d3d3;
			font-family: "Ubuntu", sans-serif;
			color: purple;
		}
		
		h1, h2, h3, h4 {
			margin: 0;
		}
		h2 {
			color: #003399;
		}
		h3, h4{
			color: #0208ed;
			font-weight: 200;
		}
		.divider {
			clear: both;
			width: 100%;
			height: 5px;
			background-color: gray;
			margin-bottom: 25px;
			margin-top: 25px;
		</style>
	</head>
	<body>
		<div id="container">
			<div class="floatRight">
				<img src="beerpics/tapsterLogo.png" alt="Tapster Logo"/>
				<?php 
				echo "<br>";
				echo "Hello, ";
				if($_COOKIE['user']!="") {
					echo $_COOKIE['user'].". <a href=\"logout.php\">Logout</a>";
					echo "<a href=\"lib.php\"><p>Your Library</p></a>";
				} else {
					echo "Guest. ";
					echo "<a href=\"login.html\">Login Here!</a>";
					echo "<p align=\"right\"><a href=\"register.html\">Sign Up!</a></p>";
				}
				?>
			</div>
			<div class="floatCenter">
				<h1><a href="tapster.php" style="TEXT-DECORATION: NONE">Tapster</a></h1>
				<h2>Beer Library and Search</h2>
			</div>
			<br></br>
			<div id="php_and_json">
				<?php 
				$var = htmlspecialchars($_GET['v']);
				$terms = str_replace(" ", "%20", $var);
				$url = "http://api.openbeerdatabase.com/v1/beers.json?query=".$terms;
				$json = file_get_contents($url);
				$data = json_decode($json, TRUE);
				$item = $data['beers'][0];
				echo "<p>Name: ".$item['name']."</p>";
				echo "<p>Brewery: ".$item['brewery']['name']."</p>";
				echo "<p>ABV%: ".$item['abv']."</p>";
				if($_COOKIE['user']!="") {
					$hostname = 'localhost';
					$dbuser = 'root';
					$dbpass = '';
					$db = 'tapster';
					
					$dbhandle = MYSQL_CONNECT($hostname, $dbuser, $dbpass)or die("Unable to connect to mysql");
					$selected = mysql_select_db($db, $dbhandle)or die("Unable to connect to database");
					
					$table = $_COOKIE['user']."_lib";
					$query = "select beer from ".$table." where beer=\"".$var."\"";
					$return = mysql_query($query);
					$flag = TRUE;
					while($row = mysql_fetch_array($return)) {
						$extant = $row{'beer'};
						echo $extant;
						if($var == $extant) { 
							echo "<a href=\"remove.php?v=".$extant."\"><p>Remove from Library</p></a>";
							$flag = FALSE;
							break;
						}
					}
					if($flag) {
						echo "<a href=\"add.php?v=".$item['name']."\"><p>Add to Library</p></a>";
					}
					
				}
				echo "<br></br>";
				echo $item['description'];
				?>
			<br></br>
			</div>
			<div class="divider">
				<footer>
				
					&copy; 2015 Tapster
				</footer>
			</div>
		</div>
	</body>
</html>
