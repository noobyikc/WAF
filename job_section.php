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
	require('includes/connection.php');
		require('check_login.php');
	    require('includes/variables.php');
 
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
					<a href="job_section3" class="buy" id="js-trigger-overlay" type="button">Post A Job</a>
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
			<?php
			$query = mysql_query("select * from jobs;") or die(mysql_error());
			while($rows = mysql_fetch_array($query))
			{
				$id = $rows['job_id'];
			?>
			<div class="jobs_elements">
				<a href="job_section2.php?id= <?php echo $_GET['id']; ?>" >
                 <div class="jobs_jobs">
					<div class="jobs_text">
						<h1> <?php echo $rows['job_title']; ?> </h1>
						<h3> <?php echo $rows['company_name']; echo "("; echo $rows['location']; echo ")"; ?> </h3>
					</div>
					<div class="jobs_avail">Available
					</div>
					<div class="jobs_last_date">Last Date To Apply:<br> <?php echo $rows['last_date'] ?>
					</div>
				 </div> 
                 </a>
             </div>
               <?php
			}
			   ?>
		</div>
	</body>
</html>