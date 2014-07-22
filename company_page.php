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
        
            <title>Company Page</title>
        
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
			<link rel="stylesheet" type="text/css" href="css/search.css" />
            <link rel="stylesheet" type="text/css" href="css/footer.css" />
            <link rel="stylesheet" type="text/css" href="css/company_page.css" />

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
<body>


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

<div class="contentpane12">
	<div class="contentpane1">
        <div class="panel panel-success">
          <div class="panel-heading" >Audi</div>
                    <div class="panel panel-default" id="pic_sign">
                    	<div id="pic">
                        <a class="thumbnail"><img src="image/unnamed.png" />
                        </a>
                        				<div class="btn-group" style="margin-left:40em">
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
                                
                <div class="panel panel-default" id="box1" style="margin-top:2.28em;">
	            <div class="panel-heading">Details </div>
            	<div class="panel-body" id="profile_box">

                    <table>
                        <tr> 
                            <td><div class="label">Local Address </div></td>
                            <td><div class="label-ans"><?php echo "B-tech Graduate, Batch of 2011-15";?> </div></td>                       
                        </tr>
                        <tr> 
                            <td></td>
                            <td><div class="label-ans"><?php echo "IIITD, Delhi ";?> </div></td>
                        </tr>
                        <tr> 
                            <td><div class="label">Head Address</div></td>
                            <td><div class="label-ans"><?php echo "Employed";?></div></td>                   
                        </tr>
                        <tr> 
                            <td><div class="label">Website</div></td>
                            <td><div class="label-ans"><?php echo "inshu@bosch.com";?></div></td>
                        </tr>
                        <tr> 
                            <td><div class="label">Wikilink</div></td>
                            <td><div class="label-ans"><?php echo "inshu@bosch.com";?></div></td>
                        </tr>
                        <tr> 
                            <td><div class="label">About</div></td>
                            <td><div class="label-ans"><?php echo "Audi AG[1] (pronounced [ˈʔaʊ̯diː ʔaːˈgeː] ( listen)) is a German automobile manufacturer that designs, engineers, produces, markets and distributes automobiles. Audi oversees worldwide operations from its headquarters in Ingolstadt, Bavaria, Germany. Audi-branded vehicles are produced in nine production facilities worldwide.

Audi has been a majority owned (99.55%) subsidiary of Volkswagen Group since 1966, following a phased purchase of Audi AG's predecessor, Auto Union, from Daimler-Benz.[10] Volkswagen relaunched the Audi brand with the 1965 introduction of the Audi F103 series.
";?></div></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
   	</div>

          <div class="panel-body">
            
          </div>
		</div>
</div>
</div>
    
	</div> 
	</div> 
    
	<!--=============================================Footer============================================= -->
    

    <div class="footer" style="top:40em;">
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