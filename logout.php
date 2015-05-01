<html>
	<style>
		body {
			background-color: #d3d3d3;
			font-family: "Ubuntu", sans-serif;
			color: purple;
		}
	</style>
	<?php
	if(isset($_COOKIE['user'])) {
		unset($_COOKIE['user']);
		unset($_COOKIE['hval']);
		setcookie('user', '', time() - 3600); 
		setcookie('hval', '', time() - 3600); 
		echo "Logged out successfully! <a href=\"tapster.php\">Return</a>";
	} else {
		echo "You weren't logged in initially. <a href=\"login.html\">Login.</a>";
	}
	?>
</html>
