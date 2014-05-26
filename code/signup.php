<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "worldautoforum";
$mysql_database = "worldauto";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['updates']))
{	$updates='true';
	}

$check = "select * from register where email = '$email'";
$res = mysql_query($check);
$count = mysql_num_rows($res);
if($count == 0){
mysql_query("INSERT INTO register(name, email, password, sendupdates)VALUES('$name', '$email', '$password','$updates')");

//sending email for confirmation
//$to = $email;
//$headers = "MIME-Version: 1.0\r\n";
//$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//$subject = "Successful registration with World Auto Forum.";
//$message = '<html><body>';
//$message.= '<img src= "http://localhost/waf_test/images/waf_header.jpg" width="800" height="152"/>\n';
//$message.='Hello'.$name.'\n\n';
//$message.='Thank you for joining the most powerful networking hub of the globl auto industry - WORLD AUTO FORUM';
//$message.='Click the following link and enter your information below to login:\n\n';
//$message.='http://www.worldautoforum.com/login.php \n\n';
//$message.='Username: '.$email.'\n';
//$message.='Password: '.$password.'\n\n\n';
//$message.='Best Regards \n\n World Auto Forum';
//$message.='</body></html>';
//mail($to,$subject,$message,$headers
//);
echo($success = '1');
}

else
{
	echo($success = '0');
		}

mysql_close($bd);
?>