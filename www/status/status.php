<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CS 452 Project Server Status</title>
</head>

<body>

<img alt="Logo" src="./images/ASU_Logo.jpg" />

<p></p>
<h1>Server status page</h1>
<p>Apache = UP (obviously)</p>

<p>PHP Status = <a href="./phpStatus.php">Full Status</a>
</p>

<p>mySQL Status = <br />

<?php
$con = mysql_connect("localhost", "root", "cs452");
	if (!$con)  {
		die('Could not connect:  ' . mysql_error());
	}
	mysql_select_db("dbName", $con);
	echo mysql_stat();
?>

</p>

</body>

</html>
