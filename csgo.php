
<!DOCTYPE html>
<html lang="en">
	<head>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

		<?php include 'database.php'; ?>

		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>LanParty 2019</title>

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
<style>
.prijava_btn{
  width: 100%;
  border: none;

}
.prijava_btn:hover{
  color: #ccc;


}
input::placeholder{
  color: #ccc;
}
input[type=text]{
  border: none !important;
  border-bottom: 1px #bbb solid !important;
  padding: 2px;
  margin: 5px;
  margin-bottom: 0px;
}
table{
    width: 100vh;
}
.pobarvanka:hover{
    background-color: #d73e4d;
    transition: background-color 0.2s linear;
}
.pobarvanka{
    background-color: transparent;
    transition: background-color 0.2s linear;
}
	input[type=text]:focus{

			border-color: white !important;
			border-width: 1.5px !important;
		}

		input:-webkit-autofill,
		input:-webkit-autofill:hover,
		input:-webkit-autofill:focus,
		input:-webkit-autofill:active  {
    -webkit-box-shadow: 0 0 0 0px transparent inset;
}
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
    -webkit-transition: "color 9999s ease-out, background-color 9999s ease-out";
    -webkit-transition-delay: 9999s;
}
</style>
	</head>

	<body>
		<div class="main-page-wrapper">



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<?php
				include_once('./header.php');
			?>


			<!--
			=====================================================
				Theme Main SLider
			=====================================================
			-->
			<div id="home" class="banner">
	        	<div class="rev_slider_wrapper">
					<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
						<div id="main-banner-slider" class="rev_slider video-slider" data-version="5.0.7">
							<ul>

								<!-- SLIDE1  -->
								<li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-title="Title Goes Here" data-description="">
									<!-- MAIN IMAGE -->
									<img src="https://i.redd.it/7oxe2g7t0y411.jpg" alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
									<!-- LAYERS -->

									<!-- LAYER NR. 1 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['-58','-58','0','-50']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1200;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="500"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 6; white-space: nowrap;">

                    <style media="screen">

                      *{
                        margin:0px;
                        padding:0px;
                        color: white;
                      }
                      input{
                        background-color: rgba(0, 0, 0, 0);
                        border:1px solid white;

                      }

                      .vrsta{
                        padding: 10px;
                      }

                      h1{
                        text-align: center;
                        color: white;
                      }

                      .box{
                        padding: 10px;
                        text-align: center;
                      }
                    </style>



                    <div class="box" style="margin-top:5%;margin-bottom:8%;">
                      <div class="naslov" style="margin-top:5%;">
                      <h1>CS:GO</h1>
                      </div>
										</div>

                    <form class="forma" action="team_insert.php" method="post">
                      <table border="0" style="text-align: center;">
												<?php
												if(isset($_GET['id'])){
													if ($_GET['id'] == 2) {
														?>
														<tr> <td colspan="3" style="color: red; text-weight: bold;"> team name alredy taken </td></tr>
														<?php
														}

													}
												 ?>
										<tr> <td colspan="3"> <p>Ime ekipe: <input style="margin-bottom: 20px;" type="text" name="ime_ekipe" value="" placeholder="Ime ekipe"></p>
									</table>

									<hr>

									<table border="0" style="text-align: center; max-width: 80% !important">
                    <tr> <td> <p class="vrsta">Igralec st.1: <input type="text" name="player1" value="" placeholder="Steam name" style="color: white;" required> </td><td> <input type="text" name="ime1" value="" placeholder="Ime" required> </td><td> <input type="text" name="priimek1" value="" placeholder="Priimek" required> </p> </td></tr>
										<tr> <td> <p class="vrsta">Igralec st.2: <input type="text" name="player2" value="" placeholder="Steam name" required> </td><td> <input type="text" name="ime2" value="" placeholder="Ime" required> </td><td> <input type="text" name="priimek2" value="" placeholder="Priimek" required> </p> </td></tr>
										<tr> <td>	<p class="vrsta">Igralec st.3: <input type="text" name="player3" value="" placeholder="Steam name" required> </td><td> <input type="text" name="ime3" value="" placeholder="Ime" required> </td><td> <input type="text" name="priimek3" value="" placeholder="Priimek" required> </p> </td></tr>
										<tr> <td> <p class="vrsta">Igralec st.4: <input type="text" name="player4" value="" placeholder="Steam name" required> </td><td> <input type="text" name="ime4" value="" placeholder="Ime" required> </td><td> <input type="text" name="priimek4" value="" placeholder="Priimek" required> </p> </td></tr>
										<tr> <td>	<p class="vrsta">Igralec st.5: <input type="text" name="player5" value="" placeholder="Steam name" required> </td><td> <input type="text" name="ime5" value="" placeholder="Ime" required> </td><td> <input type="text" name="priimek5" value="" placeholder="Priimek" required> </p> </td></tr>
										<tr>	<input type="hidden" value="2" name="game_id"/>
                    <tr> <td colspan="3"> <p> <input class="project-button hvr-bounce-to-right pobarvanka" type="submit" name="submit_btn" value="Prijavi"> </p> </td></tr>
										</table>
                    </form>






									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['-05','-05','63','0']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="2000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 6; white-space: nowrap;">
									</div>


									<!-- LAYER NR. 3 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['52','52','125','80']"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="3000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on">







									</div>


								</li>




									<!-- BACKGROUND VIDEO LAYER -->
									<div class="rs-background-video-layer"
										data-forcerewind="on"
										data-volume="mute"
										data-videowidth="100%"
										data-videoheight="100%"
										data-videomp4="video/Drink-Wine.mp4"
										data-videopreload="preload"
										data-videoloop="loopandnoslidestop"
										data-forceCover="1"
										data-aspectratio="16:9"
										data-autoplay="true"
										data-autoplayonlyfirsttime="false"
										data-nextslideatend="true"
									></div>



									<!-- LAYER NR. 2 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['-05','93','93','20']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="2000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on"
										style="z-index: 6; white-space: nowrap;">
										<h6>Sub Head, Motto or Mission subtitle</h6>
									</div>


									<!-- LAYER NR. 3 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']"
										data-transform_idle="o:1;"

										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
										data-mask_in="x:0px;y:[100%];"
										data-mask_out="x:inherit;y:inherit;"
										data-start="3000"
										data-splitin="none"
										data-splitout="none"
										data-responsive_offset="on">
										<a href="contact-us.html" class="project-button hvr-bounce-to-right">See Our Projects</a>
									</div>
								</li>
							</ul>
						</div>
					</div><!-- END REVOLUTION SLIDER -->
	        </div> <!--  /#banner -->



	        <!--
			=====================================================
				About us Section
			=====================================================
			-->
			<section id="about-us">
				<div class="container">
					<div class="theme-title">
					
					</div> <!-- /.theme-title -->


				</div> <!-- /.container -->
			</section> <!-- /#about-us -->



	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->

		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.video.min.js"></script>

		<!-- Google map js -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="vendor/gmaps.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
