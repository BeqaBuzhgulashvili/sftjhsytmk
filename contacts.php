<?php
    include "config.php";
?>
<!doctype php>
<php lang="en">
	<head>
		<title>ItCrowd - კონტაქტი</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/superslides.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<style type="text/css">
	@media screen and (max-width: 600px) {
  div.example {
background-color: red; 
 }
}.textCenter{
margin-left: auto;
margin-right: auto;
}
.form-control{
	max-height: 130px;
	min-height: 60px;
}
	</style>
	<body class="not-front page-contacts">
		<div id="main">
			<div class="header-wrapper">
				<div class="header-v2">
					<div class="container">
						<div class="header-inner clearfix">
							<header>
								<div class="logo_wrapper">
									<a href="index.php" class="logo">
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
										<a href="contacts.php?lang=ka"  class="my_cart_button2">ქართული</a>
									 <a href="contacts.php?lang=en" class="my_cart_button2">english</a>
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
										<li class="nav-item sub-menu"><a href="#" class="nav-link"><?php echo $lang['service'] ?> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
											<div class="sf-mega">
												<ul>
													<li><a href="service.php"><?php echo $lang['IT-servise'] ?></a></li>
													<li><a href="post.php"><?php echo $lang['Common Audit'] ?></a></li>
													<li><a href="details.php"><?php echo $lang['Consultation'] ?></a></li>
												</ul>
											</div>
										</li>
										<li class="nav-item"><a href="about.php" class="nav-link"><?php echo $lang['about us'] ?></a></li>
										<li class="nav-item"><a href="contacts.php" class="nav-link active"><?php echo $lang['contact'] ?></a></li>
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
							<div class="breadcrumbs1"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a><span>/</span><?php echo $lang['contact'] ?></div>
						</div>
					</div>
					<div id="content" class="page-section">
						<div class="container">
							<div class="example text-center"><h1><?php echo $lang['contact us'] ?></h1></div>

							<div class="title2"><?php echo $lang['Contact us any time'] ?></div>
							<br><br>
							<div class="row">
                            <div class="col-md-8 text-center textCenter">
                                <form id="ajax-contact-form" class="form-horizontal clearfix" action="javascript:;">
                                    <div class="row">
                                        <div class="col-md-5">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="inputName2">სახელი <span>*</span></label>
                                                        <input type="Email" class="form-control" id="inputName2" name="ნამე" value="" placeholder="<?php echo $lang['your email'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputName2"> <span>*</span></label>
                                                        <input type="text" class="form-control" id="inputName2" name="ნამე" value="" placeholder="<?php echo $lang['your name'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label for="inputEmail"> <span>*</span></label>
                                                        <input type="text" class="form-control" id="inputEmail" name="Email" value="" placeholder="<?php echo $lang['titlee'] ?>">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-7">

                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="inputName2"> <span>*</span></label>
                                                    <input type="tel" class="form-control" id="inputName2" name="ნამე" value="" placeholder="<?php echo $lang['your mobile'] ?>">
                                                </div>
                                                <label for="inputMessage2"> <span>*</span></label>
                                                <textarea class="form-control" rows="5" id="inputMessage2" name="content" placeholder="<?php echo $lang['send'] ?>"></textarea>
                                            </div>

                                        </div>

                                    </div>

                                    <button type="submit" class="btn1 btn-cf-submit"><?php echo $lang['send'] ?></button>
                                </form>
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
										<b>T:</b> (995) 322 19 25 24
									</div>
									<div class="contact1">
										<b>M:</b> (995) 577 79 80 19
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