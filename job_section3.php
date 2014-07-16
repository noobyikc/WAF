<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <link rel="shortcut icon" href="../favicon.ico">
        
        <title>W.A.F Job-Section</title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/discussion_forum.css" />
        <!--<link rel="stylesheet" type="text/css" href="css/index.css" />-->
        
			<link rel="stylesheet" type="text/css" href="css/search.css" />
			<!--<link rel="stylesheet" type="text/css" href="css/default.css" />-->
<!--			<link rel="stylesheet" type="text/css" href="css/component2.css" />
-->
			<!--<SCRIPT language=JavaScript>
			function reload(form)
			{
				var val=form.cat.options[form.cat.options.selectedIndex].value;
				self.location='new 22.php?cat=' + val ;
			}

			</script>
			-->
            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			
			<link rel="stylesheet" type="text/css" href="css/job_section.css" />

          

	</head>
<?php
 		include('includes/connection.php');
	    include('includes/variables.php');
 
?>

<?php
	if(isset($_POST['postbtn']))
	{
		$emailid = $_SESSION['sessemail'];
		$sql_query = mysql_query("Insert into jobs(company_name, company_website, description, email, job_title, last_date, location, stipend, tagline) Values ('$company_name', '$company_website', '$description', '$emailid', '$job_title', '$last_date', '$location', '$stipend', '$tagline');") or die(mysql_error);
		if($sql_query)
		{
			echo "<script> alert('Advertisement for job has been submitted successfully.');</script>";	
		}
	}
?>
	
  	<body data-spy="scroll" data-target=".navbar navbar-inverse">
   		<!--=============================================Navigation============================================= --> 
    	<div class="navbar-wrapper">
        	<div class="container">
                <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        	<span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">World Auto Forum</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">Sign In</a></li>
                      		<li><a href="#contact">Contact</a></li>
                        	<li class="Dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                        	</li>
                        	<li>
                                <div class="main clearfix">
                                <!-- Optional columns for small components -->
                                    <div class="column">
                                        <div id="sb-search" class="sb-search">
                                            <form>
                                                <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                                <input class="sb-search-submit" type="submit" value="">
                                                <span class="sb-icon-search" id="search-img"><img src="image/icons/sprites.png"/></span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
        </div>
			<script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
        <!--=============================================Jobs============================================= --> 
		<div class="left_bar">
			<div class="job_button">
				<div class="share" style="margin-top:20px;margin-right:50px;float:right">
								<a href="#"><image src="image/logo/facebook-icon.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="image/logo/gplus.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="image/logo/linkedln.png" style="height:30px;width:30px;"></a>
				</div>
				<br><br><br><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Sign in</a> No Account? <a href="#">Sign Up!</a></h2>
				
				<section>
					<button class="buy" id="js-trigger-overlay" type="button">Submit An Job</button>
				</section>
			</div>
			<div class="job_compony"><br>
				<h2><u>W.A.F. Partners</u></h2><br>
				<img src="image/company logos/1.png" alt="img04" />
				<img src="image/company logos/2.png" alt="img04" />
				<img src="image/company logos/3.jpg" alt="img04" />
				
				<img src="image/company logos/4.png" alt="img04" />
				<img src="image/company logos/5.jpg" alt="img04" />
				<img src="image/company logos/6.jpg" alt="img04" />
				
				<img src="image/company logos/7.jpg" alt="img04" />
				<img src="image/company logos/8.jpg" alt="img04" />
				<img src="image/company logos/9.jpg" alt="img04" />
				
				<img src="image/company logos/10.jpg" alt="img04" />
				<img src="image/company logos/11.jpg" alt="img04" />
				<img src="image/company logos/12.jpg" alt="img04" />
				
				<img src="image/company logos/13.jpg" alt="img04" />
				<img src="image/company logos/14.jpg" alt="img04" />
				<img src="image/company logos/15.jpg" alt="img04" />
				
				<img src="image/company logos/16.jpg" alt="img04" />
				<img src="image/company logos/17.jpg" alt="img04" />
				<img src="image/company logos/18.jpg" alt="img04" />
				
				<img src="image/company logos/19.jpg" alt="img04" />
				<img src="image/company logos/20.jpg" alt="img04" />
				<img src="image/company logos/21.jpg" alt="img04" />
				
				<img src="image/company logos/22.jpg" alt="img04" />
				<img src="image/company logos/23.jpg" alt="img04" />
				<img src="image/company logos/24.jpg" alt="img04" />
				
				<img src="image/company logos/25.jpg" alt="img04" />
				<img src="image/company logos/26.jpg" alt="img04" />
				<img src="image/company logos/27.jpg" alt="img04" />
				
				<img src="image/company logos/28.jpg" alt="img04" />
				<img src="image/company logos/29.jpg" alt="img04" />
				<img src="image/company logos/30.jpg" alt="img04" />
				
				<img src="image/company logos/31.jpg" alt="img04" />
				<img src="image/company logos/32.jpg" alt="img04" />
				<img src="image/company logos/33.jpg" alt="img04" />
				
				<img src="image/company logos/34.jpg" alt="img04" />
				<img src="image/company logos/35.jpg" alt="img04" />
				<img src="image/company logos/36.jpg" alt="img04" />
				
				<img src="image/company logos/37.jpg" alt="img04" />
				<img src="image/company logos/38.jpg" alt="img04" />
				<img src="image/company logos/39.jpg" alt="img04" />
				
				<img src="image/company logos/40.jpg" alt="img04" />
				<img src="image/company logos/41.jpg" alt="img04" />
				<img src="image/company logos/42.jpg" alt="img04" />
				
			</div>
		</div>
		<div class="jobs">
			<div class="search">
				<form class="form-wrapper cf">
					<input type="text" placeholder="Search Jobs here..." required>
					<button type="submit">Search</button>
				</form>
			</div>
			
			<div class="apply_form">
				<form class="form_real" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
					<label style="font-size: 1.5em;" for="job_title">Post A JOB</label>
				
					<label for="job_title">Job Title</label>
	  				<input type="text" id="job_title" name="job_title" placeholder="..E.G. Software Enginner" Required>
					
					<label for="Description">Description or Job Profile</label>
	  				<textarea id="Description" name="description" placeholder="Thing u Require In the Candidate---" Required></textarea>
					
					<label for="tagline">Tagline</label>
	  				<textarea id="tagline" name="tagline" placeholder="Some Impersive Tagline" Required></textarea>
					
					<label for="last_date">Last Date to Apply</label>
	  				<input type="date" id="last_date" name="last_date" Required></textarea>
					
					<label for="location">Location</label>
	  				<input type="text" id="location" name="location" placeholder="..E.G. Delhi,India or Pune,Maharashtra,India" Required>
					
					<label for="stipend">Stipend/CTC</label>
					<input type="text" id="stipend" name="stipend" placeholder="..Stipend" Required>
					
					<div class="cbp-mc-column ">
						<label for="compony_name">Company Name</label>
						<input type="text" id="company_name" name="company_name" placeholder="..E.G. W.A.F." Required>
					</div>	
					<div class="cbp-mc-column" >
						<label for="company_website">Company Website</label>
						<input type="text" id="company_website" name="company_website" placeholder="http://" Required>
					</div><br>	
					<label for="company_address">Company Address</label>
					<input type="text" id="company_address" name="company_address" placeholder="..Address" Required>
					
					<label for="company_city">City</label>
					<input type="text" id="compony_city" name="compony_city" placeholder="..City" Required>
					
					<label for="company_zip">Company Zip-Code</label>
					<input type="text" id="company_zip" name="company_zip" placeholder="..Zip-Code" Required>
					
					<label for="compony_country">Company Country</label>
					<input type="text" id="company_country" name="company_country" placeholder="..Country" Required>
					
					<label for="company_info">About the Company</label>
	  				<textarea id="company_info" name="company_info" placeholder="Some Information about the Company" Required></textarea>
					
					<input class="cbp-mc-submit" type="submit" value="Post The Job" name="postbtn" />
				</form>	
			</div>
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>