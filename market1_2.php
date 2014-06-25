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
			<link rel="stylesheet" type="text/css" href="css/market.css" />
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
		
		<div class="form">
			<form class="white-pink" align="center" action=""  method="POST">
			<h1>Post An AD
        			<span>Please fill all the texts in the fields.</span>
    			</h1>
					<!--=============================================List============================================= --> 
   
		<?php

		require 'config.php';  // Database connection

		?>
		<div class="search">
			<span><h1>Select Your Category</h1></span>
		<?Php

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


		echo "<form method=post name=f1 align='center' action='sell1.php'>";


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
		<br>
		<?php


		
		echo "</form>";
		?>
		
		
		
		<span><h1></h1></span>
		
				
    			<label>
        			<span>Ad Title :</span> 
				<input type="text" name="t1" size="40" input id="name"placeholder="Title"/>
			</label>	
			
			<label>
				<span>Discribtion :</span>
				<input type="text" name="t2" size="270"/ input id="name" placeholder="Discription">
			</label><br>
			
			<h1>
        			<span></span>
    		</h1>
    		
			<h1><br>Seller Information
        			<span></span>
    		</h1>
    		

			
			<label><span>Contact Name</span> 
			<input type="text" name="t3" size="20"input id="name" placeholder="Full Name"/>
			</label>
			
			<label>
				<span>Email ID :</span>
				<input type="text" name="t4" size="20"input id="email" placeholder="Valid Email Address"/>
			</label>				
			<label>
				<span>Phone No :</span>
				<input type="text" name="t4" size="20"input id="email" placeholder="Phone Number"/>
			</label>				
			
			<label>
				<span>I am:</span>
				<input type="radio" name="r1" value="1"/>An Individual<br>
				<input type="radio" name="r1" value="2"/>Professional
			</label><br>
			<label>
				<span>State :</span>
				<select name="cars">
					<option value="none" selected>Select Your State</option>
					<option value="Andra Pradesh">Andra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madya Pradesh">Madya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Orissa">Orissa</option>
					<option value="Punjab">Punjab</option>					
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttaranchal">Uttaranchal</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="West Bengal">West Bengal</option>
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Delhi">Delhi</option>
					<option value="Lakshadeep">Lakshadeep</option>
					
				</select>
			</label>				
			
			<h1></h1><br>	

			
			<label>	
					<input type="submit" name="s1" value="Post Ad" class="button"/>
					<td><input type="reset" name="re1" value="Reset" class="button"/>
			</label>
				
			
		</form>	
		</div>
		
			
			
		