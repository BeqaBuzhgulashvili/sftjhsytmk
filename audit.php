<?php
    include "config.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<title>ItCrowd - აუდიტი</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/superslides.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body class="not-front page-post">
		<div id="main">
			<div class="header-wrapper">
				<div class="header-v2">
					<div class="container">
						<div class="header-inner clearfix">
							<header>
								<div class="logo_wrapper">
									<a href="index.html" class="logo">
										<img src="images/logo.png" width="100px;" alt="" class="img-fluid">
									</a>
								</div>
							</header>
							<div class="my_cart_wrapper">
								<div class="my_cart_button">
									<a href="#">
										<i aria-hidden="true"></i>
										<span><img src="en.png" style="width: 16px; border-radius: 50%;"></span>
									</a>
								</div>
								<div class="my_cart_popup">
									<div class="my_cart_buttons">
									<a href="a.php?lang=ka"  class="my_cart_button2">ქართული</a>
									 <a href="a.php?lang=en" class="my_cart_button2">english</a>
									</div>
								</div>
							</div>
							<nav class="navbar_ navbar navbar-expand-md clearfix">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="nav navbar-nav sf-menu clearfix">
										<li class="nav-item"><a href="index.php" class="nav-link"><?php echo $lang['home'] ?></a></li>
										<li class="nav-item"><a href="products.php" class="nav-link"><?php echo $lang['production'] ?></a></li>
										<li class="nav-item sub-menu"><a href="service.php" class="nav-link active"><?php echo $lang['service'] ?><i class="fa fa-caret-down" aria-hidden="true"></i></a>
											<div class="sf-mega">
												<ul>
													<li><a href="service.php"><?php echo $lang['IT-servise'] ?></a></li>
													<li><a href="audit.html"><?php echo $lang['Common Audit'] ?></a></li>
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
			</div>
			<div class="content-wrapper">
				<div class="content-lines-wrapper">
					<div class="content-lines-inner">
						<div class="content-lines"></div>
					</div>
				</div>
				<div class="content-inner">
					<div class="breadcrumbs1_wrapper">
						<div class="container">
							<div class="breadcrumbs1"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a><span>/</span><?php echo $lang['Common Audit'] ?></div>
						</div>
					</div>
					<div id="content" class="page-section">
						<div class="container">
							<div class="title1"><?php echo $lang['service'] ?></span></div>
							<div class="title2"><?php echo $lang['abouti'] ?></div>
							<br>
							<div class="title3"><?php echo $lang['title1'] ?></div>
							<br>
							<ul class="ul1">
								<li><?php echo $lang['compuiter'] ?></li>
								<li><?php echo $lang['server park'] ?></li>
								<li><?php echo $lang['safety'] ?></li>
								<li><?php echo $lang['creat'] ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrapper">
				<div class="bot1-wrapper">
					<div class="container">
						<div class="bot1 clearfix">
							<div class="logo2_wrapper">
								<a href="index.html" class="logo2">
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
								<li><?php echo $lang['Edited'] ?></li>
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
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>