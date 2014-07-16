<!--------Background image------->
<?php

$url = "image/bg2.jpg";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Home Page</title>
		<!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="css/profile_home.css">
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
/*                background-image:url('<?php echo $url ?>');*/
				background:#E3E2FE;
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
                            <li><a href="#about"><img src="image/icons/note2.png" style="max-height:1.6em;"/></a></li>
                            <li><a href="#contact"><img src="image/icons/notifications2.jpg" style="max-height:1.6em;"/></a></li>
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
                                <div class="btn-group" style="margin-left:4em">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                          Display Pic
                                          <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Edit Display Pic</a></li>
                                          <li><a href="#">Edit Description</a></li>
                                        </ul>
                                      </div>
                                      
                              
                    </div>
                </div> 
                <!--=============================================Personal-Details============================================= --> 
                <div class="panel panel-default" id="personal" style=" width: 48.5em;">
                    <div class="panel-heading">
                        <div id="name"><?php echo "Manmeet Singh Oberoi";?></div>
                        <div id="post"><?php echo "Director Sales Department at Padosi ke ghar";?></div>
                    </div>
                    <div class="panel-body">
                        
                    </div>
                </div>
           </div>
		<!--============================================= ContentPane - 2 ============================================= --> 
	    	<div class="contentpane2">
                <div class="panel panel-default" id="sidetab" style=" height: 22em; width:17.08em; margin-top:-0.4em;">
                    <ul class="nav nav-pills nav-stacked" style="font-size:1em;" >
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="#">Profile</a></li>
                          <li><a href="#">Messages</a></li>
                          <li><a href="#">Notifications</a></li>
                          <li><a href="#">Discussion Forums</a></li>
                          <li><a href="#">Jobs</a></li>
                          <li><a href="#">Settings</a></li>
						
                        </ul>
                </div>
                <div class="number">
                </div>
                
                
            </div>

            
        </div>
          <!--============================================= ContentPane - 6 ============================================= --> 
        <div class="contentpane6">
            <div class="panel panel-default" id="ads" style="margin-bottom:5em;">
                <div class="panel-heading">Sponsored Ads</div>
                <div class="panel-body">
                	<div class="panel panel-default" id="spons_ad">
                    		<div class="panel-heading">Sponsored Ad 1</div>
                            		<div class="panel-body">
                                    bakwas bakwas
                                    </div>
                             </div>
                             <div class="panel panel-default" id="spons_ad">
                    		<div class="panel-heading">Sponsored Ad 1</div>
                            		<div class="panel-body">
                                    bakwas bakwas
                                    </div>
                             </div>
                             <div class="panel panel-default" id="spons_ad">
                    		<div class="panel-heading">Sponsored Ad 1</div>
                            		<div class="panel-body">
                                    bakwas bakwas
                                    </div>
                             </div>
					<div class="btn-success" id="button1">View All</div>                          
                
                </div>
            </div>
        </div>
        
   

	

 
</body>
</html>	