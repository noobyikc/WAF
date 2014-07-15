<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 

		<link rel="shortcut icon" href="../favicon.ico">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/search.css" />
        <link rel="stylesheet" type="text/css" href="css/footer.css" />
        <link rel="stylesheet" type="text/css" href="css/Signup.css" />
		<link rel="stylesheet" type="text/css" href="Sign-up/css/component.css" />
		<link rel="stylesheet" type="text/css" href="Sign-up/css/content.css" />
        
        	
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/classie.js"></script>
		<script src="js/uisearch.js"></script>
   		<script src="js/uiMorphingButton_fixed.js"></script>
        <script>
			(function() {
            	var docElem = window.document.documentElement, didScroll, scrollPosition;
	            // trick to prevent scrolling when opening/closing button
    	        function noScrollFn() {
        	        window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
            	}
				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
	            }
	            function scrollFn() {
    	            window.addEventListener( 'scroll', scrollHandler );
        	    }
	            function canScroll() {
    	            window.removeEventListener( 'scroll', noScrollFn );
        	        scrollFn();
	            }
	            function scrollHandler() {
    	            if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
	            };
	            function scrollPage() {
    	            scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
        	        didScroll = false;
            	};
	
	            scrollFn();

    	        [].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
        	        new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
    	                    canScroll();
	                    },
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
	                    },
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
	                } );
    	        } );
            	// for demo purposes only
	            [].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
    	            bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
        	    } );
	        })();
			
			$(function() {
              $('#a').click(function() {
                    
                    $('#a1').toggleClass('hide'); //use this line to toggle
                    //$('#a1').css('display', 'block'); //use this line to make it visible on the first click and stay visible.
              });
            });
    </script>
        
	</head>
	
    <body>
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
        <!--============================================ContentPane========================================== -->
		<div class="contentpane">
            <div class="heading1">
                <h1>Profile Builder</h1>
            </div>
            <div class="heading1">
                	<h3>Kindly select your domain</h3>
                </div>
            <section>
				<div class="mockup-content">
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Auto Component/Parts</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>
										<p><label>Your Product</label><input type="text" /></p>
						<p><label>Grow your network on WAF , Email</label><input type="text" /></p>
						<p><label>Company Name</label><input type="text" /></p>
						<p><label>Function/Department</label><input type="text" /></p>

						<p><button>All Set</button></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					
				
					
					
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Auto Manufacturer/Maker</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>
										
										<p><label>You Manufacture</label><input type="text" /></p>

						<p><label>Grow your network on WAF , Email</label><input type="text" /></p>
						<p><label>Company Name</label><input type="text" /></p>
						<p><label>Function/Department</label><input type="text" /></p>
										
										<p><button>All Set</button></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					
									
					
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Auto Dealer</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>
										<p><label>You Deal In</label><input type="text" /></p>
							<p><label>Grow your network on WAF , Email</label><input type="text" /></p>
						<p><label>Company Name</label><input type="text" /></p>
						<p><label>Function/Department</label><input type="text" /></p>



							<p><button>All Set</button></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					
				</div><!-- /form-mockup -->
			</section>
            
            <section>
            	<div class="mockup-content">
                	<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed" id="a">
						<button type="button">Unable to Fit In</button>
						<div class="morph-content">
							<div class="content-style-form content-style-form-2">
								<span class="icon icon-close">Close the dialog</span>
								<form>
								</form>
							</div>
						</div>
					</div><!-- morph-button -->
                </div>                
            </section>
            <div class="mockup-content hide" style="" id="a1">
					
					
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">I Belong to Auto Industry</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>
										<ul>
<a href=#><li>Auto Associations/Bodies</li></a>
<a href=#><li>Moto Racing</li></a>
<a href=#><li>Mutli Brand Bike Services</li></a>
<a href=#><li>Mutli Brand Car Services</li></a>
<a href=#><li>Used/Pre Owned Car Business</li></a>
<a href=#><li>Vehicle Equipment</li></a>
<a href=#><li>Vehicle Testing</li></a>
<a href=#><li>Vehicle Tools</li></a>
</ul>

							

									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					
				
					
					
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">I Provide Services to Auto Industry</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>

									
									<ul>
<a href=#><li> Advertising</li></a>
<a href=#><li>CRM</li></a>
<a href=#><li>Consultants </li></a>
<a href=#><li>Direct Marketing</li></a>
<a href=#><li>Event Management</li></a>
<a href=#><li>Finance Sector</li></a>
<a href=#><li>IT</li></a>
<a href=#><li>Logistics Service Provider</li></a>
<a href=#><li>Media/Press</li></a>
<a href=#><li>Public Relations</li></a>
<a href=#><li>Quality Certification</li></a>
<a href=#><li>Research Companies</li></a>
<a href=#><li>Training Service Provider </li></a>
</ul>
									
							
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					
				</div><!-- /form-mockup -->
			</section>
  

        </div>
        
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
        	