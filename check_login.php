<?php
		if(isset($_COOKIE['cookmail']) && isset($_COOKIE['cookpass']))
		{
				$cook = $_COOKIE['cookmail'];
				$res = mysql_query("select * from register where email = '$cook'") or die(mysql_error());
				while($rows = mysql_fetch_array($res))
				{
					if($_COOKIE['cookpass'] == md5($rows['password']))
					{
						$_SESSION['sessemail'] = $_COOKIE['cookmail'];
	  					$_SESSION['sesspassword'] = $rows['password'];
					}
				}
				
		}
		else
		{
			echo "<script>alert('Please Login first.');</script>";
			echo "<script>window.location = 'index.php';</script>";
		}
?>