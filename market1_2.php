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
			
			<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" type="text/css" href="css/sell.css" />
			
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
            <script src="js/modernizr.custom.js"></script>
         	<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<SCRIPT language=JavaScript>
			function reload(form)
			{
				var val=form.cat.options[form.cat.options.selectedIndex].value;
				self.location='sell1.php?cat=' + val ;
			}

			</script>
			
			
			<link rel="stylesheet" type="text/css" href="css/demo.css" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />

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
		
		<div class="form" style="height:70px;">
					<!--=============================================List============================================= --> 
   
		<?php

		require 'config.php';  // Database connection

		
		
		

		@$cat=$_GET['cat']; 
		if(strlen($cat) > 0 and !is_numeric($cat)){ 
		echo "Data Error";
		exit;
		}




		$quer2="SELECT DISTINCT category,cat_id FROM category order by category"; 


		///second/// 
		if(isset($cat) and strlen($cat) > 0){
		$quer="SELECT DISTINCT subcategory FROM subcategory where cat_id=$cat order by subcategory"; 
		}else{$quer="SELECT DISTINCT subcategory FROM subcategory order by subcategory"; } 


		echo "<form class='white-pink' method=post name=f1 align='center' action='sell1.php'>";
		?>
		
			<span><h1>Select Your Category</h1></span>
		<?php	


		echo "<select name='cat' placeholder='-Category-' style='width:320px;color:black;' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
		foreach ($dbo->query($quer2) as $noticia2) {
		if($noticia2['cat_id']==@$cat){echo "<option selected value='$noticia2[cat_id]'>$noticia2[category]</option>"."<BR>";}
		else{echo  "<option value='$noticia2[cat_id]'>$noticia2[category]</option>";}
		}
		echo "</select>";



		echo "<select name='subcat' placeholder='-Category-' style='width:320px;color:black;'><option value=''>Select one</option>";
		foreach ($dbo->query($quer) as $noticia) {
		echo  "<option value='$noticia[subcategory]'>$noticia[subcategory]</option>";
		}
		echo "</select>";
		?>
		
			
		

		<?php
		echo "</form>";
		?>
		<div class="container_form" style="width:675px;margin-left:-20px; margin-top:40px;">
			<section class="af-wrapper">
	            <h3>Post An ADD</h3>
		        
				
				
				
				<form class="af-form" id="af-form" novalidate>
					
					<div class="af-outer">
						<div class="af-inner">
							<label for="input-title">AD Title</label>
							<input type="text" name="title" id="input-title">
						</div>
					</div>
				
					<div class="af-outer af-required">
						<div class="af-inner">
							<label for="input-name">Describtion </label>
							<input type="text" name="describex" id="input-name" required>
						</div>
					</div><br>
					
					<h3>Sellers Information</h3>
					
					<div class="af-outer">
						<div class="af-inner">
						  <label for="name">Your Name</label>
						  <input type="email" name="name" id="name">
						</div>
					</div>
					
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label for="input-email">Email address</label>
						  <input type="email" name="email_address" id="input-email">
						</div>
					</div>
					
					
					
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label for="input-country">State</label>
						  <input type="email" name="state" id="input-state" required>
						</div>
					</div>
					
					
					
					<div class="af-outer">
						<div class="af-inner">
						  <label for="input-phone">Phone Number</label>
						  <input type="email" name="phonenumber" id="input-phone">
						</div>
					</div>
		  
					
					<input type="submit" value="Post AD!" /> 
					
				</form>
			</section>
		</div>
	</div>