<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
           
            <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
            <link rel="shortcut icon" href="../favicon.ico">
        
            <title>World Auto Forum</title>
        
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/carousel.css" />
            <link rel="stylesheet" type="text/css" href="css/index.css" />
			<link rel="stylesheet" type="text/css" href="css/search.css" />

            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script src="js/modernizr.custom.js"></script>
         	<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
   </head>

<?php
   include('includes/variables.php');
   include('includes/connection.php');
?>

<?php
	if(isset($_POST['registerbtn'])) {
		$result = mysql_query("INSERT INTO register(name, email, password, sendupdates)VALUES('$name', '$email', '$password','$updates')")or die(mysql_error());
	  	/* sending email for confirmation 
	  	$to = $email;
		$headers = "MIME-Version: 1.0\r\n";
		$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$subject = "Successful registration with World Auto Forum.";
		$message = '<html><body>';
		$message.= '<img src= "http://localhost/waf_test/images/waf_header.jpg" width="800" height="152"/>\n';
	  	$message.='Hello'.$name.'\n\n';
	  	$message.='Thank you for joining the most powerful networking hub of the globl auto industry - WORLD AUTO FORUM';
	  	$message.='Click the following link and enter your information below to login:\n\n';
	  	$message.='http://www.worldautoforum.com/login.php \n\n';
	  	$message.='Username: '.$email.'\n';
	  	$message.='Password: '.$password.'\n\n\n';
	  	$message.='Best Regards \n\n World Auto Forum';
	  	$message.='</body></html>';
	  	mail($to,$subject,$message,$headers); */
	  	if($result)
	  		echo "<script> alert('registration successful.');</script>";
	  	else
	  		die(mysql_error());
}
?>

<?php
	if(isset($_POST['loginbtn']))
		  {
			  $flag = 0;
			  $ldetail = mysql_query("SELECT * from register WHERE email = '$email' and password = '$password';") or die(mysql_error());
			 while($rows = mysql_fetch_array($ldetail)){
			$_SESSION['sessemail'] = $rows['email'];
			$_SESSION['sesspassword'] = $rows['password'];
			$flag=1;
	}
	if($flag==1)
		echo "<script>window.location = 'profile.php';</script>";
	else
		
		echo "<script>window.location = 'index.php';</script>";
			
			
			}
		  ?>
		   
          

	

  	<body data-spy="scroll" data-target=".navbar navbar-inverse">
    
   <!--=============================================Loader============================================= -->  
		<script>
			$(window).load(function() {
			//$("#loader").animate({top: 700}, 2500);
			  $("#loader").fadeOut([1000]);
			});
		</script>	
		<div id="loader">
        	<img id="image-loader"src="image/icons/gear.gif" alt="Loading..." />
        </div>
    
   <!--=============================================Navigation============================================= --> 
    	<div class="navbar-wrapper">
          <div class="container">
            <div class="navbar navbar-inverse navbar-static-top" role="navigation">
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
        
   <!--=============================================Login-Signup============================================= -->
        <section>
            <div id="login-signup">
                <a id="modal_trigger" href="#modal" class="btn">Login / Signup</a>
                <div id="modal" class="popupContainer" style="display:none;">
                    <header class="popupHeader">
                        <span class="header_title">Enter World Auto Forum</span>
                        <span class="modal_close"><i>x</i></span>
                    </header>
            	<section class="popupBody">
					<!-- Social Login -->
					<div class="social_login">
							<a href="#" class="social_box fb">
								<span class="icon"><i></i></span>
								<span class="icon_title">Continue with Facebook</span>
							</a>
                            <a href="#" class="social_box google">
								<span class="icon"><i class="fa fa-google-plus"></i></span>
								<span class="icon_title">Continue with Google</span>
							</a>
						<div class="centeredText">
							<span>Or use your Email address</span>
						</div>
						<div class="action_btns">
							<div class="one_half"><a href="#" id="login_form" class="btn btn_red">Login</a></div>
							<div class="one_half last"><a href="#" id="register_form" class="btn btn_red">Sign up</a></div>
						</div>
					</div>
					<!-- Username & Password Login form -->
					<div class="user_login">
						<form name="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
							<label>Email / Username</label>
							<input type="text" name="email" />
							<br />
							<label>Password</label>
							<input type="password" name="password" />
							<br />
							<div class="checkbox">
								<input id="remember" type="checkbox" />
								<label for="remember">Remember me on this computer</label>
							</div>
							<div class="action_btns">
								<div class="one_half"><a href="#" class="btn back_btn">Back</a></div>
								<div class="one_half last"><a class="btn btn_red" style="padding:1px 1px;"><input type="submit" class="btn btn_red" value="Login" id="login-reg_button" name="loginbtn" /></a></div>
							</div>
						</form>
						<a href="#" class="forgot_password">Forgot password?</a>
					</div>
					<!-- Register Form -->
					<div class="user_register">
						<form name="signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
							<label>Full Name</label>
							<input type="text" name="name" />
							<br />
							<label>Email Address</label>
							<input type="email" name="email" />
							<br />
							<label>Password</label>
							<input type="password" name="password" />
							<br />
							<div class="checkbox">
								<input id="send_updates" type="checkbox" name="updates" />
								<label for="send_updates">Send me occasional email updates</label>
							</div>
							<div class="action_btns">
								<div class="one_half"><a href="#" class="btn back_btn">Back</a></div>
								<div class="one_half last"><a class="btn btn_red" style="padding:1px 1px;"><input name="registerbtn" class="btn btn_red" type="submit" id="login-reg_button" value="Register" /></a></div>
							</div>
						</form>
					</div>
				</section>
			</div>
		</div>
		<script type="text/javascript">
			$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
			$(function(){
			// Calling Login Form
				$("#login_form").click(function(){
					$(".social_login").hide();
					$(".user_login").show();
					$(".header_title").text('Login');
					return false;
				});
			// Calling Register Form
				$("#register_form").click(function(){
					$(".social_login").hide();
					$(".user_register").show();
					$(".header_title").text('Register');
					return false;
				});
			// Going back to Social Forms
				$(".back_btn").click(function(){
					$(".user_login").hide();
					$(".user_register").hide();
					$(".social_login").show();
					$(".header_title").text('Enter World Auto Forum');
					return false;
				});
			})
		</script>
    </section>
	
  <!--=============================================Carousel============================================= -->
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Indicators -->
		<!--<ol class="carousel-indicators">
        	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
    	    <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>-->
		<div class="carousel-inner">
        	<div class="item active" id="carousel_image1">
          		<div class="container">
		            <div class="carousel-caption">
        		    	<h1>Join Us,</h1>
                		<p>Top Auto Makers & their People across 125 countries are on WAF!<br />Are You ?</p>
		            </div>
        		</div>
			</div>
			<div class="item" id="carousel_image2" >
				<div class="container">
        	    	<div class="carousel-caption">
		            	<h1>Buy stuff</h1>
		                <p>Auto Components & Parts Makers Love WAF!</p>
		            </div>
        		</div>
	        </div>
    	    <div class="item" id="carousel_image3">
				<div class="container">
		            <div class="carousel-caption">
		            	<h1>Auto Dealers</h1>
		                <p>From around the world are on WAF!</p>
		            </div>
				</div>
	        </div>
    	</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    
	<!--=============================================Heading============================================= -->

	<div class="box shadow">
    	<div id="company"> 
			W<font style="font-size:50px">ORLD &nbsp;&nbsp; </font>
        	A<font style="font-size:50px">UTO &nbsp;&nbsp; </font>
        	F<font style="font-size:50px">ORUM</font>
    	</div>
    </div>
    
    <div class="content1 shadow">
    bls
    </div>
  

	<!--=============================================Footer============================================= -->
    
    <!---->

    <div class="footer">
		<table class="links">
        	<tr>
            	<td><a href="#">Sitemap</a></td>
                <td><a href="#">Terms</a></td>
                <td><a href="#">Privacy</a></td>
                <td><a href="#">Jobs</a></td>
            	<td><a href="#">Marketplace</a></td>
                <td></td>
            </tr>
            <tr>
            	<td><a href="#">Forum/Discussion</a></td>
                <td><a href="#">Events</a></td>
                <td><a href="#">Create Advt.</a></td>
                <td><a href="#">Create Pages</a></td>
                <td></td>
        </table>
        <div class="copyright">
            <p>(c) 2014 World Auto Forum inc, all rights reserved</p>
        </div>
      </div>
    </div><!-- /.container -->
  </body>
</html>
