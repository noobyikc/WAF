<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


	            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
				<link rel="stylesheet" type="text/css" href="css/search.css" />

				<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
            	<script type="text/javascript" src="js/bootstrap.js"></script>
                <script src="js/modernizr.custom.js"></script>
	         	<script src="js/classie.js"></script>
				<script src="js/uisearch.js"></script>
                

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
        
        <!--Google Maps-->
    <div style="position:relative;" id="contact">
    	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
			function initialize()
			{
				var latval = '28.54596';
				var longval = '77.272666';
				var myLatlng = new google.maps.LatLng(28.54597,77.272666);
				var centerlatling = new google.maps.LatLng(28.54596,77.2837047); 
				var mapProp = {center: centerlatling,
							   zoom:15,
							   minZoom:13,
							   scrollwheel:false,
							   maxZoom:17,
							   mapTypeId:google.maps.MapTypeId.ROADMAP};
				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
				var marker = new google.maps.Marker({ position: myLatlng,
													  map: map,
													  animation: google.maps.Animation.DROP,
													  title: 'Indraprastha Institute of Information Technology, Delhi'});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
        <div id="googleMap" style="width:100%;height:530px;"></div>
        <div class="panel" style="position:absolute;left:850px;width:464px;top:80px;">
        	<div class="panel-heading">Contact Us</div>
            <div class="panel-body">
            
			</div>
        </div>
         
	</div>

</body>
</html>