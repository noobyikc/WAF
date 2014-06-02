<?php
//-------------index page-----------
if(isset($_POST['name'])){$name=$_POST['name'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['password'])){$password=$_POST['password'];}
if(isset($_POST['updates']))
{	$updates='true';
}
else
{	$updates='false';
}
//--------- profile edit page----------
if(isset($_POST['pname'])){$pname = $_POST['pname'];}
if(isset($_POST['dob'])){$dob = $_POST['dob'];}
if(isset($_POST['name'])){$country = $_POST['name'];}
if(isset($_POST['m_no'])){$mobile = $_POST['m_no'];}
if(isset($_SESSION['sessmail'])){$mail = $_SESSION['sessmail'];}
?>