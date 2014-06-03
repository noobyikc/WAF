<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
            
            <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
            <link rel="shortcut icon" href="../favicon.ico">
        
            <title>World Auto Forum</title>
        
           
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/carousel.css" />
            <link rel="stylesheet" type="text/css" href="css/index.css" />
			<link rel="stylesheet" type="text/css" href="css/search.css" />
			<link rel="stylesheet" type="text/css" href="css/default.css" />
			<link rel="stylesheet" type="text/css" href="css/component.css" />

			<SCRIPT language=JavaScript>
			function reload(form)
			{
				var val=form.cat.options[form.cat.options.selectedIndex].value;
				self.location='new 22.php?cat=' + val ;
			}

			</script>

          

	</head>
	<body>
	
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
			<!--=============================================List============================================= --> 
   
		<?php

		require 'config.php';  // Database connection

		?>
		<div class="search">
			<span><h1>Search for People, Places & Opportunities...</h1></span>
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


		echo "<form method=post name=f1 action='new 22.php'>";


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


		echo "<input type=submit value=Submit style='color:black;'>";
		echo "</form>";
		?>
		
		
		
		<span><h1></h1></span>
		</div>

		
		<!--=============================================Timeline============================================= --> 
   
		
		<div class="container">
			<header class="clearfix">
				<span></span>
				<h1>  </h1><br><br><br>
				
			</header>	
			<div class="main"><span><h1>FAQ</h1></span>
				<ul class="cbp_tmtimeline">
					<li>
						<time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>4/10/13</span> <span>18:30</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<div class="share">
								<a href="#"><image src="images/facebook-icon.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/gplus.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/linkedln.png" style="height:30px;width:30px;"></a>
								
							</div>
							<h2><a href="#">SOMETHING</a></h2>
							<p>DETAILS       hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fsf</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>4/11/13</span> <span>12:04</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<div class="share">
								<a href="#"><image src="images/facebook-icon.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/gplus.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/linkedln.png" style="height:30px;width:30px;"></a>
								
							</div>
							<h2><a href="#">SOMETHING</a></h2>
							<p>DETAILS       hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fsf</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>4/13/13</span> <span>05:36</span></time>
						<div class="cbp_tmicon cbp_tmicon-mail"></div>
						<div class="cbp_tmlabel">
							<div class="share">
								<a href="#"><image src="images/facebook-icon.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/gplus.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/linkedln.png" style="height:30px;width:30px;"></a>
								
							</div>
							<h2><a href="#">SOMETHING</a></h2>
							<p>DETAILS       hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fsf</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-15 13:15"><span>4/15/13</span> <span>13:15</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<div class="share">
								<a href="#"><image src="images/facebook-icon.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/gplus.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/linkedln.png" style="height:30px;width:30px;"></a>
								
							</div>
							<h2><a href="#">SOMETHING</a></h2>
							<p>DETAILS       hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fsf</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-16 21:30"><span>4/16/13</span> <span>21:30</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
						<div class="cbp_tmlabel">
							<div class="share">
								<a href="#"><image src="images/facebook-icon.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/gplus.png" style="height:30px;width:30px;"></a>
								<a href="#"><image src="images/linkedln.png" style="height:30px;width:30px;"></a>
								
							</div>
							<h2><a href="#">SOMETHING</a></h2>
							<p>DETAILS       hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fsf</p>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
