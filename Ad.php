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
        
            <title>Advertise on WAF</title>
        
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/carousel.css" />
            <link rel="stylesheet" type="text/css" href="css/ad.css" />
			<link rel="stylesheet" type="text/css" href="css/search.css" />
            <link rel="stylesheet" type="text/css" href="css/footer.css" />
  			<link rel="stylesheet" type="text/css" href="css/market.css" />
	        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">


            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script src="js/modernizr.custom.js"></script>
         	<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>


			<link rel="stylesheet" type="text/css" href="css/sell.css" />
			
	</head>
<?php
	 require('includes/connection.php');
		require('check_login.php');
	    require('includes/variables.php');
	 $url = "image/bg2.jpg";
?>
<?php
if(isset($_POST['post_ad']))
{
	$emailid = $_SESSION['sessemail'];
	$sqltry = mysql_query("Insert into ads (title, description, contact_name, contact_email, contact_phone, contact_country, audience_country, audience_age, payment_country, currency, timezone, budget, email) values ('$title', '$describe','$contact_name','$contact_email', '$contact_phone', '$contact_country', '$audience_country', '$audience_age', '$payment_country', '$currency', '$timezone', '$budget', '$emailid');") or die(mysql_error());
	if($sqltry)
	{
		echo "<script>alert('Ad successfully submitted.');</script>";
	}
			else
				echo "<script>alert('Try again.');</script>";
}
?>

  	<body data-spy="scroll" data-target=".navbar navbar-inverse" >
    <!--============================================Scroll Up========================================== -->
		<script>
			jQuery(document).ready(function() {
				var offset = 230;
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
    <!--=============================================Navigation============================================= --> 
    	<div class="navbar-wrapper">
        	<div class="container">
            	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
    <!--=============================================ContentPane============================================= --> 
	<div class="contentpane">
    	<div class="heading1">
            <h1>Advertising on WAF</h1>
        </div>
        <div class="heading1">
           	<h3>Posting Ads on WAF is simple.</h3>
        </div>
    	<div class="forms">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" name="ad_post">
        		<table id="forms1" >
                    <tr>
                        <td colspan="2"><div class="Head">Basic Details</div></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div class="Desc">Please fill all the texts in the fields.</div></td>
                    </tr>
                    <tr>
						<td><div class="Field">Ad Title :</div></td>
                    	<td><div class="Value"><input type="text" placeholder="Title" style="width:80%" name="title"/></div></td>
                     </tr>
                     <tr>
                     	<td><div class="Field">Description :</div></td>
                        <td><textarea name="describe" style="width:80%"></textarea></td>
                     </tr>
                     <tr>
                     	<td colspan="2"><div class="Head">Seller Information</div></td>
                     </tr>
                     <tr>
                     	<td><div class="Field">Contact Name</div></td> 
                        <td><div class="Value"><input type="text"  placeholder="Full Name" style="width:80%" name="contact_name"/></div></td>
                     </tr>
                     <tr>
                     	<td><div class="Field">Email ID :</div></td>
                        <td><div class="Value"><input type="text" name="contact_email" placeholder="Valid Email Address" style="width:80%"/></div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Phone No :</div></td>
                        <td><div class="Value"><input type="text" input name="contact_phone" placeholder="Phone Number" style="width:80%"/></div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Country :</div></td>
                        <td>
                        	<div class="Value">
                        		<?php
                                        $sql = 'select name from countries';
                                        $result = mysql_query($sql);
                                        echo "<select name = 'contact_country' style="."'width:80%'".">";
                                        while ($row = mysql_fetch_array($result))
                                        {
                                            echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                        }
                                        echo "</select>";
                                    ?>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                     	<td colspan="2"><div class="Head">Audience</div></td>
                     </tr>
                    <tr>
                    	<td><div class="Field">Audience Country</div></td>
                        <td><div class="Value">
                        <?php
                                        $sql = 'select name from countries';
                                        $result = mysql_query($sql);
                                        echo "<select name = 'audience_country' style="."'width:80%'".">";
                                        while ($row = mysql_fetch_array($result))
                                        {
                                            echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                        }
                                        echo "</select>";
                        ?>
                       </div></td>
					</tr>
                    <tr>
                    	<td><div class="Field">Age Group</div></td>
                        <td><div class="Value"><input type="text" name="audience_age" placeholder="Age group, the ad caters to" style="width:80%7"></div></td>
			        </tr>
                    <tr>
                     	<td colspan="2"><div class="Head">Payment Details</div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Country :</div></td>
                        <td><div class="Value">
                         <?php
                                        $sql = 'select name from countries';
                                        $result = mysql_query($sql);
                                        echo "<select name = 'payment_country' style="."'width:80%'".">";
                                        while ($row = mysql_fetch_array($result))
                                        {
                                            echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                        }
                                        echo "</select>";
                        ?>
                        </div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Currency :</div></td>
                        <td>
                        	<div class="Value">
                				<select name="currency" style="width:80%">
                                	<option value="none" selected>Select Your Currency</option>
                                    <option value="Rupee">Rupee</option>
                                    <option value="British Pound">British Pound</option>
                                </select>
                            </div>
						</td>
                    </tr>
                    <tr>
                    <td><div class ="Field">Budget :</div></td>
                    <td>
                    <div class="Value">
                    <input type="text" size="40" name="budget" placeholder="How much you want to spend" style="width:80%"/>
                    </div>
                    </td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Time Zone :</div></td>
                        <td>
                        	<div class="Value">
                            	<select name="timezone" style="width:80%">
                                	<option value="none" selected>Select Your TimeZone</option>
                                    <option value="Rupee">Rupee</option>
                                    <option value="British Pound">British Pound</option>
								</select>
                           	</div>
                        </td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        </td>
                    </tr>
					<tr>
                    	<td></td>
                        <td><div><input type="submit" name="post_ad" value="Post Ad" class="button"/></div></td>
                    </tr>                    
                </table>
            </form>  
        </div>
        <!--=============================================Footer============================================= -->

         <div class="footer" style="margin-top:auto; top:1000px;">
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
            </table>
            <div class="copyright">
                <p>(c) 2014 World Auto Forum inc. , all rights reserved</p>
            </div>
         </div>
    </div>
</body>
</html>