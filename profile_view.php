<!--------Background image------->
<?php

$url = "image/bg2.jpg";
?>

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
            
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script src="js/modernizr.custom.js"></script>
         	<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>

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
            
</head>
<body data-spy="scroll" data-target=".navbar navbar-inverse">

<div id="back1">
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
 
 
<div class="container"> 

    

    <div class="panel panel-default" id="profile1">
      <div class="panel-heading">Personal Details</div>
      <div class="panel-body" id="profile_box">
            <table>
                <tr> 
                    <td id="label">Name : </td>
                    <td><input type="text" name="name" value="" /></td>
                    
                </tr>
                <tr> 
                    <td id="label">Date of Birth (MM/DD/YYYY) : </td>
                    <td><input type="date" name="date"/>
                    
                    </td>
                    
                </tr>
                <tr> 
                    <td id="label">Nationality : </td>
                    <td><input type="text" name="nationality" value="" /></td>
                </tr>
                
                <tr> 
                    <td id="label">Gender : </td>
                    <td >
                    <select>
                    	<option value="select">--SELECT--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    </td>
                    
                </tr>
                

                <tr> 
                    <td id="label">Mobile Number : </td>
                    <td><input type="text" name="m_no" value="" /></td>
                </tr> 
             </table>
    
      </div>
    </div>
    
    <div class="panel panel-default" id="pic_sign">
      <div class="panel-heading">Photo</div>
      <div class="panel-body" id="pic">
      <a href="#" class="thumbnail">
      <img src="Images/ramukaka5.jpg" />
      </a>
      </div>
    </div>
    
    
    <div class="panel panel-default" id="profile">
      <div class="panel-heading">Education and Current Affairs </div>
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
                 
    </div>
    </div>
    
    
    <div class="panel panel-default" id="profile">
      <div class="panel-heading">Work Experience </div>
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
	</div>                 
    </div>
    
    <div class="panel panel-default" id="friends">
                                  <div class="panel-heading">Connections</div>
                                          <div class="panel-body" id="pic">
                                          <div class="btn-group" id="button3">
                                  <button type="button" class="btn btn-primary">View All</button>
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

    
    <div class="btn-group" id="button4" >  
      <button type="button" class="btn btn-primary">View as friend</button>
      <button type="button" class="btn btn-primary">View as from public</button>
      <button type="button" class="btn btn-primary">Edit</button>
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
        	</tr>
        </table>
        <div class="copyright">
            <p>(c) 2014 World Auto Forum inc, all rights reserved</p>
        </div>
      </div>
	</div>
  
</body>
</html>	