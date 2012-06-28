<?php
$conn_error = 'Could not connect to database.';

//$mysql_host = '184.73.162.78';
$mysql_host = '127.0.0.1';
$mysql_user = 'wwwphp';
$mysql_pass = 'cs452php';
$mysql_db = 'PHPtest';

if (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
die($conn_error);
}





?>
