<html>
<body>
<title>Auth</title>
<?php
if(!isset($_POST['username']))
{
	die("Eat shit and die...");
}
if($_POST['username'] == "johnny" && $_POST['password'] == "letmein")
{
	$_SESSION["loggedin"] = "true";
	include("flag.php");
	die();
}else{
	echo "<form method=\"POST\" action=\"http://authentication.howitshould.be/auth.php\">\n";
	echo "<table align=\"center\">\n";
	echo "	<tr><td>Username:&nbsp;<td><input type=\"text\" name=\"username\"></tr>\n";
	echo "	<tr><td>Password:&nbsp;<td><input type=\"password\" name=\"password\"></tr>\n";
	echo "	<tr><td colspan=2 align=\"right\"><input type=\"submit\" name=\"submit\" value=\"log in\"></tr>\n";
	echo "</table>\n";
	echo "</form>\n";
	die();
}
?>
</body>
</html>