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
//---------------Job section post a job-----------//
if(isset($_POST['job_title']) && (!empty($_POST['job_title']))){$job_title = $_POST['job_title'];} 
if(isset($_POST['description'])){$description = $_POST['description'];}
if(isset($_POST['tagline'])){$tagline = $_POST['tagline'];}
if(isset($_POST['last_date'])){$last_date = $_POST['last_date'];}
if(isset($_POST['location'])){$location = $_POST['location'];}
if(isset($_POST['stipend'])){$stipend = $_POST['stipend'];}
if(isset($_POST['company_name'])){$company_name = $_POST['company_name'];}
if(isset($_POST['company_website'])){$company_website = $_POST['company_website'];}
//--------------Advertisements --------------------------//
if(isset($_POST['title'])){$title = $_POST['title'];}
if(isset($_POST['describe'])){$describe = $_POST['describe'];}
if(isset($_POST['contact_name'])){$contact_name = $_POST['contact_name'];}
if(isset($_POST['contact_email'])){$contact_email = $_POST['contact_email'];}
if(isset($_POST['contact_phone'])){$contact_phone = $_POST['contact_phone'];}
if(isset($_POST['contact_country'])){$contact_country = $_POST['contact_country'];}
if(isset($_POST['audience_country'])){$audience_country = $_POST['audience_country'];}
if(isset($_POST['audience_age'])){$audience_age = $_POST['audience_age'];}
if(isset($_POST['payment_country'])){$payment_country = $_POST['payment_country'];}
if(isset($_POST['currency'])){$currency = $_POST['currency'];}
if(isset($_POST['budget'])){$budget = $_POST['budget'];}
if(isset($_POST['timezone'])){$timezone = $_POST['timezone'];}
?>