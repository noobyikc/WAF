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
            
            <?php
		   include('includes/variables.php');
		   include('includes/connection.php');
		   ?>
          <?php
		  if(isset($_POST['registerbtn']))
		  {
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
		} ?>
		  <?php
		  if(isset($_POST['loginbtn']))
		  {
			  $flag = 0;
			  $ldetail = mysql_query("SELECT * from register WHERE email = '$email' and password = '$password';") or die(mysql_error());
			 while($rows = mysql_fetch_array($ldetail)){
			echo "<script> alert(".$rows['username'].");</script>";
			$_SESSION['username'] = $rows['username'];
			$_SESSION['userid'] = $rows['U_id'];
			$flag=1;
	}
	if($flag==1)
		echo "<script>window.location = 'profile.php';</script>";
	else
		
		echo "<script>window.location = 'index.php';</script>";
			
			
			}
		  ?>
		   
          

	</head>

  	<body data-spy="scroll" data-target=".navbar navbar-inverse">
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
										<span class="sb-icon-search"></span>
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
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

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
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><input class="btn btn_red" type="submit" value="Login" name="loginbtn"/></div>
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
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"> <input name="registerbtn" class="btn btn_red" type="submit" value="Register" /></div>
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
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active" id="carousel_image1">
          
          <div class="container">
            <div class="carousel-caption">
                          </div>
          </div>
        </div>
        <div class="item" id="carousel_image2" >
          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide">
          <div class="container">
            <div class="carousel-caption">
                          </div>
          </div>
        </div>
        <div class="item" id="carousel_image3">
          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    



  


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
