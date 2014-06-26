<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="description" content="Morphing Buttons Concept: Inspiration for revealing content by morphing the action element" />
		<meta name="keywords" content="expanding button, morph, modal, fullscreen, transition, ui" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/content.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		
			
		<div class="panel panel-default">
  	<div class="panel-heading">
    <h3 class="panel-title">Select Your Domain</h3>
  </div>
  <div class="panel-body">
   

			<section>
				
				<div class="mockup-content">
					
					
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Auto Component/Parts</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>
										<label for="Your Product">Your Product</label>
	  					<select id="Your Product" name="Your Product">
	  						<option>Select your Product type</option>
	  						<option>Crankshaft</option>
	  						<option>Bearing</option>
	  						<option>Battery</option>
	  					</select>
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
										
										<label for="You Manufacture">You Manufacture</label>
	  					<select id="You Manufacture" name="You Manufacture">
	  						<option>Select your type</option>
	  						<option>Two Wheeler Maker</option>
	  						<option>Passenger Car Maker</option>
	  						<option>Trucks and buses Maker</option>
	  					</select>

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
										<label for="You Deal In">You Deal In</label>
	  					<select id="You Deal In" name="You Deal In">
	  						<option>Select your type</option>
	  						<option>Two Wheeler Maker</option>
	  						<option>Passenger Car Maker</option>
	  						<option>Trucks and buses Maker</option>
	  					</select>
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
		 <div class="panel-body">
    <section>
				
				<div class="mockup-content">
					
					
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Unable to Fit In</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>
										

									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
  <div class="panel-body">
    <section>
				
				<div class="mockup-content">
					
					
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">I Belong to Auto Industry</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									
									<form>
										

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
							
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					
				</div><!-- /form-mockup -->
			</section>
  


</div>
</div>		
<script src="js/classie.js"></script>
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
		</script>