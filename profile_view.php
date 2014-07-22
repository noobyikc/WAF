<!--------Background image------->
<?php

$url = "image/bg2.jpg";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Profile Page</title>
		<!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/profile_view.css">
   			<link rel="stylesheet" type="text/css" href="css/search.css" />
			<link rel="stylesheet" type="text/css" href="css/index.css" />
            <link rel="stylesheet" type="text/css" href="css/footer.css"  />

            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
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
				z-index:-1;
            }
            </style>
            
	</head>
    <body data-spy="scroll" data-target=".navbar navbar-inverse" >
    
    <div id="back1">
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
                            <li class="active"><a href="#"><img src="image/icons/home.png" style="max-height:1.6em;"/></a></li>
                            <li><a href="#message><img src="image/icons/note2.png" style="max-height:1.6em;"/></a></li>
                            <li><a href="#notification"><img src="image/icons/notifications2.jpg" style="max-height:1.6em;"/></a></li>                            <li class="Dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
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
    <!--=============================================  ============================================= -->     
	<!--============================================= ContentPane - 3 ============================================= --> 
        <div class="contentpane3">
            <div class="panel panel-default" id="friends">
                <div class="panel-heading">Connections</div>
                <div class="panel-body">
                	<table>
                    	<tr>
                        	<td style="height:3em;"><div class="label"><?php echo "Friend1" ;?></div></td>
                            <td><div class="friend-pic"></div></td>
                        </tr>
                        <tr>
                        	<td><div class="friend-pic"></div></td>
                        	<td style="height:4em;"><div class="label"><?php echo "Friend2" ;?></div></td>                            
                        </tr>
                        <tr>
                        	<td style="height:4em;"><div class="label"><?php echo "Friend3" ;?></div></td>                        
                        	<td><div class="friend-pic"></div></td>
                        </tr>
                        <tr>
                        	<td ><div class="friend-pic"></div></td>
                        	<td style="height:4em;"><div class="label"><?php echo "Friend4" ;?></div></td>                            
                        </tr>
                        <tr>
                        	<td style="height:4em;"><div class="label">And many more ...</div></td>
                            <td></td>
                        </tr>
                    </table>
					<div class="btn-success" id="button1">View All</div>                          
                <!--<div class="btn-group" id="button3">
                <button type="button" class="btn btn-primary">View All</button>
                </div>-->
                
                </div>
            </div>
        </div>
    <!--============================================= ContentPane - 1 ============================================= --> 
		<div class="contentpane12">
            <div class="contentpane1">
                <!--=============================================Profile-Pic============================================= --> 
                <div class="panel panel-default" id="pic_sign">
                    <div id="pic">
                        <a class="thumbnail"><img src="image/unnamed.png" />
                        </a>
                    </div>
                </div> 
                <!--=============================================Personal-Details============================================= --> 
                <div class="panel panel-default" id="personal">
                    <div class="panel-heading">
                        <div id="name"><?php echo "Inshu Kumar Chugh";?></div>
                        <div id="post"><?php echo "Director Sales Department at Bosch";?></div>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <td><div class="label">Born on</div></td>
                                <td><div class="label-ans"><?php echo "13th, July, 1993";?> </div></td>
                            </tr>
                            <tr>
                                <td><div class="label">Gender</div></td>
                                <td><div class="label-ans"><?php echo " Male"; ?></div></td>
                            </tr>
                            <tr>
                                <td><div class="label">Nationality</div></td>
                                <td><div class="label-ans"><?php echo "India"; ?></div></td>
                            </tr>
                            <tr>
                                <td><div class="label">Contact Info</div></td>
                                <td><div class="label-ans"><?php echo "9999-999-999"; ?></div></td>
                            </tr>
                        </table>
                    </div>
                </div>
           </div>
		<!--============================================= ContentPane - 2 ============================================= --> 
	    	<div class="contentpane2">
                <div class="panel panel-default" id="discussions">
                <div class="panel-heading">
                	Discussions
                </div>
                <div class="number">
                </div>
                <div class="panel-heading">
                	Comments
                </div>
                <div class="number">
                </div>
            </div>
                

            <div class="panel panel-default" id="education">
	            <div class="panel-heading">Education and Current Affairs </div>
            	<div class="panel-body" id="profile_box">
                    <table>
                        <tr> 
                            <td><div class="label">Degree </div></td>
                            <td><div class="label-ans"><?php echo "B-tech Graduate, Batch of 2011-15";?> </div></td>                       
                        </tr>
                        <tr> 
                            <td></td>
                            <td><div class="label-ans"><?php echo "IIITD, Delhi ";?> </div></td>
                        </tr>
                        <tr> 
                            <td><div class="label">Job status</div></td>
                            <td><div class="label-ans"><?php echo "Employed";?></div></td>                   
                        </tr>
                        <tr> 
                            <td><div class="label">Email-Id</div></td>
                            <td><div class="label-ans"><?php echo "inshu@bosch.com";?></div></td>
                        </tr>
                    </table>
                </div>
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
                            <td colspan="2" style="padding-left:1.8em"><div class="" style="text-align:justify"><?php echo "Zoomjax is the fastest platform for generating targeted ad impressions. At Zoomjax, Iâm responsible for building products that are thoughtfully designed, scalable, and easy to use for media buyers and affiliate network managers. I manage a 20-person product team of software engineers and web developers who work hard to make sure your ads consistently find your target demographic with quicksilver efficiency. If you're an engineer looking for a challenge, drop us a line. We'd love to hear from you! ";?></div></td>                            
                        </tr>
                        <?php //while loop close here ?>
		        	</table>
				</div>                 
			</div>
		</div>
    <!--============================================= ContentPane - 5 ============================================= --> 
        <div class="contentpane5">
             <div class="panel panel-default" id="activity">
             	<div class="panel-heading">Recent Activity</div>
                <div class="panel-body">
                
                </div>
             </div>
        </div>
    
    
   
    
    
    
    

                        	
                                

    
    <!--<div class="btn-group" id="button4" >  
      <button type="button" class="btn btn-primary">View as friend</button>
      <button type="button" class="btn btn-primary">View as from public</button>
      <button type="button" class="btn btn-primary">Edit</button>
    </div>-->


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
 
</body>
</html>	