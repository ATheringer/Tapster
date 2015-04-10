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
				$hostname = 'localhost';
				$dbuser = 'root';
				$dbpass = '';
				$db = 'tapster';
				if($_COOKIE['user']=="") {
					echo "It looks like you're not logged in. <a href=\"login.php\">Login.</a>";
				} else {
					$table = $_COOKIE['user']."_lib";
					$dbhandle = MYSQL_CONNECT($hostname, $dbuser, $dbpass)or die("Unable to connect to mysql");
					$selected = mysql_select_db($db, $dbhandle)or die("Unable to connect to database");
	
					$query = "select * from ".$table;
					$return = mysql_query($query);

					echo "<p>Your library: </p>";	
					
					while($row = mysql_fetch_array($return)) {
						echo '<a href="beer.php?v=' . $row{'beer'} . '" name="v">' . $row{'beer'} . '</a>';
						echo '<br></br>';
					}
				}
				mysql_close($dbhandle);	
				?>
         		        <div class="floatCenter">
                                   <form action="randombeer.php" method="get">
                                   <input type="submit" value="Suggest Beer">
                                   <br></br>
                                </form>
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
