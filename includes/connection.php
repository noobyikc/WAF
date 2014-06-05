<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
<<<<<<< HEAD
$mysql_password = "";
=======
$mysql_password = "inshu12345";
>>>>>>> 51d6dbaa3a725e82fb2cabdeb21d148078307df4
$mysql_database = "worldauto";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>