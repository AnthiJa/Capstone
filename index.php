<!--Html5 Doc: Index-->
<!--Author: Jacob Naiyeju-->
<!--Last Updated: 2014-03-31-->

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>JNFeedback A3</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
		<link href="css/themes/default/jquery.mobile-1.1.1.css" rel="stylesheet" type="text/css" />
		<link href="css/custom.css" rel="stylesheet" type="text/css" />
		<!-- <link rel="stylesheet" media="(max-width: 800px)" href="custom2.css" /> -->
		<!-- <script src="js/jquery.js" type="text/javascript"></script> -->
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<!-- <script src="./js/angular.js"></script> -->
		<link type="text/css" rel="stylesheet" href="css/jQuerydd.css" />
		<script type="text/javascript" src="js/jQuerydd.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<!-- <script src="./js/bootstrap.min.js"></script> -->
		<script src="js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
		<!-- jssor slider scripts-->
		
		<script src="js/external/jquery/jquery.js"></script>
		
		<!-- <script src="js/jquery.validate.js" type="text/javascript"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="js/JNglobal.js" type="text/javascript"></script>
		<script src="js/geo.js" type="text/javascript"></script>
		<script src="js/JNdatabase.js" type="text/javascript"></script>
		<script src="js/JNutils.js" type="text/javascript"></script>
		<script src="js/JNabout.js" type="text/javascript"></script>
		<script src="js/custom.js" type="text/javascript"></script> -->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.blur{
				opacity: 0.1;
				filter: alpha(opacity=40); /* For IE8 and earlier */
			}
			#details_container{
				background-color:#fff;
			}
			.glyphicon.glyphicon-thumbs-up{
				font-size:75px;
			}
			
		</style>
	</head>

	<body >
		<div data-role="page" id="home_page" data-theme="d" >
			<header data-role="header" data-position="fixed" data-theme="d">
				<div style="padding:10px" class="container-fluid">
				<div class="row">
				<div class="col-xs-2"><p data-jq-dropdown="#jq-dropdown-1" class="h4"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></p></div>
				<div class="col-xs-6"><p class="h4" >AnthiJa <a href="#home_page"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#advert_page"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#cart_page"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></p></div>
				</div>
				</div>
			</header>
			
			<section data-role="content" >
				<!-- Sidebar -->
				<div id="jq-dropdown-1" class="jq-dropdown jq-dropdown-tip">
					<ul class="jq-dropdown-menu">
						<li><a href="#1"><span class="h3">Item 1</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#2"><span class="h3">Item 2</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#3"><span class="h3">Item 3</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#4"><span class="h3">Item 4</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 5</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 6</span></a></li>
					</ul>
				</div>
				
				<div class="container" >
				<!-- Jssor Slider Begin -->
				<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
				<!-- ================================================== -->
					<div id="slider1_container" class="container-fluid" style="display: none; position: absolute; margin: 0 auto; width: 1140px; height: 700px; overflow: hidden;">
					
						<!--cart indicator-->
						<div class="like col-xs-4 col-xs-offset-4" style="position: absolute; top: 300px; left: 0px; z-index:20">
						<p style="text-align:center"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"><span><p>
						</div>
						
					
						<!-- Loading Screen -->
						<div u="loading" style="position: absolute; top: 0px; left: 0px;">
							<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

							background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
							</div>
							<div style="position: absolute; display: block; background: url(./img/loading.gif) no-repeat center center;

							top: 0px; left: 0px;width: 100%;height:100%;">
							</div>
						</div>

						<!-- Slides Container -->
						<div u="slides" class="cust2" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 700px;
						overflow: hidden;">
							<div>
								<img u="image" src2="./img/home/01.jpg" detail_id="100" carted="0" ant_description="item description here" ant_price="$50 CAD" ant_id="100" ant_name="Item1"/>
							</div>
							<div>
								<img u="image" src2="./img/home/02.jpg" detail_id="101" carted="0" ant_description="item description here" ant_price="$70 CAD" ant_id="101" ant_name="Item2"/>
							</div>
							<div>
								<img u="image" src2="./img/home/03.jpg" detail_id="102" carted="0" ant_description="item description here" ant_price="$20 CAD" ant_id="102" ant_name="Item3"/>
							</div>
							<div>
								<img u="image" src2="./img/home/05.jpg" detail_id="103" carted="0" ant_description="item description here" ant_price="$10 CAD" ant_id="103" ant_name="Item4"/>
							</div>
						</div>
						
						<!--#region Bullet Navigator Skin Begin -->
						<!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
						<style>
							/* jssor slider bullet navigator skin 05 css */
							/*
							.jssorb05 div           (normal)
							.jssorb05 div:hover     (normal mouseover)
							.jssorb05 .av           (active)
							.jssorb05 .av:hover     (active mouseover)
							.jssorb05 .dn           (mousedown)
							*/
							.jssorb05 {
								position: absolute;
							}
							.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
								position: absolute;
								/* size of bullet elment */
								width: 16px;
								height: 16px;
								background: url(../img/b05.png) no-repeat;
								overflow: hidden;
								cursor: pointer;
							}
							.jssorb05 div { background-position: -7px -7px; }
							.jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
							.jssorb05 .av { background-position: -67px -7px; }
							.jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
						</style>
						<!-- bullet navigator container -->
						<div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
							<!-- bullet navigator item prototype -->
							<div u="prototype"></div>
						</div>
						<!--#endregion Bullet Navigator Skin End -->
						
						<!--#region Arrow Navigator Skin Begin -->
						<!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
						<style>
							/* jssor slider arrow navigator skin 11 css */
							/*
							.jssora11l                  (normal)
							.jssora11r                  (normal)
							.jssora11l:hover            (normal mouseover)
							.jssora11r:hover            (normal mouseover)
							.jssora11l.jssora11ldn      (mousedown)
							.jssora11r.jssora11rdn      (mousedown)
							*/
							.jssora11l, .jssora11r {
								display: block;
								position: absolute;
								/* size of arrow element */
								width: 37px;
								height: 37px;
								cursor: pointer;
								background: url(./img/a11.png) no-repeat;
								overflow: hidden;
							}
							.jssora11l { background-position: -11px -41px; }
							.jssora11r { background-position: -71px -41px; }
							.jssora11l:hover { background-position: -131px -41px; }
							.jssora11r:hover { background-position: -191px -41px; }
							.jssora11l.jssora11ldn { background-position: -251px -41px; }
							.jssora11r.jssora11rdn { background-position: -311px -41px; }
						</style>
						<!-- Arrow Left -->
						<span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
						</span>
						<!-- Arrow Right -->
						<span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
						</span>
						<!--#endregion Arrow Navigator Skin End -->
						<a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
					</div>
					<!-- Jssor Slider End -->
					</div>	
					<!-- img details-->
						<div class="details_container" >
						<div class="container-fluid details_container">
						<div class="row details_container">
						<div id="100" class="col-xs-10 col-xs-offset-2">
							<p class="h2">info on image 1</p>
							<hr/>
							<p>description:</p>
							<p>price:</p>
							<p>Used for(yrs):</p>
						</div>
						<div id="101" class="col-xs-10 col-xs-offset-2">
							<p class="h2">info on image 2</p>
							<hr/>
							<p>description:</p>
							<p>price:</p>
							<p>Used for(yrs):</p>
						</div>
						<div id="102" class="col-xs-10 col-xs-offset-2">
							<p class="h2">info on image 3</p>
							<hr/>
							<p>description:</p>
							<p>price:</p>
							<p>Used for(yrs):</p>
						</div>
						<div id="103" class="col-xs-10 col-xs-offset-2">
							<p class="h2">info on image 4</p>
							<hr/>
							<p>description:</p>
							<p>price:</p>
							<p>Used for(yrs):</p>
						</div>
					</div>
					</div>
					</div>
					
					
			</section>	   
			<footer data-role="footer" >
			<script type="text/javascript" src="./js/jssor.slider.mini.js"></script>
			<script src="./js/anthija.js"></script>
			<script src="./js/anthija_utilities.js"></script>
			</footer>
		</div>
		<div data-role="page" id="cart_page" data-theme="d">
			<header data-role="header" data-position="fixed" data-theme="d">
				<div style="padding:10px" class="container-fluid">
				<div class="row">
				<div class="col-xs-2"><p data-jq-dropdown="#jq-dropdown-2" class="h4"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></p></div>
				<div class="col-xs-6"><p class="h4" >AnthiJa <a href="#home_page"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#advert_page"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#cart_page"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></p></div>
				</div>
				</div>
			</header>
			
			<section data-role="content" >
				<!-- Sidebar -->
				<div id="jq-dropdown-2" class="jq-dropdown jq-dropdown-tip">
					<ul class="jq-dropdown-menu">
						<li><a href="#1"><span class="h3">Item 1</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#2"><span class="h3">Item 2</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#3"><span class="h3">Item 3</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#4"><span class="h3">Item 4</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 5</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 6</span></a></li>
					</ul>
				</div>
				<div id='cart_items'>
				<div><p class="h3">My Cart</p></div>
					<div>
						<ul id="cart_item_list" class="list-group">
							
						</ul>
					</div>
				</div>
			</section>	   
			<footer data-role="footer" >
				

			</footer>
		</div>
		<div data-role="page" id="advert_page" data-theme="d">
			<header data-role="header" data-position="fixed" data-theme="d">
				<div style="padding:10px" class="container-fluid">
				<div class="row">
				<div class="col-xs-2"><p data-jq-dropdown="#jq-dropdown-3" class="h4"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></p></div>
				<div class="col-xs-6"><p class="h4" >AnthiJa <a href="#home_page"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#advert_page"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#cart_page"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></p></div>
				</div>
				</div>
			</header>
			
			<section data-role="content" >
				<!-- Sidebar -->
				<div id="jq-dropdown-3" class="jq-dropdown jq-dropdown-tip">
					<ul class="jq-dropdown-menu">
						<li><a href="#1"><span class="h3">Item 1</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#2"><span class="h3">Item 2</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#3"><span class="h3">Item 3</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#4"><span class="h3">Item 4</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 5</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 6</span></a></li>
					</ul>
				</div>
				<div id='advert_items'>
				
					<div class="row">
					<div><p class="h3 col-xs-6">Advertised items</p></div>
					<div><p class="h3 col-xs-6 appclickable"><a href="#Advertform_page"><span class="glyphicon glyphicon-plus"></span><span >Advertise</span></a></p></div>
					</div>
					<div>
						<ul class="list-group">
							<li class="list-group-item"><a href="#">my item 1</a></li>
							<li class="list-group-item"><a href="#">my item 2</a></li>
							<li class="list-group-item"><a href="#">my item 3</a></li>
							<li class="list-group-item"><a href="#">my item 4</a></li>
						</ul>
					</div>
				</div>
			</section>	   
			<footer data-role="footer" >
				

			</footer>
		</div>
		<div data-role="page" id="Advertform_page" data-theme="d">
			<header data-role="header" data-position="fixed" data-theme="d">
				<div style="padding:10px" class="container-fluid">
				<div class="row">
				<div class="col-xs-2"><p data-jq-dropdown="#jq-dropdown-4" class="h4"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></p></div>
				<div class="col-xs-6"><p class="h4" >AnthiJa <a href="#home_page"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#advert_page"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#cart_page"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></p></div>
				</div>
				</div>
			</header>
			
			<section data-role="content" >
				<!-- Sidebar -->
				<div id="jq-dropdown-4" class="jq-dropdown jq-dropdown-tip">
					<ul class="jq-dropdown-menu">
						<li><a href="#1"><span class="h3">Item 1</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#2"><span class="h3">Item 2</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#3"><span class="h3">Item 3</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#4"><span class="h3">Item 4</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 5</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 6</span></a></li>
					</ul>
				</div>
				<div>
					<form >
						<div class="form-group">
						<label for="category">Category:</label>
						<select id="category" class="form-control input-lg">
							<option>All</option>
							<option>Car</option>
							<option>Anthic</option>
							<option>Homeware</option>
							<option>Book</option>
						</select>
						</div>
						<div class="form-group">
							<label for="InputFile">Image Upload</label>
							<input type="file" id="InputFile" class="input-lg" accept="image/*" capture="camera">
							<p class="help-block">Upload primary image here</p>
						</div>
						<div class="form-group">
							<label for="title">Title:</label>
							<input type="text" class="form-control input-lg" id="title">
						</div>
						<div class="form-group">
							<label for="dsc">Description:</label>
							<textarea id="dsc" class="form-control input-lg" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label class="sr-only" for="price">Amount (in dollars)</label>
							<label for="price" for="price">Price (in dollars)</label>
							<div class="input-group">
								<div class="input-group-addon">$</div>
								<input type="text" class="form-control input-lg" id="price" placeholder="Amount" />
								<div class="input-group-addon">.00</div>
							</div>
						</div>
						<input type="submit" class="btn btn-primary input-lg" >
					</form>
				</div>
			</section>	   
			<footer data-role="footer" >
				

			</footer>
		</div>
		<div data-role="page" id="details_page" data-theme="d">
			<header data-role="header" data-position="fixed" data-theme="d">
				<div style="padding:10px" class="container-fluid">
				<div class="row">
				<div class="col-xs-2"><p data-jq-dropdown="#jq-dropdown-5" class="h4"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></p></div>
				<div class="col-xs-6"><p class="h4" >AnthiJa <a href="#home_page"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#advert_page"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></p></div>
				<div class="col-xs-2"><p  class="h4"><a href="#cart_page"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></p></div>
				</div>
				</div>
			</header>
			
			<section data-role="content" >
				<!-- Sidebar -->
				<div id="jq-dropdown-5" class="jq-dropdown jq-dropdown-tip">
					<ul class="jq-dropdown-menu">
						<li><a href="#1"><span class="h3">Item 1</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#2"><span class="h3">Item 2</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#3"><span class="h3">Item 3</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#4"><span class="h3">Item 4</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 5</span></a></li>
						<li class="jq-dropdown-divider"></li>
						<li><a href="#5"><span class="h3">Item 6</span></a></li>
					</ul>
				</div>
				<div id='advert_items'>
				
					<div class="row">
					<div><p class="h3 col-xs-6">Advertised items</p></div>
					<div><p class="h3 col-xs-6 appclickable"><a href="#Advertform_page"><span class="glyphicon glyphicon-plus"></span><span >Advertise</span></a></p></div>
					</div>
					<div>
						<ul class="list-group">
							<li class="list-group-item"><a href="#">my item 1</a></li>
							<li class="list-group-item"><a href="#">my item 2</a></li>
							<li class="list-group-item"><a href="#">my item 3</a></li>
							<li class="list-group-item"><a href="#">my item 4</a></li>
						</ul>
					</div>
				</div>
			</section>	   
			<footer data-role="footer" >
				

			</footer>
		</div>
	</body>
</html>

