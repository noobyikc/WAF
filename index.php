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

            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script src="js/modernizr.custom.js"></script>
         	<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
<<<<<<< HEAD
            
            <script type="text/javascript" src="js/jssor.core.js"></script>
			<script type="text/javascript" src="js/jssor.utils.js"></script>
            <script type="text/javascript" src="js/jssor.slider.js"></script>
                       
            
            
=======
                        
>>>>>>> 0a2a555db63a5736d8df42af161a425ec1a8d703
   </head>

<?php
 		include('includes/connection.php');
	    include('includes/variables.php');
 
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
	  		echo "<script> windows.location = 'profile_view.php';</script>";
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
		   
          

	

  	<body data-spy="scroll" data-target=".navbar navbar-inverse" style="">
    
   <!--=============================================Loader============================================= -->  
		<script>
			$(window).load(function() {
			//$("#loader").animate({top: 700}, 2500);
			  $("#loader").fadeOut([1000]);
			});
		</script>	
		<div id="loader" style="height:100%">
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
						<a href="forgot_password.php" class="forgot_password">Forgot password?</a>
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
                <div style="background:#000;height:550px;opacity:0.5;position:relative;top:-19.5em"></div>
			</div>
			<div class="item" id="carousel_image2" >
				<div class="container">
        	    	<div class="carousel-caption">
		            	<h1>Buy stuff</h1>
		                <p>Auto Components & Parts Makers Love WAF!</p>
		            </div>
        		</div>
				<div style="background:#000;height:550px;opacity:0.5;position:relative;top:-16.8em"></div>
	        </div>
    	    <div class="item" id="carousel_image3">
				<div class="container">
		            <div class="carousel-caption">
		            	<h1>Auto Dealers</h1>
		                <p>From around the world are on WAF!</p>
		            </div>
				</div>
                <div style="background:#000;height:550px;opacity:0.5;position:relative;top:-16.8em"></div>
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
    	<table class="details">
        	<tr>
            	<td>
                	<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Create</div>
                        <div class="panel-body body-content">
                        	<img class="icon-content" src="image/icons/create.png" />
                        	Create your professional profile online and be seen by the top Professionals from around the world.
                        </div>
                    </div>
                    
                </td>
                <td>
               		<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Converse</div>
                        <div class="panel-body body-content">
                            <img class="icon-content" src="image/icons/converse.png" />
                        	Jobs in the conversation on WAF. Find and follow your friends and companies and be updated about the latest news.
                        </div>
                    </div>
                </td>
                <td>
                	<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Connect</div>
                        <div class="panel-body body-content">
                        	<img class="icon-content" src="image/icons/connect.jpg" />
                        	Find your former colleagues and stay in touch or make new connections in companies and grow professionally.
                        </div>
                    </div>
                </td>
            </tr><tr>
            	<td>
                	<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Grow</div>
                        <div class="panel-body body-content">
                        	<img class="icon-content" src="image/icons/grow.png" />
							Search and apply for the most lucrative jobs in the industry using your WAF profile and grow professionally. 
                        </div>
                    </div>
                    
                </td>
                <td>
               		<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Buy/Sell</div>
                        <div class="panel-body body-content">
                        	<img class="icon-content" src="image/icons/buysell.png" />
                        	Use our Marketplace to sell your products or services and gain international exposure and high profits.
                        </div>
                    </div>
                </td>
                <td>
                	<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Speak out</div>
                        <div class="panel-body body-content">
                        	<img class="icon-content" src="image/icons/speak.jpg" />
	                        Write your own blog posts on your profile and be recognised in as expert in the highly competitive auto industry.
                        </div>
                    </div>
                </td>
            </tr><tr>
            	<td>
                	<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Be Updated</div>
                        <div class="panel-body body-content">
                        	<img class="icon-content" src="image/icons/updated.png" />
                        	Stay updated with WAF news of the auto industry. Led by the Captain of the industry, be a winner among your peers.
                        </div>
                    </div>
                    
                </td>
                <td>
               		<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Gain Insight</div>
                        <div class="panel-body body-content">
	                       	<img class="icon-content" src="image/icons/insight.png" />
                            Access WAF Whitepapers and gain new insights about almost any topic related to the auto industry.
                        </div>
                    </div>
                </td>
                <td>
                	<div class="panel panel-primary panel-content">
                    	<div class="panel-heading heading-content">Make a Difference</div>
                        <div class="panel-body body-content">
                            <img class="icon-content" src="image/icons/difference.png" />
							Be a part of the largest group of Auto professionals, show your expertise and make a difference to your life and career.
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        
        <!---slider--->  


        
    </div>
  
  

<script>
				jQuery(document).ready(function ($) {
					var options = {
						$AutoPlay: true,
						$AutoPlaySteps: 1,                                  
						$AutoPlayInterval: 0,                            
						$PauseOnHover: 1,                           
		
						$ArrowKeyNavigation: true,   			    
						$SlideEasing: $JssorEasing$.$EaseLinear,    
						$SlideDuration: 3000,                       
						$MinDragOffsetToSlide: 20,                  
						$SlideWidth: 140,                           
						$SlideSpacing: 0, 					        
						$DisplayPieces: 7,                          
						$ParkingPosition: 0,                        
						$UISearchMode: 1,                           
						$PlayOrientation: 1,                        
						$DragOrientation: 1                         
					};
		
					var jssor_slider1 = new $JssorSlider$("company_slider", options);
		
					
					function ScaleSlider() {
						var bodyWidth = document.body.clientWidth;
						if (bodyWidth)
							jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1080));
						else
							window.setTimeout(ScaleSlider, 30);
					}
		
					ScaleSlider();
		
					if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
						$(window).bind('resize', ScaleSlider);
					}
		
				});
			</script>
<div id="company_slider" >

        
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: relative; left: 50px; bottom:20px; top: 0px; width: 1080px; height: 100px; overflow: hidden;">
        
        <!-- Loading Screen -->
        <div u="loading" style="position:relative; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: relative; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        
        
            <div><img u="image" alt="amazon" src="image/logo/amazon.jpg" /></div>
            <div><img u="image" alt="android" src="image/logo/android.jpg" /></div>
            <div><img u="image" alt="bitly" src="image/logo/bitly.jpg" /></div>
            <div><img u="image" alt="blogger" src="image/logo/blogger.jpg" /></div>
            <div><img u="image" alt="dnn" src="image/logo/dnn.jpg" /></div>
            <div><img u="image" alt="drupal" src="image/logo/drupal.jpg" /></div>
            <div><img u="image" alt="ebay" src="image/logo/ebay.jpg" /></div>
            <div><img u="image" alt="facebook" src="image/logo/facebook.jpg" /></div>
            <div><img u="image" alt="google" src="image/logo/google.jpg" /></div>
            <div><img u="image" alt="ibm" src="image/logo/ibm.jpg" /></div>
            <div><img u="image" alt="ios" src="image/logo/ios.jpg" /></div>
            <div><img u="image" alt="joomla" src="image/logo/joomla.jpg" /></div>
            <div><img u="image" alt="linkedin" src="image/logo/linkedin.jpg" /></div>
            <div><img u="image" alt="mac" src="image/logo/mac.jpg" /></div>
            <div><img u="image" alt="magento" src="image/logo/magento.jpg" /></div>
            <div><img u="image" alt="pinterest" src="image/logo/pinterest.jpg" /></div>
            <div><img u="image" alt="samsung" src="image/logo/samsung.jpg" /></div>
            <div><img u="image" alt="twitter" src="image/logo/twitter.jpg" /></div>
            <div><img u="image" alt="windows" src="image/logo/windows.jpg" /></div>
            <div><img u="image" alt="wordpress" src="image/logo/wordpress.jpg" /></div>
            <div><img u="image" alt="youtube" src="image/logo/youtube.jpg" /></div>
        </div>
        <a style="display: none" href="http://www.jssor.com">html slider</a>
    </div>
        
        
        
        


	<!--=============================================Footer============================================= -->
    

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
