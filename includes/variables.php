<?php
//-------------index page-----------//
if(isset($_POST['name'])){$name=$_POST['name'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['password'])){$password=$_POST['password'];}
if(isset($_POST['updates']))
{	$updates='true';
}
else
{	$updates='false';
}
//--------- profile edit page----------//
if(isset($_SESSION['sessemail'])){$mail = $_SESSION['sessemail'];}
if(isset($_POST['pname'])){$pname = $_POST['pname'];}
if(isset($_POST['dob'])){$dob = $_POST['dob'];}
if(isset($_POST['country'])){$country = $_POST['country'];}//for country
if(isset($_POST['m_no'])){$mobile = $_POST['m_no'];}
if(isset($_POST['gender'])){$gender = $_POST['gender'];}
//---------------forgot password-----------//
if(isset($_POST['resetmail']) && (!empty($_POST['resetmail']))){$resetmail = $_POST['resetmail'];}
else {$resetmailerr = "Enter your registered email.";}
?>