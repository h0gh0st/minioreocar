

<!DOCTYPE HTML>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->

<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>MiniOreo</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="oreo_favicon.ico" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="http://www.oreo.com.my/minioreocar/_staging/img/share.jpg" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="http://www.oreo.com.my/minioreocar/_staging/img/share.jpg">

	<meta name="viewport" content="width=1200">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="css/gumby.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/flexslider.css">
	
	<script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>


	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

	<!--
	Include gumby.js followed by UI modules followed by gumby.init.js
	Or concatenate and minify into a single file -->
	<script gumby-touch="js/libs" src="js/libs/gumby.js"></script>
	<script src="js/libs/ui/gumby.retina.js"></script>
	<script src="js/libs/ui/gumby.fixed.js"></script>
	<script src="js/libs/ui/gumby.toggleswitch.js"></script>
	
	<script src="js/libs/gumby.init.js"></script>

	<!--
	Google's recommended deferred loading of JS
	gumby.min.js contains gumby.js, all UI modules and gumby.init.js

	Note: If you opt to use this method of defered loading,
	ensure that any javascript essential to the initial
	display of the page is included separately in a normal
	script tag.

	<script type="text/javascript">
	function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "js/libs/gumby.min.js";
	document.body.appendChild(element);
	}
	if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	</script> -->
	
	<!-- Start Here -->	
	<div class="wrapper_bg">
	
		<div class="wrapper_one">
		<div class="center_wrapper">
			<div class="lantern">
				<img  id="target_1" src="img/lantern.png" />
			</div>
			<div class="nav_bar first">
				<div class="row">
					<div class="twelve columns">
						<ul class="nav second">
							<li class="home"><a href="#home-section"><img src="img/logo.png" /></a></li>
							<li class="home"><a href="#home-section">Home</a></li>
							<li class="how_to_join" ><a href="#howtojoin-section">How To Join</a></li>
							<li class="schedule" ><a href="#schedule-section">Schedule</a></li>
							<li class="target_prizes"><a href="#prize-section">Prizes</a></li>
							<li class="gallery"><a href="#gallery-section">Gallery</a></li>
					   </ul>
					</div>
				</div>
			</div>			
		
			<div class="wrapper_one_content" id="home-section">
				<div class="row">
					<div class="twelve columns">
					
						<div class="six columns">
							<div class="car_big">
								<a href="#"><img src="img/car_big.png" /></a>
							</div>
						</div>
										
						<div class="six columns">
							<div class="text_main">
								<img src="img/main_text_1.png" />
								<img src="img/main_text_2.png" />
								<a href="#prize-section" class="gotoprize"><div class="text_main_button target_prizes">
								</div></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="divider_1 text-center">
				<div class="row">
					<div class="twelve columns centered">	
						<img id="target_2" class="center" src="img/text1.png"/>
					</div>
				</div>
			</div>
			
		</div>
		</div>
		
		<div class="wrapper_two">
			<div class="center_wrapper">
				<div class="top_text">
					<p>follow these 3 simple steps to be a part of <br/>the hunt.</p>
				</div>
			
				<div class="steps-section" id="howtojoin-section">
					<div class="row">
						<div class="four columns">
							<img class="center" src="img/step_spot.png" gumby-retina />
							<div>
								<h1 class="steps_text">step 1</h1>
								<h2 class="steps_text_2">spot a #minioreocar at <br/>selected major highways and <br/>petrol stations.</h2>
							</div>
						</div>
						
						<div class="four columns">
							<img class="center" src="img/step_snap.png" gumby-retina />
							<div>
								<h1 class="steps_text">step 2</h1>
								<h2 class="steps_text_2">snap a clear photo of the <br/>#minioreocar and post it on <br/>instagram, facebook or <br/>twitter.</h2>
							</div>
						</div>
						
						<div class="four columns">
							<img class="center" src="img/step_share.png" gumby-retina />
							<div>
								<h1 class="steps_text">step 3</h1>
								<h2 class="steps_text_2">include the hashtag <br/>#minioreocar and write a <br/>creative caption to match <br/>your photo.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="wrapper_two_plus">
			<div class="center_wrapper">
				<div class="schedule-section" id="schedule-section">
					<div class="row">
						<div class="twelve columns">
							<!-- <div style="position: relative; width: 500px; overflow: hidden; height: 100px; border: 1px solid red">
								<div style=" width: 5000px">
									<div class="nstate-item">
										<div class="nstate">121

											<div class="ndesc-item">desc121</div>
											<div class="ndesc-item">desc121</div>
											<div class="ndesc-item">desc121</div>
											<div class="ndesc-item">desc121</div>
											<div class="ndesc-item">desc121</div>
										</div>
										
									</div>

									<div class="nstate-item">
										<div class="nstate">121</div>
										<div class="ndesc-item">desc121</div>
										<div class="ndesc-item">desc121</div>
										<div class="ndesc-item">desc121</div>
										<div class="ndesc-item">desc121</div>
										<div class="ndesc-item">desc121</div>

									</div>

									<div class="nstate-item">
										<div class="nstate">121</div>
										<div class="ndesc">121</div>
									</div>


									<div class="nstate-item">
										<div class="nstate">121</div>
										<div class="ndesc">121</div>
									</div>


									<div class="nstate-item">
										<div class="nstate">121</div>
										<div class="ndesc">121</div>
									</div>

									<div class="nstate-item">
										<div class="nstate">121</div>
										<div class="ndesc">121</div>
									</div>
								</div>
							</div>
 -->

							<div class="schedule_top">
								<img class="center" id="target_4" src="img/text2.png" style="position:relative; top:0; margin-top:-4.7%;	"/>
								
								<div class="top_text" style="padding-top: 5%; color:#000000;">
									<p style=" color:#000000;">see where  to expect  the #minioreocar and <br/> get your cameras ready.</p>
								</div>
								
								<div class="schedule_input" style="margin-left: 35%;">
									<div class="field">
									<div class="picker">
									<select class="schedule_date_value">
										<option value="2015-02-14">Saturday - 14 Feb</option>
										<option value="2015-02-15">Sunday - 15 Feb</option>
										<option value="2015-02-16">Monday - 16 Feb</option>
										<option value="2015-02-17">Tuesday - 17 Feb</option>
										<option value="2015-02-18">Wednesday - 18 Feb</option>
										<option value="2015-02-19">Thursday - 19 Feb</option>
										<option value="2015-02-19">Friday - 20 Feb</option>
										<option value="2015-02-21">Saturday - 21 Feb</option>
										<option value="2015-02-22">Sunday - 22 Feb</option>
										<option value="2015-02-23">Monday - 23 Feb</option>
										<option value="2015-02-24">Tuesday - 24 Feb</option>
										<option value="2015-02-25">Wednesday - 25 Feb</option>
										<option value="2015-02-26">Thursday - 26 Feb</option>
										<option value="2015-02-27">Friday - 27 Feb</option>
										<option value="2015-02-28">Saturday - 28 Feb</option>
										<option value="2015-03-01">Sunday - 01 Mar</option>
									</select>	
									</div>
									</div>
								</div>				
							</div>
						</div>
							
						<div class="row" style="margin-top: 35%; margin-left: 15%;">
							<div class="twelve columns">
								<div class="schedule_top">
									<div class="schedule_slider">
										<div class="schedule_slider_space">
										
										<div class="bp">
										</div>						
										<div class="view">
											<div class="slider_container">
												<?php require("date_list.php"); ?> 
											</div>
										</div>				
										<div class="bn">
										</div>
									
										</div>
									</div>
								</div>
							</div>
						</div>
								
					</div>
					<div class="schedule_top" style="margin-top:10%;">
						<img src="img/car_road.png" style="position:absolute; left:40%; top:0;" />
						<img src="img/sign.png" style="position:absolute; left:30%; margin-top:-33px;"/>
						<img src="img/bubble.png" style="position:absolute; margin-top:-5%; left:55%;"/>
						<p class="sign_text">2015-02-14</p>
					</div>
					<img src="img/bg_road.png" style="width:100%; height:100px;"/>
					<p class="road_text">Disclaimer: Timing is subject to traffic conditions.</p>
					<img src="img/road_bottom.png" style="width:100%; height:100px; margin-top:-10px;"/>
				</div>
			</div>		
		</div>
	
		<div class="wrapper_three" id="prize-section">
	
			<div class="row">
				<div class="twelve columns centered">	
					<div class="divider_3">
						<img id="target_3" class="center" src="img/text3.png"/>
					</div>
				</div>
			</div>
			
			
			<div class="top_text" style="margin-top:3%;">
				<p style="color:#ffffff;">we've got amazing prizes to kick-start <br/>your year with a twist!</p>
			</div>
					
			<div class="row">
				<div class="six columns">
					<div class="ipad">
						<img src="img/ipad_bg.gif" style="position:absolute; margin-top:12%; z-index:10; "/>
						<img src="img/ipad.png" style="width:80%;position:absolute; margin-left:10%; margin-top:12%; opacity:1.0; z-index:20;"/>
					</div>
					
				</div>
				<div class="six columns">
					<div class="tickets">
						<img src="img/tickets.png" style="width:80%;margin-top:12%; margin-left:7%;" />
					</div>
				</div>
			</div>
			
			<!--<div class="row">
				<div class="six columns text-center"><p style="color:#000000; margin-top:-8%;">*Terms and conditions apply.</p></div>
				<div class="six columns text-center">
					<p style="color:#000000; margin-top:-8%;">**1 winner receives 2 tickets.</p>
				</div>		
			</div>-->
			
			<div class="row">
				<div class="twelve columns centered text-center"><p style="font-size:12px; color:#000000; margin-top:-3%;">*Terms and conditions apply.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**1 winner receives 2 tickets.</p></div>
			</div>
			
			<div class="row">
				<div class="twelve columns centered">	
					<div class="divider_4">
						<img id="target_5" class="center" src="img/text4.png"/>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="wrapper_four" id="gallery-section">
		<div class="center_wrapper">
			<div class="top_text">
				<p style="color:#000000;">take a peek at the #minioreocar at <br/>different spots</p>
			</div>
			
			<div class="gallery_content">
				<div class="gallery_slider" style="width: 1100px; margin: 0 auto">
						<!--<a href="#" class="control_next"><img src="img/gallery_bn.png" /></a>
						<a href="#" class="control_prev"><img src="img/gallery_bp.png" /></a>-->
					
					<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="gallery_box switch square-thumb first-child" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_1" data-loc="Loc_1"/>
								</div>
								<div class="take_text">@WAIKIT_LAM</div>
							</div>
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_2" data-loc="Loc_2"/>
								</div>
								<div class="take_text">Name A</div>
							</div>
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_3" data-loc="Loc_3"/>
								</div>
								<div class="take_text">Name B</div>
							</div>	
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_4" data-loc="Loc_4"/>
								</div>
								<div class="take_text">Name C</div>
							</div>
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_5" data-loc="Loc_5"/>
								</div>
								<div class="take_text">Name C</div>
							</div>
							<div class="gallery_box switch square-thumb first-child" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_1" data-loc="Loc_1"/>
								</div>
								<div class="take_text">@WAIKIT_LAM</div>
							</div>
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_2" data-loc="Loc_2"/>
								</div>
								<div class="take_text">Name A</div>
							</div>
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_3" data-loc="Loc_3"/>
								</div>
								<div class="take_text">Name B</div>
							</div>	
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_4" data-loc="Loc_4"/>
								</div>
								<div class="take_text">Name C</div>
							</div>
							<div class="gallery_box switch square-thumb" gumby-trigger="#modal_box">
								<div class="thumbnailit">
									<img class="take_image" src="img/img_silence_demo.jpg" data-target="img/img_silence_demo.jpg" data-desc="Description_5" data-loc="Loc_5"/>
								</div>
								<div class="take_text">Name C</div>
							</div>
						</li>
						<li>Slider 2</li>
						<li>Slider 3</li>
						<li>Slider 4</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
				
		</div>
		
		<div class="modal" id="modal_box">
		  <div class="content" style="background:url('img/model_bg.png') no-repeat ; width:800px; height: 412px; padding:0; background-color:transparent;">
			<a class="close switch" gumby-trigger="|#modal_box"><img src="img/model_close.png" class="icon-cancel" style="margin-top:-20%;"/></a>
			<div class="row">
			  <div class="ten columns">
				<div class="four columns">
					<div class="modal_image">
						<div id="image_inherit"></div>
					</div>
				</div>
				<div class="six columns">
					<div class="modal_text">
						<p id="text_inherit"></p>
						<div class="modal_desc">
							<p id="modal_desc_inner" style="font-weight:light;"></p>
						</div>
						<div class="modal_desc_bottom">
							<p><i class="icon-location" style="float:left;"></i><p id="modal_loc" style="float:left;"></p></p>
						</div>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
				
		<div class="footer">
			<div class="footer_left">
				<p>&#169;&nbsp;2015 Oreo Malaysia.</p>
			</div>
			
			<div class="footer_right">
				<iframe src="//www.facebook.com/plugins/like.php?href=
				https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;
				width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;
				share=false&amp;height=35&amp;appId=857161417656277" scrolling="no" 
				frameborder="0" style="border:none; overflow:hidden; height:35px; float:left; margin-right: -12%;" 
				allowTransparency="true"></iframe>
				<p style="float: left; margin-left: -22%;">us on Facebook for more Oreo updates!</p>
				<p style="float: left; margin-left: 20px;" ><a class="hover_footer" href="faq.html" target="_blank" >FAQ</a></p>
				<p style="float: left; margin-left: 20px;"><a class="hover_footer" href="tnc.html" target="_blank" >Terms &amp; Conditions</a></p>
			</div>
		</div>
		
	</div>
	

	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	 
	<!-- End Here -->
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	

	<!-- Change UA-XXXXX-X to be your site's ID -->
	<!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

  </body>
</html>
