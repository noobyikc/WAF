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
        
            <title>Advertise on WAF</title>
        
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/carousel.css" />
            <link rel="stylesheet" type="text/css" href="css/ad.css" />
			<link rel="stylesheet" type="text/css" href="css/search.css" />
            <link rel="stylesheet" type="text/css" href="css/footer.css" />
  			<link rel="stylesheet" type="text/css" href="css/market.css" />
	        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">


            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script src="js/modernizr.custom.js"></script>
         	<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>


			<link rel="stylesheet" type="text/css" href="css/sell.css" />
			
	</head>


  	<body data-spy="scroll" data-target=".navbar navbar-inverse" >
    <!--============================================Scroll Up========================================== -->
		<script>
			jQuery(document).ready(function() {
				var offset = 230;
				var duration = 1000;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.image-pos2').fadeIn(duration);
					} else {
						jQuery('.image-pos2').fadeOut(duration);
					}
				});
				
				jQuery('.image-pos2').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
        </script>
        <div class="image-pos2" id="image-view2">
            <a href="#"><img src="image/icons/up.jpg" /></a>
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
    <!--=============================================ContentPane============================================= --> 
	<div class="contentpane">
    	<div class="heading1">
            <h1>Advertising on WAF</h1>
        </div>
        <div class="heading1">
           	<h3>Posting Ads on WAF is simple.</h3>
        </div>
    	<div class="forms">
            <form action=""  method="post">
        		<table id="forms1" >
                    <tr>
                        <td colspan="2"><div class="Head">Basic Details</div></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div class="Desc">Please fill all the texts in the fields.</div></td>
                    </tr>
                    <tr>
						<td><div class="Field">Ad Title :</div></td>
                    	<td><div class="Value"><input type="text" placeholder="Title" style="width:80%"/></div></td>
                     </tr>
                     <tr>
                     	<td><div class="Field">Description :</div></td>
                        <td><textarea name="t2" style="width:80%"></textarea></td>
                     </tr>
                     <tr>
                     	<td colspan="2"><div class="Head">Seller Information</div></td>
                     </tr>
                     <tr>
                     	<td><div class="Field">Contact Name</div></td> 
                        <td><div class="Value"><input type="text"  placeholder="Full Name" style="width:80%"/></div></td>
                     </tr>
                     <tr>
                     	<td><div class="Field">Email ID :</div></td>
                        <td><div class="Value"><input type="text" name="email" placeholder="Valid Email Address" style="width:80%"/></div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Phone No :</div></td>
                        <td><div class="Value"><input type="text" input name="phone" placeholder="Phone Number" style="width:80%"/></div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Country :</div></td>
                        <td>
                        	<div class="Value">
                        		<select name="country" style="width:80%">
                                	<option value="none" selected>Select Your Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>					
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                    <option value="Congo, Republic of (Brazzaville)">Congo, Republic of (Brazzaville)</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Ivory Coast">Ivory Coast</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Holy See">Holy See</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Rep. (North Korea)">Korea, Democratic People's Rep. (North Korea)</option>
                                    <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian territories">Palestinian territories</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion Island">Reunion Island</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Tibet">Tibet</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands">Virgin Islands</option>
                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                     	<td colspan="2"><div class="Head">Audience</div></td>
                     </tr>
                    <tr>
                    	<td><div class="Field">Audience Country</div></td>
                        <td><div class="Value"><input type="text" name="audi-country" placeholder="Audience Country" style="width:80%"/></div></td>
					</tr>
                    <tr>
                    	<td><div class="Field">Age Group</div></td>
                        <td><div class="Value"><input type="text" name="age" placeholder="Age group, the ad caters to" style="width:80%7"></div></td>
			        </tr>
                    <tr>
                     	<td colspan="2"><div class="Head">Payment Details</div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Country :</div></td>
                        <td><div class="Value"><input type="text" size="40" name="payment-country" placeholder="Title" style="width:80%"/></div></td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Currency :</div></td>
                        <td>
                        	<div class="Value">
                				<select name="Currency" style="width:80%">
                                	<option value="none" selected>Select Your Currency</option>
                                    <option value="Rupee">Rupee</option>
                                    <option value="British Pound">British Pound</option>
                                </select>
                            </div>
						</td>
                    </tr>
                    <tr>
                    	<td><div class="Field">Time Zone :</div></td>
                        <td>
                        	<div class="Value">
                            	<select name="Time Zone" style="width:80%">
                                	<option value="none" selected>Select Your TimeZone</option>
                                    <option value="Rupee">Rupee</option>
                                    <option value="British Pound">British Pound</option>
								</select>
                           	</div>
                        </td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        </td>
                    </tr>
					<tr>
                    	<td></td>
                        <td><div><input type="submit" name="s1" value="Post Ad" class="button"/></div></td>
                    </tr>                    
                </table>
            </form>  
        </div>
        <!--=============================================Footer============================================= -->

         <div class="footer" style="margin-top:auto; top:1000px;">
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
                <p>(c) 2014 World Auto Forum inc. , all rights reserved</p>
            </div>
         </div>
    </div>
</body>
</html>