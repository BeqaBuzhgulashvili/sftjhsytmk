<?php
    include "config.php";
?>
<!doctype php>
<!doctype php>
<php lang="ka">
	<head>
		<title>ItCrowd - მთავარი</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/superslides.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style type="text/css">
			.button{
				border: none;
				background: none;
				margin-top: 30px;
			}
			.border-class{
      border: solid;
      width: auto;
      border-width: thin;
      height: 255px;
      padding-top: 4%;
      margin: 10px;

}
.button2{
	border: none;
	background: none;
}
.img-fluid{
	height: 50px;
}
		</style>
	</head>
	<body class="front">
		<div id="main">
			<div class="header-wrapper">
				<div class="header-v1">
					<div class="header-inner clearfix">
						<header>
							<div class="logo_wrapper">
								<a href="index.php" class="logo">
									<img src="images/logo.png" width="100px;" alt="" class="img-fluid">
								</a>
							</div>
						</header>
						<div class="phone1"><a href="tel://995577798019">(+995) 577 79 80 19</a></div>
						<div class="my_cart_wrapper">
							<div class="my_cart_button">
								<a href="#">
									<i aria-hidden="true"></i>
									<span><img src="en.png" style="width: 16px; border-radius: 50%;"></span>
								</a>
							</div>
							<div class="my_cart_popup">
								<div class="my_cart_buttons">
									 <a href="index.php?lang=ka"  class="my_cart_button2">ქართული</a>
									 <a href="index.php?lang=en" class="my_cart_button2">english</a>
								</div>
							</div>
						</div>
						<nav class="navbar_ navbar navbar-expand-md clearfix">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="nav navbar-nav sf-menu clearfix">
									<li class="nav-item"><a href="index.php" class="nav-link active"><?php echo $lang['home'] ?></a></li>
									<li class="nav-item"><a href="products.php" class="nav-link"><?php echo $lang['production'] ?></a></li>
									<li class="nav-item sub-menu"><a href="#" class="nav-link"><?php echo $lang['service'] ?> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
										<div class="sf-mega">
											<ul>
												<li><a href="service.php"><?php echo $lang['IT-servise'] ?></a></li>
												<li><a href="audit.php"><?php echo $lang['Common Audit'] ?></a></li>
												<li><a href="consultation.php"><?php echo $lang['Consultation'] ?></a></li>
											</ul>
										</div>
									</li>
									<li class="nav-item"><a href="about.php" class="nav-link"><?php echo $lang['about us'] ?></a></li>
									<li class="nav-item"><a href="contacts.php" class="nav-link"><?php echo $lang['contact'] ?></a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="content-wrapper">
				<div class="content-lines-wrapper">
					<div class="content-lines-inner">
						<div class="content-lines"></div>
					</div>
				</div>
				<div class="content-inner">
					<div id="home" class="">
						<div id="slides_wrapper" class="">
							<div id="slides">
								<ul class="slides-container">
									<li>
										<img src="http://via.placeholder.com/1740x1001" alt="" class="img">
										<div class="caption">
											<div class="">
												<div class="txt1"><?php echo $lang['Professionalism and low prices'] ?></div>
												<div class="txt2"><?php echo $lang['IT support'] ?><br><span>&</span> <?php echo $lang['service'] ?></div>
												<div class="txt3"><?php echo $lang['For Small and Medium companies'] ?></div>
												<div class="link1"><a href="contacts.php" class="btn1"><?php echo $lang['contact us'] ?></a></div>
											</div>
										</div>
									</li>
									<li>
										<img src="http://via.placeholder.com/1740x1001" alt="" class="img">
										<div class="caption">
											<div class="">
												<div class="txt1">24 საათი დღეში</div>
												<div class="txt2"><?php echo $lang['IT Consultation'] ?><br><span>&</span> SERVICES</div>
												<div class="txt3"><?php echo $lang['For Small and Medium companies'] ?></div>
												<div class="link1"><a href="contacts.php" class="btn1"><?php echo $lang['contact us'] ?></a></div>
											</div>
										</div>
									</li>
									<li>
										<img src="http://via.placeholder.com/1740x1001" alt="" class="img">
										<div class="caption">
											<div class="">
												<div class="txt1"><?php echo $lang['7 days a week'] ?></div>
												<div class="txt2"><?php echo $lang['IT Audit'] ?>
<br><span>&</span><?php echo $lang['SERVICES'] ?></div>
												<div class="txt3"><?php echo $lang['For Small and Medium companies'] ?></div>
												<div class="link1"><a href="contacts.php" class="btn1"><?php echo $lang['contact us'] ?></a></div>
											</div>
										</div>
									</li>
								</ul>
								<nav class="slides-navigation">
									<a href="#" class="prev"><?php echo $lang['prev'] ?></a></a><span>|</span><a href="#" class="next"><?php echo $lang['next'] ?></a>
								</nav>
							</div>
						</div>
						<div class="left-panel">
							<div class="social-left-txt">follow us</div>
							<ul class="social-left clearfix">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div id="about" class="page-section">
						<div class="back-txt">about</div>
						<div class="container">
							<h2><?php echo $lang['about1'] ?></h2>
							<h2><?php echo $lang['about2'] ?></h2>
							<div class="title2"><br><?php echo $lang['about2'] ?><br>
								<button class="button">
								<a href="contacts.php" class="btn1"><?php echo $lang['contact us'] ?></a>
								</button>


							</div>
						</div>
					</div>
						<br><br>
						<div class="row">
                <div class="container">
        <div class="row">
            <div class="col border-class text-center">
                <i class="fa fa-cog" aria-hidden="true" style="font-size: 50px"></i>
                <h3><?php echo $lang['IT-servise'] ?></h3>
                <p><?php echo $lang['IT-servise-title'] ?>
                </p>
                <button class="button2">
                <a href="service.php" class="btn1"><?php echo $lang['learn-more'] ?></a></h6>
                	
                </button>

            </div>
            <div class="col border-class text-center">
                <i class="fa fa-check" aria-hidden="true" style="font-size: 50px"></i>
                <h3><?php echo $lang['Common Audit'] ?></h3>
                <p><?php echo $lang['Common-Audit-title'] ?></p>
                <button class="button2">
                <a href="audit.php" class="btn1"><?php echo $lang['learn-more'] ?></a></h6>
                	
                </button></h6>
            </div>
            <div class="col border-class text-center">
                <i class="fa fa-users" aria-hidden="true" style="font-size: 50px;"></i>
                <h3><?php echo $lang['Consultation'] ?></h3>
                <p><?php echo $lang['IT-Consultatio'] ?></p>
               <button class="button2">
                <a href="consultation.php" class="btn1"><?php echo $lang['learn-more'] ?></a></h6>
                	
                </button></h6>

            </div>
        </div>
    </div>
          </div>
					<div id="years" class="page-section">
						<div class="back-txt">bureau</div>
						<div class="container">
							<div class="year-wrapper">
								
							</div>
							<div class="title1"><h2><?php echo $lang['about'] ?> <span><?php echo $lang['us'] ?></span></div>
							<div class="title2"><h2><?php echo $lang['Who we are'] ?></h2><br><?php echo $lang['about-us-title'] ?></div>
						</div>
					</div>
						
							
					<div class="percentages">
						<div class="container">
							<div class="percentages-inner clearfix">
							<div class="title1"><?php echo $lang['our'] ?><span><?php echo $lang['team'] ?></span></div>
								<div class="row">
									<div class="col-md-6">
										<div class="percentage1">
											<div class="txt1"><?php echo $lang['iT-Managers'] ?>
</div>
											<div class="txt2"><?php echo $lang['IT-Project'] ?>

</div>
											<div class="bg">
												<div class="animated-distance" data-num="95" data-duration="1900" data-animation-delay="0"><span></span></div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="percentage1">
											<div class="txt1"><?php echo $lang['Cruelties'] ?></div>
											<div class="txt2"><?php echo $lang['Servers'] ?></div>
											<div class="bg">
												<div class="animated-distance" data-num="87" data-duration="1900" data-animation-delay="100"><span></span></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="percentage1">
											<div class="txt1"><?php echo $lang['NETWORKERS'] ?></div>
											<div class="txt2"><?php echo $lang['Network'] ?>

</div>
											<div class="bg">
												<div class="animated-distance" data-num="90" data-duration="1900" data-animation-delay="200"><span></span></div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="percentage1">
											<div class="txt1"><?php echo $lang['troubleshooter'] ?></div>
											<div class="txt2"><?php echo $lang['Computers'] ?></div>
											<div class="bg">
												<div class="animated-distance" data-num="85" data-duration="1900" data-animation-delay="300"><span></span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="google_map"></div>
				</div>
			</div>
			<div class="footer-wrapper">
				<div class="bot1-wrapper">
					<div class="container">
						<div class="bot1 clearfix">
							<div class="logo2_wrapper">
								<a href="index.php" class="logo2">
									<img src="images/logo2.png" alt="" class="img-fluid">
								</a>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p>
										<?php echo $lang['IT Services & Support'] ?>
										

									</p>
									<ul class="best1 clearfix">
										<li><a href="http://www.top.ge/index.php?h=106442#106442" target="_blank"><img src="t1.png" alt="" class="img-fluid"></a></li>
									</ul>
								</div>
								<div class="col-md-4">
									<div class="contact1">
										<b>A:</b> 40 Baria Sreet 133/2 NewYork City, US
									</div>
									<div class="contact1">
										<b>T:</b> (+995) 322 19 25 24
									</div>
									<div class="contact1">
										<b>M:</b> (+995) 577 79 80 19
									</div>
									<div class="contact1">
										<b>E:</b> <a href="mailto:service@itcrowd.ge">service@itcrowd.ge</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="social-footer-wrapper">
										<ul class="social-footer clearfix">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bot2-wrapper">
					<div class="container">
						<div class="bot2 clearfix">
							<ul class="menu-bot">
								<p><?php echo $lang['Edited'] ?></p>
							</ul>
<p id="demo">
								<script>
                                 var d = new Date();
                                 document.getElementById("demo").innerHTML = d.getFullYear();
                                </script><?php echo $lang['all rights reserved'] ?>
                             </p>
<div class="to-top-wrapper"><a href="#" class="totop"></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.superslides.js"></script>
		<script src="js/jquery.fancybox.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA85u2f3GPNnJhIJeggViAfB8zMkUbCHNE"></script>
		<script src="js/googlemap.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</php>