<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

		<!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/profile.css">
   			<link rel="stylesheet" type="text/css" href="css/search.css" />
			<link rel="stylesheet" type="text/css" href="css/index.css" />
			<link rel="stylesheet" type="text/css" href="css/footer.css" />

        <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/profile.css">
            <link rel="stylesheet" type="text/css" href="css/search.css" />
            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script src="js/modernizr.custom.js"></script>
            <script src="js/classie.js"></script>
            <script src="js/uisearch.js"></script>
            <script src="js/add-del-rows.js"></script>

<?php $url = 'image/bg2.jpg';?>
<!-----Background Image---->
<style type="text/css">
#back1
{
	position:fixed;
	width:100%;
	height:100%;
    background-image:url('<?php echo $url ?>');
	background-repeat: no-repeat;
	background-position:top;
}
</style>
<!-----Background Image---->

<!-----tag canvas---->
<script src="js/tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{ 
		  	shape: "sphere",
            textColour: '#ff0000',
            outlineColour: '#ff00ff',
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.05
          });
        } catch(e) {
          // something went wrong, hide the canvas container
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
    </script>
<!-----tag canvas----> 


           
</head>


<body data-spy="scroll" data-target=".navbar navbar-inverse">
<div id="back1">
</div>



<?php
	 include('includes/connection.php');
	 include('includes/variables.php');
	 $url = "image/bg2.jpg";
?>

<?php
	if(isset($_POST['saveprofile']))
	{
		echo $mail;
		$sql = mysql_query("select count(*) from profile where email = '$mail'") or die(mysql_error);
		$data = mysql_fetch_assoc($sql);
		$res = $data['count(*)'];
		echo $res;
		if($res == '1')
		{			
				$result = mysql_query("update register,profile set register.name =  '$pname', profile.dob = '$dob', profile.country = '$country', profile.mobile = '$mobile' where register.email = '$mail' and profile.email = '$mail'") or die(mysql_error);
				echo $result;
			
			/*if($result)
				echo "<script>window.location = 'profile_view.php';</script>";
				echo "try";
			else
				echo "no update";*/
		}
		else
		if($res == '0')
		{	$result = mysql_query("insert into profile(email, dob, country, gender, mobile) values ('$mail', '$dob', '$country', '$gender', '$mobile')") or die(mysql_error);
			if($result)
				echo "<script>windows.location = 'profile_view.php';</script>";
			else
				echo "try again";
		}
		else
			echo "<script> alert('try again');</script>";
	}
	
?>
	<!--=============================================Navigation============================================= -->
    <div class="navbar-wrapper">
    	<div class="container">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		        <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> </button>
                	<a class="navbar-brand" href="#">World Auto Forum</a>
                </div>
                <div class="navbar-collapse collapse">
    	        	<ul class="nav navbar-nav">
        	        	<li class="active"><a href="#">Home</a></li>
            	        <li><a href="#about">Sign In</a></li>
                	    <li><a href="#contact">Contact</a></li>
                    	<li class="Dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile </a>
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
    
    
          <div class="panel panel-default" id="friends" >
                                  <div class="panel-heading">Connections</div>                                  		
                                          <div class="panel-body" id="pic">
                                           <div id="myCanvasContainer" >
                                                 <canvas width="150" height="300" id="myCanvas" style="left:20em">
                                                 </canvas>
                                                </div>
                                                 
                                                <div id="tags">
                                                 <ul>
                                                  <li><a href="http://www.google.com" target="_blank">Google</a></li>
                                                  <li><a href="/fish">Fish</a></li>
                                                  <li><a href="/chips">Chips</a></li>
                                                  <li><a href="/salt">Salt</a></li>
                                                  <li><a href="/vinegar">Vinegar</a></li>
                                                 </ul>
                                                </div>
                                          <div class="btn-group" id="button3">
                                  <button type="button" class="btn btn-primary">View All</button>
                            			</div>
                                  </div>
                        	</div>
                        	
                             
	<!--============================================= ContentPane - 1 ============================================= --> 
		<div class="contentpane12">
            <div class="contentpane1"> 
                <!--=============================================Personal-Details============================================= --> 
                <div class="panel panel-default" id="personal">
                    <div class="panel-heading">About</div>
                    <div class="panel-body">
					<div id="pic1">
                    
                    </div>
                    <div>
                        <table width="70%">
                            <tr> 
                                <td><div class="label">Name</div></td>
                                <td><input type="text" name="pname" value="" style="width:100%"/></td>
                            </tr>
                            <tr> 
                                <td><div class="label">Date of Birth</div></td>
                                <td><input type="date" name="dob" value="" style="width:100%"/></td>
                            </tr>
                            <tr> 
                                <td><div class="label">Country</div></td>
                                <td>             	
                                    <?php
                                        $sql = 'select name from countries';
                                        $result = mysql_query($sql);
                                        echo "<select name = 'country' style="."'width:100%'".">";
                                        while ($row = mysql_fetch_array($result))
                                        {
                                            echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                        }
                                        echo "</select>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="label">Gender</div></td>
                                <td>
                                    <select name="gender" style="width:100%">
                                        <option value="select">--SELECT--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="label">Mobile Number</div></td>
                                <td><input type="text" name="m_no" style="width:100%"/></td>
                            </tr>
                             <tr> 
                                <td><div class="label">Job status</div></td>
                                <td><input type="text" name="job_status" style="width:100%"/></td>                   
                            </tr>
                            <tr> 
                                <td><div class="label">Email-Id</div></td>
                                <td><input type="email" name="email-id" style="width:100%"/></td>
                            </tr>
                        </table>
                    </div>
                </div>
           </div>
        </div>
	<!--============================================= ContentPane - 2 ============================================= --> 
		<div class="contentpane2">
            <div class="panel panel-default" id="education">
	            <div class="panel-heading">Education and Current Affairs </div>
            	<div class="panel-body" id="profile_box">
                	<table width="100%">
                    	<tr>
                        	<td>
                                <input type="button"  value="Add More Degrees" onclick="addrow('ED_table')" style="margin-bottom:2em;"/>
                                <input type="button" value="Delete Row" onclick="delrow('ED_table')" style="margin-bottom:2em;"/>
                            </td>
                            <td></td>
                            <td></td>
                		</tr> 
						<tr>   
                        	<td width="30%"><div class="label">Degree</div></td>
                            <td width="30%"><div class="label">Specialization</div></td>
                            <td width="40%"><div class="label">Board/University</div></td>
                        </tr>
                        <tr>
                            <table id="ED_table" width="100%">
                                <tr>
                                    <td width="30%"><input class="input-group-lg" type="text" name="c_degree[]" style="width:90%"/></td>
                                    <td width="30%"><input class="input-group-lg" type="text" name="c_specialization[]" style="width:90%" /></td>
                                    <td width="40%"><input class="input-group-lg" type="text" name="c_university[]" style="width:90%" /></td>
                                </tr>
                            </table>
                        </tr>
                     </table>
                     <table>
                        <tr>
                        	<td>
    	              			<input type="button"  value="Add More experience" onclick="addrow('EQ_table')" style="margin-top:1em;margin-bottom:2em;"/>
	    		            	<input type="button" value="Delete Row" onclick="delrow('EQ_table')" style="margin-top:1em;margin-bottom:2em;"/>
                            </td>
                            <td></td>
                            <td></td>
                		</tr>
                        <tr>
                            <td width="30%"><div class="label">Company</div></td>
                            <td width="30%"><div class="label">Tenure</div></td>
                            <td width="27%"><div class="label">Location</div></td>
                        </tr> 
                        <tr>
                        	<table id="EQ_table" width="100%">   	
                                <tr>
                               		<td width="30%"><input class="input-group-lg" type="text" name="c_company[]" style="width:90%"/></td>
                                    <td width="30%"><input class="input-group-lg" type="text" name="c_tenure[]" style="width:90%"/></td>
                                    <td width="40%"><input class="input-group-lg" type="text" name="c_location[]" style="width:90%"/></td>
                            </table>
                        </tr>                       
              </table>
                </div>
            </div>
        </div>
   	

	<!--============================================= ContentPane - 4 ============================================= --> 
        <div class="contentpane4">
            <div class="panel panel-default" id="profile">
           		<div class="panel-heading">Experience </div>
	            <div class="panel-body" id="profile_box">
                    <table>
                    	<?php //while loop here ?>
                        <tr> 
                            <td><div class="label"><?php echo "Manager";?></div></td>
                        </tr>
                        <tr> 
                            <td><div class="label"><?php echo " Zoomjax Pvt Ltd.";?></div></td>                            
                            <td><div class="label"><?php echo "(2010 - 2013)";?></div></td>
                        </tr>
                        <tr> 
                            <td colspan="2" style="padding-left:1.8em"><div class="" style="text-align:justify"><?php echo "Zoomjax is the fastest platform for generating targeted ad impressions. At Zoomjax, I am responsible for building products that are thoughtfully designed, scalable, and easy to use for media buyers and affiliate network managers. I manage a 20-person product team of software engineers and web developers who work hard to make sure your ads consistently find your target demographic with quicksilver efficiency. If you're an engineer looking for a challenge, drop us a line. We'd love to hear from you! ";?></div></td>                            
                        </tr>
                        <?php //while loop close here ?>
		        	</table>
				</div>                 
			</div>
		</div>
    <!--============================================= ContentPane - 5 ============================================= --> 
    <!--<div class="btn-group" id="button4" >  
      <button type="button" class="btn btn-primary">View as friend</button>
      <button type="button" class="btn btn-primary">View as from public</button>
      <button type="button" class="btn btn-primary">Edit</button>
    </div>-->

<!------ MAIN CONTENT BAR ------> 

<script type="text/javascript">
												 $(document).ready(function() {
												   if( ! $('#myCanvas').tagcanvas({
													 textColour : '#ffffff',
													 outlineThickness : 1,
													 maxSpeed : 0.03,
													 depth : 0.75
												   })) {
													 // TagCanvas failed to load
													 $('#myCanvasContainer').hide();
												   }
												   // your other jQuery stuff here...
												 });
												 </script>

<!-------
	<!------first panel
    <div class="panel panel-default" id="profile1">
      	<div class="panel-heading">Personal Details</div>
      	<div class="panel-body" id="profile_box">
            
                <div class="btn-group" id="button2"> 
                  <!-- buttons for general profile
                  <form name="profile" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <button type="button" class="btn btn-primary">Edit</button>
                    <input type="submit" class="btn btn-primary" value="Save Changes" name="saveprofile"/>
                  </form>
                </div>
           </div>
        </div>
--->
            
             
	          <div class="panel panel-default" id="personal" >
                          <div class="panel-heading" >Work Experience </div>
                          <div class="panel-body" id="profile_box">
                            <table>
                              <tr>
                                <td id="label">What did you study? : </td>
                                <td><input type="text" name="degree" value="" /></td>
                              </tr>
                              <tr>
                                <td id="label">Where did you study? : </td>
                                <td><input type="text" name="location" value="" /></td>
                              </tr>
                              <tr>
                                <td id="label">Company : </td>
                                <td><input type="text" name="name" value="" /></td>
                              </tr>
                              <tr>
                                <td id="label">Location : </td>
                                <td><input type="text" name="name" value="" /></td>
                              </tr>
                              <tr>
                                <td id="label">Contact Number(Office) : </td>
                                <td><input type="text" name="name" value="" /></td>
                              </tr>
                              <tr>
                                <td id="label">Contact Email-id: </td>
                                <td><input type="text" name="name" value="" /></td>
                              </tr>
                            </table>
                            <div class="btn-group" id="button2">
                              <button type="button" class="btn btn-primary">Edit</button>
                              <button type="button" class="btn btn-primary">Save Changes</button>
                        </div>
                     </div>
                    </div>
                    </div>
                    </div>
</div>
   <div class="panel panel-default" id="friends">
                                          <div class="panel-heading">Discussion Forums</div>
                                          
                                          <div class="panel-body" id="pic">
                                          			
                                          <div class="btn-group" id="button3">
                                          <button type="button" class="btn btn-primary">View All</button>
                                          
                                           </div>
                                            
                                        </div>
                                </div>
                                
                                
                      
</div>


	
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
