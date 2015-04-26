<html>
      	<style>
               	body {
                      	background-color: #d3d3d3;
                        font-family: "Ubuntu", sans-serif;
                        color: purple;
                }
        </style>
<?php
$user = htmlspecialchars($_POST['user']);

if(!$user) {
	echo "You must enter a username.<br> <a href=\"forgotpass.html\">Return</a>";
} else {
        $hostname = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'tapster';
        $table = 'tap_users';
        $name = 'name';
        $pw = 'password';

        $dbhandle = MYSQL_CONNECT($hostname, $dbuser, $dbpass)or die("Unable to connect to mysql");
        $selected = mysql_select_db($db, $dbhandle)or die("Unable to connect to database");

        $query = "select ".$name." from ".$table." where name=\"".$user."\"";
        $return = mysql_query($query);

        $row = mysql_fetch_array($return);
        $vuser = $row{'name'};
	
        if(!($user == $vuser)) {
                echo "User not found! (login is case sensitive) <br> <a href=\"forgotpass.html\">Return</a>";
        }else {
 	       $query = "select ".security_question." from ".$table." where name=\"".$user."\"";
	       $return = mysql_query($query);

               $row = mysql_fetch_array($return);
               $question_id = $row{'security_question'};
	       
	       $query = "select ".question." from ".passphrase." where id=\"".$question_id."\"";
	       $question = mysql_query($query);

               $row = mysql_fetch_array($question);
               $question = $row{'question'};

               echo ($question);

               $passvariables = "
			<html>
			<body>
				<form action='checkSecPass.php' method=post>
					<p>Answer: <input type='password' name='answer'/></p>
					<p>Enter new password: <input type='password' name='pass1'/></p>
					<p>Confirm password: <input type= 'password' name='pass2'/></p>
					<input type='hidden' name='user' value= $user />
					<input type='submit' value='Submit'/>
				</form>
			</body>
			</html>";
               echo $passvariables;

}

}

mysql_close($dbhandle);
?>

</html>


