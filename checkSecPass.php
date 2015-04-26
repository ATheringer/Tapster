<html>
      	<style>
               	body {
                      	background-color: #d3d3d3;
                        font-family: "Ubuntu", sans-serif;
                        color: purple;
                }
        </style>
<?php


$user =  htmlspecialchars($_POST['user']);
$answer = htmlspecialchars($_POST['answer']);
$pass = htmlspecialchars($_POST['pass1']);
$pass2 = htmlspecialchars($_POST['pass2']);

if(!$answer) {
	echo "You must enter an answer to the security question.<br> <a href=\"forgotpass.html\">Return</a>";
}else if(!$pass) {
	echo "You must enter a password. <br> <a href=\"forgotpass.html\">Return</a>";
}else if(!$pass2) {
	echo "You must verify your password. <br> <a href=\"forgotpass.html\">Return</a>";
}else if($pass != $pass2) {
	echo "Oops! Your passwords don't match. <br> <a href=\"forgotpass.html\">Return</a>";
} else {
        $hostname = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'tapster';
        $table = 'tap_users';
        $name = 'name';
        $pw = 'password';
	$pass = hash('md5', $pass);
        $answer = hash('md5', $answer);
	

        $dbhandle = MYSQL_CONNECT($hostname, $dbuser, $dbpass)or die("Unable to connect to mysql");
        $selected = mysql_select_db($db, $dbhandle)or die("Unable to connect to database");


	$query = "select ".security_passphrase." from ".$table." where name=\"".$user."\"";
        $return = mysql_query($query);

        $row = mysql_fetch_array($return);
        $passphrase = $row{'security_passphrase'};

	if($answer == $passphrase) {
		$query = "update ".$table." set password=\"".$pass."\" where name=\"".$user."\"";
        	$return = mysql_query($query);
		echo "Password has been changed";
	}
	else {
		echo "Answer is incorrect";
	}
        echo "<br> <a href=\"tapster.php\">Return</a>";

} 
mysql_close($dbhandle);

?>
</html>
