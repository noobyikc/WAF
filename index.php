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
            <link rel="stylesheet" type="text/css" href="css/footer.css" />

            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script src="js/modernizr.custom.js"></script>
         	<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
            <script src="js/jquery.parallax.js"></script>

            <script type="text/javascript" src="js/jssor.core.js"></script>
			<script type="text/javascript" src="js/jssor.utils.js"></script>
            <script type="text/javascript" src="js/jssor.slider.js"></script>
            
</head>


<?php
 		include('includes/connection.php');
	    include('includes/variables.php');
		require 'PHPMailer/PHPMailerAutoload.php';
?>

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
?>
<?php
	if(isset($_POST['registerbtn'])) {
		$result = mysql_query("INSERT INTO register(name, email, password, sendupdates)VALUES('$name', '$email', '$password','$updates')")or die(mysql_error());
		$mail = new PHPMailer;	
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'noreply.waf@gmail.com';            // SMTP username
		$mail->Password = 'waf@anuj12345,.';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->From = 'noreply.waf@gmail.com';
		$mail->FromName = 'WAF Mailer';
		$mail->addAddress('aakash11003@iiitd.ac.in', 'Soloman Grundy');     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('aakash11003@iiitd.ac.in', 'Napa, the invincible');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		$mail->WordWrap = 55;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Test Mail';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		if(!$mail->send()) {
			//echo 'Message could not be sent.';
			//echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			//echo 'Message has been sent';
		}
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
	  	if($result)//cookie set at time of registration
		{
			setcookie("regmail", $email, time()+60*60*24*100, "/");
    		setcookie("regpass", md5($password), time()+60*60*24*100, "/");
	  		echo "<script> windows.location = 'profile_view.php';</script>";	
		}
	  	else
	  		die(mysql_error());
}
?>

<?php
	if(isset($_POST['loginbtn']))
{
	  $flag = 0;
	  $ldetail = mysql_query("SELECT * from register WHERE email = '$email' and password = '$password';") or die(mysql_error());
	  while($rows = mysql_fetch_array($ldetail))
	  {		$_SESSION['sessemail'] = $rows['email'];
	  		$_SESSION['sesspassword'] = $rows['password'];
			$flag=1;
	  }
		if($flag==1)
	{
		if(isset($_POST['remember']))//cookie at time of login
			{
				setcookie("cookmail", $_SESSION['sessemail'], time()+60*60*24*100, "/");
      			setcookie("cookpass", md5($_SESSION['sesspassword']), time()+60*60*24*100, "/");	
			}
		echo "<script>window.location = 'profile.php';</script>";
	}
	else
		echo "<script>window.location = 'index.php';</script>";		
}
?>
		   
<!-----slider script--->

    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 3000,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 140,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 980));
                else
                    $JssorUtils$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $JssorUtils$.$AddEvent(window, "load", ScaleSlider);


            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $JssorUtils$.$OnWindowResize(window, ScaleSlider);
            }

            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $JssorUtils$.$AddEvent(window, "orientationchange", ScaleSlider);
            //}
            //responsive code end
        };
    </script>
<!----slider--->

          

	

  	<body data-spy="scroll" data-target=".navbar navbar-inverse" style="">
    <!-- ========================== scroll down ========================= -->
    <div class="image-pos1" id="image-view1">
   			<a href="#image-view1"><img src="image/icons/down.jpg" /></a>
	</div>
    <!--============================================Scroll Up========================================== -->
    <script>
	jQuery(document).ready(function() {
    var offset = 630;
    var duration = 1000;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.image-pos2').fadeIn(duration);
        } else {
            jQuery('.image-pos2').fadeOut(duration);
        }
    });
    
    jQuery('.image-pos2').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
	</script>
    <div class="image-pos2" id="image-view2">
    	<a href="#"><img src="image/icons/up.jpg" /></a>
    </div>
    
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
                <div style="background:#000;height:550px;opacity:0.5;position:relative;top:-19.3em"></div>
			</div>
			<div class="item" id="carousel_image2" >
				<div class="container">
        	    	<div class="carousel-caption">
		            	<h1>Buy stuff</h1>
		                <p>Auto Components & Parts Makers Love WAF!</p>
		            </div>
        		</div>
				<div style="background:#000;height:650px;opacity:0.5;position:relative;top:-16.7em"></div>
	        </div>
    	    <div class="item" id="carousel_image3">
				<div class="container">
		            <div class="carousel-caption">
		            	<h1>Auto Dealers</h1>
		                <p>From around the world are on WAF!</p>
		            </div>
				</div>
                <div style="background:#000;height:650px;opacity:0.5;position:relative;top:-16.7em"></div>
	        </div>
    	</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
   <!--=============================================Login-Signup============================================= -->
		<div class="box">
        <section >
    	    
            <div id="login-signup">
                <a id="modal_trigger" href="#modal" class="btn">Login | Signup</a>
                <div id="lean_overlay"></div>
                <div id="modal" class="popupContainer" style="display:none;">
                    <header class="popupHeader">
                        <span class="header_title">Enter World Auto Forum</span>
                        <span class="modal_close"><i>x</i></span>
                    </header>
                    <section class="popupBody">
                        <!-- Login Form -->
                        <div class="social_login">
                        <form name="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <label>Email / Username</label>
                                <input type="text" name="email" />
                                <br />
                                <label>Password</label>
                                <input type="password" name="password" />
                                <br />
                                <div class="checkbox">
                                    <input id="remember" type="checkbox" name="remember" />
                                    <label for="remember">Remember me on this computer</label>
                                </div>
                                <div class="action_btns">
                                    <div class="one_half"><a class="btn btn_red" style="padding:1px 1px;"><input type="submit" class="btn btn_red" value="Login" id="login-reg_button" name="loginbtn" /></a></div>
								<div class="one_half last"><a href="#" id="register_form" class="btn btn_red">Sign up</a></div>
							</div>
						</form>
                        <div class="user_login">
							<a href="forgot_password.php" class="forgot_password">Forgot password?</a>
						</div>
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
								<label for="send_updates">Send me occasional updates</label>
                            </div>
							<div class="checkbox">
								<input id="privacy" type="checkbox" name="privacy_policy" />
								<label for="privacy">Agree to <span style="text-decoration:underline">Terms of Service</span></label>
							</div>
							<div class="action_btns">
								<div class="one_half"><a class="btn btn_red" style="padding:1px 1px;"><input name="registerbtn" class="btn btn_red" type="submit" id="login-reg_button" value="Register" /></a></div>
   								<div class="one_half  last"><a href="#" class="btn back_btn">Back to Login</a></div>
							</div>
						</form>
					</div>
				</section>
			</div>
            <script>
      			window.fbAsyncInit = function() {
        			FB.init({
          				appId      : '268741753315056',
          				xfbml      : true,
          				version    : 'v2.0'
        			});
      			};
			    (
					function(d, s, id){
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) {return;}
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/en_US/sdk.js";
						fjs.parentNode.insertBefore(js, fjs);
	       		}(document, 'script', 'facebook-jssdk'));
				FB.login(function(response) {
  					if (response.status === 'connected') {
						// Logged into your app and Facebook.
				  	} else if (response.status === 'not_authorized') {
						// The person is logged into Facebook, but not your app.
				  	} else {
					// The person is not logged into Facebook, so we're not sure if
					// they are logged into this app or not.
				  	},{
					scope: 'publish_actions',
					return_scopes: true
				});
				
					
    		</script>
            
            <div class="btn-fb-login">
                <div class="title" scope="public_profile,email" onclick="FB.login()">
                	Continue With Facebook
                </div>
			</div>
			
			<script type="text/javascript">
                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/client:plusone.js?onload=render';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
				function render() {
    				gapi.signin.render('btn-g-login', {
      					'callback': 'signinCallback',
    					'clientid': '141591073286-ftj490gpbmrkjsh6dftbqnk397eumi40.apps.googleusercontent.com',
      					'cookiepolicy': 'single_host_origin',
      					'requestvisibleactions': 'http://schema.org/AddAction',
      					'scope': 'https://www.googleapis.com/auth/plus.login'
    				});
  				}
            </script>
            <div id="gSignInWrapper">
                <div id="btn-g-login" class="customGPlusSignIn">
                    <span class="icon"></span>
                    <span class="buttonText title">Continue with Google+</span>
                </div>
			</div>
            </span>
		</div>
		<script type="text/javascript">
			$("#modal_trigger").leanModal({top : 150, overlay : 0.7, closeButton: ".modal_close" });
			$(function(){
			// Calling Register Form
				$("#register_form").click(function(){
					$(".social_login").hide();
					$(".user_register").show();
					$(".header_title").text('Register for W.A.F');
					return false;
				});
			// Going back to Social Forms
				$(".back_btn").click(function(){
					$(".user_register").hide();
					$(".social_login").show();
					$(".header_title").text('Login to W.A.F');
					return false;
				});
			})
		</script>
    </section>
    </div>
    
   	<!--=============================================Landing page============================================= -->
    <div class="content">
    	<!--=============================================Pane - 1 ============================================= -->
  		<div class="panel1">
        	<div class="content1">
            	CREATE
            </div>  
        </div>
        <script type="text/javascript">
			$('.content1').mouseover(function() {
  				$('.content1').html("Create your professional profile online and be seen by the top Professionals from around the world");
			});
			$('.content1').mouseleave(function() {
				$('.content1').html("CREATE");
			});
        </script>
        <!--=============================================Pane - 2 ============================================= -->    
        <div class="panel1">
        	<div class="content2">
            	CONVERSE
            </div>
        </div>
        <script type="text/javascript">
			$('.content2').mouseover(function() {
  				$('.content2').html("Jobs in the conversation on WAF. Find and follow your friends and companies and be updated about the latest news");
			});
			$('.content2').mouseleave(function() {
				$('.content2').html("CONVERSE");
			});
        </script>
		<!--=============================================Pane - 3 ============================================= -->        
        <div class="panel1">
	        <div class="content3">
    			CONNECT
            </div>
        </div>
        <script type="text/javascript">
			$('.content3').mouseover(function() {
  				$('.content3').html("Find your former colleagues, stay in touch or make new connections in companies and grow professionally");
			});
			$('.content3').mouseleave(function() {
				$('.content3').html("CONNECT");
			});
        </script>
        <!--=============================================Pane - 4 ============================================= -->
        <div class="panel2">
	    	<div class="content4">
    			GROW
           	</div>
       	</div>
       	<script type="text/javascript">
			$('.content4').mouseover(function() {
  				$('.content4').html("Search and apply for the most lucrative jobs in the industry using your WAF profile and grow professionally");
			});
			$('.content4').mouseleave(function() {
				$('.content4').html("GROW");
			});
       	</script>
       	<!--=============================================Pane - 5 ============================================= -->
        <div class="panel2">
        	<div class="content5">
            	BUY / SELL
            </div>
        </div>
        <script type="text/javascript">
			$('.content5').mouseover(function() {
  				$('.content5').html("Use our Marketplace to sell your products & services, gain high profits and international exposure");
			});
			$('.content5').mouseleave(function() {
				$('.content5').html("BUY / SELL");
			});
        </script>
        <!--=============================================Pane - 6 ============================================= -->
        <div class="panel2"> 
            <div class="content6">
                SPEAK OUT
            </div>
        </div>
        <script type="text/javascript">
			$('.content6').mouseover(function() {
  				$('.content6').html("Write your own blog posts on your profile and be recognised in as expert in the highly competitive auto industry");
			});
			$('.content6').mouseleave(function() {
				$('.content6').html("SPEAK OUT");
			});
        </script>
        <!--=============================================Pane - 7 ============================================= -->
        <div class="panel3">
        	<div class="content7">
            	BE UPDATED
            </div>
        </div>  
        <script type="text/javascript">
			$('.content7').mouseover(function() {
  				$('.content7').html("Stay updated with WAF news of the auto industry. Led by the Captain of the industry, be a winner among your peers");
			});
			$('.content7').mouseleave(function() {
				$('.content7').html("BE UPDATED");
			});
        </script>
    	<!--=============================================Pane - 8 ============================================= -->
        <div class="panel3">
	        <div class="content8">
    			GAIN INSIGHT
            </div>
        </div>
        <script type="text/javascript">
			$('.content8').mouseover(function() {
  				$('.content8').html("Access WAF Whitepapers and gain new insights about almost any topic related to the auto industry");
			});
			$('.content8').mouseleave(function() {
				$('.content8').html("GAIN INSIGHT");
			});
        </script>
    	<!--=============================================Pane - 9 ============================================= -->
        <div class="panel3">
        	<div class="content9">
            	MAKE A DIFFERENCE
    		</div>
    	</div>
        <script type="text/javascript">
			$('.content9').mouseover(function() {
  				$('.content9').html("Be a part of the largest group of Auto professionals, show your expertise and make a difference to your life");
			});
			$('.content9').mouseleave(function() {
				$('.content9').html("MAKE A DIFFERENCE");
			});
        </script>
	</div>
	<!--=============================================Logo Scroller Content============================================= -->
    <div class="content10">
       	<div class="details10">
           	<h2>People from these companies are here. Are you?</h2>
        </div>
                
                <!--  INSERT SCROLLER HERE-->
                <!-- Jssor Slider Begin -->
    <!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->

        
        <div id="slider1_container" style="position: relative; top: 0px; margin-bottom:50px;  left: 150px; width: 1100px; height: 100px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px; width:120px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute;  top: 0px; width: 1140px; height: 100px; overflow: hidden;">
        	<div><img u="image" alt="amazon" src="image/company logos/1.png" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/2.png" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/3.jpg" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/4.png" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/5.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/6.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/7.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/8.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/9.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/10.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/11.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/12.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/13.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/14.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/15.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/16.jpg" /></div>
            <!---- mahindra logo, adjust if found good one<div><img u="image" alt="amazon" src="image/company logos/17.jpg" /></div>---->

            <div><img u="image" alt="amazon" src="image/company logos/19.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/20.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/21.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/22.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/23.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/24.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/25.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/26.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/27.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/28.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/29.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/30.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/31.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/32.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/33.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/34.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/35.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/36.jpg" /></div>
            <div><img u="image" alt="amazon" src="image/company logos/37.jpg" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/38.jpg" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/39.jpg" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/40.jpg" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/41.jpg" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/42.jpg" style="width:130px"/></div>
            <div><img u="image" alt="amazon" src="image/company logos/43.jpg" style="width:130px"/></div>
            
            
        </div>
        		
            	<!----
                <li><img class="image" alt="audi" src="image/logo/New folder/logos/Audi_logo.jpg" /></li>
                <li><img class="image" alt="goodyear" src="image/logo/New folder/logos/545px-Goodyear_logo.svg.png" /></li>
                <li><img class="image" alt="siemens" src="image/logo/New folder/logos/181806_316_siemens.jpg" /></li>
                <li><img class="image" alt="amtek" src="image/logo/New folder/logos/amtek_logo.png" /></li>
                <li><img class="image" alt="bosch" src="image/logo/New folder/logos/bosch_logo.jpg" /></li>
                <li><img class="image" alt="bajaj" src="image/logo/New folder/logos/bajaj_logo.jpg" /></li>
                <li><img class="image" alt="bmw bikes logo" src="image/logo/New folder/logos/bmw bikes_logo.JPG" /></li>
                <li><img class="image" alt="fiat" src="image/logo/New folder/logos/fiat_logo.jpg" /></li>
                <li><img class="image" alt="ford" src="image/logo/New folder/logos/ford_logo.jpg" /></li>
                <li><img class="image" alt="fuso" src="image/logo/New folder/logos/fuso_logo.JPG" /></li>
                <li><img class="image" alt="gm" src="image/logo/New folder/logos/gm_logo.jpg" /></li>
                <li><img class="image" alt="castrol" src="image/logo/New folder/logos/Castrol_Logo.jpg" /></li>
                <li><img class="image" alt="caparo" src="image/logo/New folder/logos/caparo.jpg" /></li>
                <li><img class="image" alt="harley davidson" src="image/logo/New folder/logos/Harley-Davidson-Logo-300x225.jpg" /></li>
                <li><img class="image" alt="visteon" src="image/logo/New folder/logos/visteon_logo.jpg" /></li>
                <li><img class="image" alt="tvs" src="image/logo/New folder/logos/tvs.jpg" /></li>
                <li><img class="image" alt="bmw logo" src="image/logo/New folder/logos/bmw_logo.jpg" /></li>
                <li><img class="image" alt="maruti suzuki" src="image/logo/New folder/logos/Maruti-Suzuki-new-logo.jpg" /></li>
                <li><img class="image" alt="hero" src="image/logo/New folder/logos/hero_logo.jpg" /></li>
                <li><img class="image" alt="hyundai" src="image/logo/New folder/logos/hyundai_logo.jpg" /></li>
                <li><img class="image" alt="isuzu" src="image/logo/New folder/logos/Isuzu-Logo.jpg" /></li>
                <li><img class="image" alt="mazda" src="image/logo/New folder/logos/mazda_logo.jpg" /></li>
                <li><img class="image" alt="mercedes" src="image/logo/New folder/logos/merc_logo.jpg" /></li>
                <li><img class="image" alt="mitsubushi" src="image/logo/New folder/logos/mitsubishi_logo.jpg" /></li>
                <li><img class="image" alt="nissan" src="image/logo/New folder/logos/nissan_Logo.jpg" /></li>
                <li><img class="image" alt="renault" src="image/logo/New folder/logos/renault_logo.jpg" /></li>
                <li><img class="image" alt="suzuki" src="image/logo/New folder/logos/suzuki_logo.jpg" /></li>
                <li><img class="image" alt="tata" src="image/logo/New folder/logos/tata_logo.jpg" /></li>
               	<li><img class="image" alt="toyota" src="image/logo/New folder/logos/Toyota_logo.jpg" /></li>
                <li><img class="image" alt="volvo" src="image/logo/New folder/logos/volvo cars_logo.jpg" /></li>
				<li><img class="image" alt="volkswagen" src="image/logo/New folder/logos/VW_logo.jpg" /></li>
                <li><img class="image" alt="yamaha" src="image/logo/New folder/logos/yamaha_logo.jpg" /></li>
        </div>--->
        <a style="display: none" href="http://www.jssor.com">html slider</a>
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>
    </div>
    
    

    <!--=============================================Pane - 10 ============================================= -->
 <!--   <div class="content10">
    	<div id="port">
        	<!-- List must be spaceless becuse <li>s are display: inline, and any spaces between them show in IE ->
	        <ul class="thumbs_index index parallax-layer">
                <li><img class="image" alt="audi" src="image/logo/New folder/logos/Audi_logo.jpg" /></li>
                <li><img class="image" alt="goodyear" src="image/logo/New folder/logos/545px-Goodyear_logo.svg.png" /></li>
                <li><img class="image" alt="siemens" src="image/logo/New folder/logos/181806_316_siemens.jpg" /></li>
                <li><img class="image" alt="amtek" src="image/logo/New folder/logos/amtek_logo.png" /></li>
                <li><img class="image" alt="bosch" src="image/logo/New folder/logos/bosch_logo.jpg" /></li>
                <li><img class="image" alt="bajaj" src="image/logo/New folder/logos/bajaj_logo.jpg" /></li>
                <li><img class="image" alt="bmw bikes logo" src="image/logo/New folder/logos/bmw bikes_logo.JPG" /></li>
                <li><img class="image" alt="fiat" src="image/logo/New folder/logos/fiat_logo.jpg" /></li>
                <li><img class="image" alt="ford" src="image/logo/New folder/logos/ford_logo.jpg" /></li>
                <li><img class="image" alt="fuso" src="image/logo/New folder/logos/fuso_logo.JPG" /></li>
                <li><img class="image" alt="gm" src="image/logo/New folder/logos/gm_logo.jpg" /></li>
                <li><img class="image" alt="castrol" src="image/logo/New folder/logos/Castrol_Logo.jpg" /></li>
                <li><img class="image" alt="caparo" src="image/logo/New folder/logos/caparo.jpg" /></li>
                <li><img class="image" alt="harley davidson" src="image/logo/New folder/logos/Harley-Davidson-Logo-300x225.jpg" /></li>
                <li><img class="image" alt="visteon" src="image/logo/New folder/logos/visteon_logo.jpg" /></li>
                <li><img class="image" alt="tvs" src="image/logo/New folder/logos/tvs.jpg" /></li>
                <li><img class="image" alt="bmw logo" src="image/logo/New folder/logos/bmw_logo.jpg" /></li>
                <li><img class="image" alt="maruti suzuki" src="image/logo/New folder/logos/Maruti-Suzuki-new-logo.jpg" /></li>
                <li><img class="image" alt="hero" src="image/logo/New folder/logos/hero_logo.jpg" /></li>
                <li><img class="image" alt="hyundai" src="image/logo/New folder/logos/hyundai_logo.jpg" /></li>
                <li><img class="image" alt="isuzu" src="image/logo/New folder/logos/Isuzu-Logo.jpg" /></li>
                <li><img class="image" alt="mazda" src="image/logo/New folder/logos/mazda_logo.jpg" /></li>
                <li><img class="image" alt="mercedes" src="image/logo/New folder/logos/merc_logo.jpg" /></li>
                <li><img class="image" alt="mitsubushi" src="image/logo/New folder/logos/mitsubishi_logo.jpg" /></li>
                <li><img class="image" alt="nissan" src="image/logo/New folder/logos/nissan_Logo.jpg" /></li>
                <li><img class="image" alt="renault" src="image/logo/New folder/logos/renault_logo.jpg" /></li>
                <li><img class="image" alt="suzuki" src="image/logo/New folder/logos/suzuki_logo.jpg" /></li>
                <li><img class="image" alt="tata" src="image/logo/New folder/logos/tata_logo.jpg" /></li>
               	<li><img class="image" alt="toyota" src="image/logo/New folder/logos/Toyota_logo.jpg" /></li>
                <li><img class="image" alt="volvo" src="image/logo/New folder/logos/volvo cars_logo.jpg" /></li>
				<li><img class="image" alt="volkswagen" src="image/logo/New folder/logos/VW_logo.jpg" /></li>
                <li><img class="image" alt="yamaha" src="image/logo/New folder/logos/yamaha_logo.jpg" /></li>
	      	</ul>
	    </div>
    	<div class="image1">    </div>
    </div>
	<script type="text/javascript">
		jQuery(document).ready(function(){
		// Declare parallax on layers
			jQuery('.parallax-layer').parallax({
				mouseport: jQuery("#port"),
				yparallax: false
			});
		});
    </script>-->

    
    
    
	<!--=============================================Footer============================================= -->
    

    <div class="footer">
    	<div class="cmp_logo">
        </div>
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
            </tr>
            <tr>
            	<td colspan="5">
                    <div class="copyright">
                        <p>(c) 2014 World Auto Forum inc, all rights reserved</p>
                    </div>
                </td>
            </tr>
        </table>
        
      </div>
    </div><!-- /.container -->

  </body>
</html>
