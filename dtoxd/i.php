<?php ob_start();include("db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>eStartup Bootstrap Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

	<!-- Bootstrap css -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">


	<style>

		.pie {
	display: block;
	justify-content: space-between;
	width: 100%;
	height: 500px;
}
		.disabled{
			display: none;
		}	
		#accolades {
			height: 100vh;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-perspective: 1000px;
			perspective: 1000px;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
			position: relative;
			background-color: #fff;
			font-family: "Montserrat";
		}

		#accolades .container {
			min-width: 700px;
			min-height: 300px;
			border-radius: 20px;
			position: relative;
			-webkit-transition: 0.5s ease-in-out;
			transition: 0.5s ease-in-out;
			transform-style: preserve-3d;
		}

		.side {
			position: absolute;
			text-align: center;
			width: 100%;
			height: 100%;
			padding: 20px 50px;
			color: #fff;
			transform-style: preserve-3d;
			backface-visibility: hidden;
			border-radius: 20px;
		}

		#accolades .content {
			transform: translatez(70px) scale(0.8);
			line-height: 1.5em;
		}

		.content h1 {
			top: -20px;
			position: relative;
			color: black;
		}

		.content p {
			margin-top: 50px;
			line-height: 2em;
		}

		.content h1:before {
			content: "";
			position: absolute;
			bottom: -10px;
			height: 3px;
			background-color: #3e3;
			width: 70px;
			left: 50%;
			transform: translateX(-50%);
		}

		.front {
			z-index: 2;
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url(img/win.jpg);
		}

		.back {
			background-color: #333;
			transform: rotateY(180deg);
			z-index: 0;
			padding-top: 10px;
			background-image: url(img/win.jpg);
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

	#accolades	.container:hover {
			-webkit-transform: rotateY(180deg);
			transform: rotateY(180deg);
		}

	
		.back h1 {
			margin: 0;
		}
		p.acc  {
			color: white;
			font-size: 1.5vw;
		}
		li.acc  {
			color: white;
			font-size: 3vw;
		}

	

	*, *::after, *::before {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}


/*.cards {
  display: flex;
  justify-content: space-between;
}*/
.card {
  width: 100%;
  position: relative;
  height: 25em;
  perspective: 150em;
 
}

		h1.flip{
			top:-80px;
		}
	
.card__side {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 25em;
  backface-visibility: hidden;
  transition: all 0.6s ease;
  box-shadow: 1em 1em 2em rgba(0, 0, 0, .2);
}
.card__side--front {
  background-color: #fff;
}
.card__side--back {
  color: #fff;
  transform: rotateY(180deg);
}

.card:hover .card__side--front {
  transform: rotateY(-180deg);
}
.card:hover .card__side--back {
  transform: rotate(0);
}
.card__description {
  text-transform: uppercase;
  font-size: 5em;
  padding: 1em 0;
}
.card__description svg {
  width: 1.5em;
  height: 1.5em;
  fill: #fff;
}


		
		
	</style>

</head>

<body><br><br>

	<header id="header" class="header header-hide">
		<div class="container">

			<div id="logo" class="pull-left">
				<h1><a href="#hero" class="scrollto"><span>D</span>TOXD</a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="#hero">Home</a></li>
					<li><a href="#get-started">Problem</a></li>
					<li><a href="#statics">Statics</a></li>
					<li><a href="#vid">Solution</a></li>
					<li><a href="#testimonials">Features</a></li>
					<li><a href="#accolades">Accolades</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</header><!-- #header -->




	<!--==========================
    Hero Section
  ============================-->
	<section id="hero" class="wow fadeIn">
		<div class="hero-container">
			<h1>Welcome to DTOXD</h1>
			<h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
			<img src="img/hero-img.png" alt="Hero Imgs">
			<a href="#get-started" class="btn-get-started scrollto">Get Started</a>
		</div>
	</section><!-- #hero -->

	<!--==========================
    Get Started Section
  ============================-->
	<section id="get-started" class="content padd-section text-center wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4">
					<div class="card">
						<div class="card__side card__side--front card__side--front-1">
							<div class="card__description">
								<h1 class="flip">Cyber Bullying</h1> <img src="img/cyberbullying.jpg" alt="Avatar" style="width:300px;height:250px;">
							</div>
						</div>
						<div class="card__side card__side--back card__side--back-1">
							<div class="card__description">

								<h1 class="flip mb-0">Cyber Bullying</h1>
								<p class="mt-0">The Available Contents Vary A Lot Depending On The Websites And There Is No Effective Identity Checking Technique Available As Of Now. There Might Also Be Scenarios Where The Inappropriate Contents, Which Are Not Be Suitable For Users Like Kids, Are Present Offline On The User's Device.
								</p>
							</div>

						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="col-md-3 col-lg-4">
					<div class="card">
						<div class="card__side card__side--front card__side--front-2">
							<div class="card__description">
								<h1 class="flip">Inappropriate content</h1><img src="img/inapproriate_content.jpg" alt="Avatar" style="width:300px;height:200px;">
							</div>
						</div>
						<div class="card__side card__side--back card__side--back-2">
							<div class="card__description">
								<h1 class="flip mb-0">Inappropriate content</h1>
								<p class="mt-0">The Available Contents Vary A Lot Depending On The Websites And There Is No Effective Identity Checking Technique Available As Of Now. There Might Also Be Scenarios Where The Inappropriate Contents, Which Are Not Be Suitable For Users Like Kids, Are Present Offline On The User's Device.
								</p>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="col-md-4 col-lg-4">
					<div class="card">
						<div class="card__side card__side--front card__side--front-1">
							<div class="card__description">
								<h1 class="flip">Cyber Bullying</h1> <img src="img/cyberbullying.jpg" alt="Avatar" style="width:300px;height:250px;">
							</div>
						</div>
						<div class="card__side card__side--back card__side--back-1">
							<div class="card__description">
								<h1 class="flip mb-0">Cyber Bullying</h1>
								<p class="mt-0">The Available Contents Vary A Lot Depending On The Websites And There Is No Effective Identity Checking Technique Available As Of Now. There Might Also Be Scenarios Where The Inappropriate Contents, Which Are Not Be Suitable For Users Like Kids, Are Present Offline On The User's Device.
								</p>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>



	<section id="statics">
		<div class="content">
			<div class="report-overview-module">
			
				<div class="section-title text-center">

					<h2>Staticis</h2>
					<div id="piechart_3d" class="pie" ></div>
				</div>
				
			</div>
		</div>
	</section>


	<!--==========================
    Video Section
  ============================-->

	<div id="vid" class="section-title text-center">
		<h2>Solution</h2>
	</div>
	<section id="video" class="text-center wow fadeInUp">

		<div class="overlay">
			<div class="container-fluid container-full">
				<div class="row">

					<a href="#" class="js-modal-btn play-btn" data-video-id="yTmad-fyxxA"></a>
				</div>

			</div>
		</div>
	</section>

	<!--==========================
    Testimonials Section
  ============================-->
	<div id="acc" class="section-title text-center mt-5 mb-0">
		<h2>Concept</h2>

	</div>

	<section id="testimonials" class="padd-section text-center wow fadeInUp">
		<div class="container">

			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="testimonials-content">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

							<div class="carousel-inner" role="listbox">

								<div class="carousel-item  active">
									<div class="top-top">
										<img height="200px" width="400px" src="img/deep_learning.jpeg" alt="Image">
										<h2>USE OF DEEP LEARNING</h2>
										<p>The purpose of this system is to create a safe environment for the users that prevents exposure to any type of obscene content. Using deep learning, the main aim of the system is to provide a system environment that allows to prevent accidental or deliberate exposure to any type of obscene content. We are proposing an application which performs content-based censoring using CNN. </p>

									</div>
								</div>

								<div class="carousel-item ">
									<div class="top-top">
										<img height="200px" width="400px" src="img/censored.jpg" alt="Image">
										<h2>Block access/Censor</h2>
										<p>If any content is found to be explicit, then the system will block access on the file system level. The System will install an extension package on browsers installed in the computer system. The system will censor the content accessed online on the browser and the files accessed from the offline storage on the local disk storage</p>


									</div>
								</div>

								<div class="carousel-item ">
									<div class="top-top">
										<img height="250px" width="400px" src="img/safetyfirst-e1422394317240.jpg" alt="Image">
										<h2>Achieve safe environment</h2>
										<p>The primary objective of this system is to enforce an environment that prevents an accidental or deliberate exposure to the user. The user will not be able to access any explicit or objectionable content either offline or online over the internet. Ultimately this software can be used as a protective shield against the exposure to any type of explicit content.
										</p>


									</div>
								</div>

							</div>

							<div class="btm-btm">

								<ul class="list-unstyled carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ul>

							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!--==========================
    About Us Section
  ============================-->

	<section id="accolades" lass="about-us padd-section wow fadeInUp mt-0">
		<div class="container">
			<div class="section-title text-center">

				<h2>Accolades</h2>


			</div>
			<div class="front side">
				<div class="content">
					<h1 style="color:white"><span>SIES Project Exhibition</span><br>2nd Prize</h1>
					<br>

					<p class="acc">Our project won second prize at SIES project exhibition. Various parameters were considered while judging the projects. Our idea of project was unique and it will be beneficial to the society which gave it an edge over other projects.
					</p>
				</div>
			</div>
			<div class="back side">
				<div class="content">
					<h1>Motive of our Topic</h1>
					<br><br>
					<ul class="list-unstyled">
						<li class="acc"><i class="fa fa-angle-right"></i>Creative Idea</li><br>
						<li class="acc"><i class="fa fa-angle-right"></i>Beneficial society</li><br>
						<li class="acc"><i class="fa fa-angle-right"></i>Easy to Use</li><br>

					</ul>
				</div>
			</div>

		</div>
	</section>





	<!--==========================
    Team Section
  ============================-->
	<section id="team" class="padd-section text-center wow fadeInUp ">

		<div class="container">
			<div class="section-title text-center">

				<h2>Team Member</h2>
				<p class="separator">Integer cursus bibendum augue ac cursus .</p>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-4 col-lg-3">
					<div class="team-block bottom">
						<img src="img/team/1.jpeg" class="img-responsive" alt="img">
						<div class="team-content">
							<ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<span>CEO</span>
							<h4>Harshit Rai</h4>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-md-4 col-lg-3">
					<div class="team-block bottom">
						<img src="img/team/" class="img-responsive" alt="Comming Soon">
						<div class="team-content">
							<ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<span>CTO</span>
							<h4>Prathamesh P</h4>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-md-4 col-lg-3">
					<div class="team-block bottom">
						<img src="img/team/3.jpeg" class="img-responsive" alt="img">
						<div class="team-content">
							<ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<span>Developer</span>
							<h4>Vishwas Singh</h4>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-md-4 col-lg-3">
					<div class="team-block bottom">
						<img src="img/team/4.jpeg" class="img-responsive" alt="img">
						<div class="team-content">
							<ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<span>Developer</span>
							<h4>Vinay Vishwakarma</h4>
						</div>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row text-center">
				<div class="col-md-6 col-md-4 col-lg-3">
					<div class="team-block bottom">
						<img src="img/team/2.jpg" class="img-responsive" alt="img">
						<div class="team-content">
							<ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<span>Developer</span>
							<h4>Lalit Sinnarkar</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>






	<!--==========================
    Blog Section
  ============================-->
	<section id="blog" class="padd-section wow fadeInUp">

		<div class="container">
			<div class="section-title text-center">

				<h2>Latest posts</h2>
				<p class="separator">Integer cursus bibendum augue ac cursus .</p>

			</div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-md-6 col-lg-4">
					<div class="block-blog text-left">
						<a href="#"><img src="img/blog/blog-image-1.jpg" alt="img"></a>
						<div class="content-blog">
							<h4><a href="#">whats isthe difference between good and bat typography</a></h4>
							<span>05, juin 2017</span>
							<a class="pull-right readmore" href="#">read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="block-blog text-left">
						<a href="#"><img src="img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
						<div class="content-blog">
							<h4><a href="#">whats isthe difference between good and bat typography</a></h4>
							<span>05, juin 2017</span>
							<a class="pull-right readmore" href="#">read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="block-blog text-left">
						<a href="#"><img src="img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
						<div class="content-blog">
							<h4><a href="#">whats isthe difference between good and bat typography</a></h4>
							<span>05, juin 2017</span>
							<a class="pull-right readmore" href="#">read more</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!--==========================
    Newsletter Section
  ============================-->
	<section id="newsletter" class="newsletter text-center wow fadeInUp">
		<div class="overlay padd-section">
			<div class="container">

				<?php
    if (isset($_POST['esubmit'])){
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$sql = "select * from `subscribe` where email = '$email'";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count == 0 ){
        $query = "INSERT into `subscribe` ( email) VALUES ('$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3></div>";
    }else{
			 echo "<div class='form' ><h3>Something went wrong plz try again later</h3></div>";
		}
        }else{
			echo "<div class='form' ><h3>You are already registered</h3></div>";
		}
	}
?>
				<div class="row justify-content-center">
					<div class="col-md-9 col-lg-6">
						<form class="form-inline" method="POST" action="">

							<input required type="email" name="email" class="form-control " placeholder="Email Adress" name="email">
							<button type="submit" name="esubmit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

						</form>

					</div>
				</div>

				<ul class="list-unstyled">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>


			</div>
		</div>
	</section>

	<!--==========================
    Contact Section
  ============================-->
	<section id="contact" class="padd-section wow fadeInUp">

		<div class="container">
			<div class="section-title text-center">
				<h2>Contact</h2>
				<p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-center">

				<div class="col-lg-3 col-md-4">

					<div class="info">
						<div>
							<i class="fa fa-map-marker"></i>
							<p>A108 Adam Street<br>New York, NY 535022</p>
						</div>

						<div class="email">
							<i class="fa fa-envelope"></i>
							<p>info@example.com</p>
						</div>

						<div>
							<i class="fa fa-phone"></i>
							<p>+1 5589 55488 55s</p>
						</div>
					</div>

					<div class="social-links">
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
					</div>

				</div>



				<div class="col-lg-5 col-md-8">
					<div class="form">
						<div class="msg">
							<div id="sendmessage">Your message has been sent. Thank you!</div>
							<div id="errormessage">Error</div>
							<?php
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
		$name = stripslashes($_POST['name']);
		 $name = mysqli_real_escape_string($con,$name);
		$email = stripslashes($_REQUEST['email']);
		 $email = mysqli_real_escape_string($con,$email);
		$subject = stripslashes($_REQUEST['subject']);
		 $subject = mysqli_real_escape_string($con,$subject);
		$msg = stripslashes($_REQUEST['message']);
		 $msg = mysqli_real_escape_string($con,$msg);
		$sql = "select * from `subscribe` where email = '$email'";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count == 0 ){
        $query = "INSERT INTO `contact` (`name`, `email`, `subject`, `msg`) VALUES ( '$name', '$email', '$subject', '$msg');";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3></div>";
    }else{
			 echo "<div class='form' ><h3>Something went wrong plz try again later</h3></div>";
		}
		}else{
			 echo "<div class='form' ><h3>You are already registered</h3></div>";
		}
        }
	?>
						</div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>
							<div class="text-center"><button name="submit" type="submit">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- #contact -->

	<!--==========================
    Footer
  ============================-->
	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-lg-4">
					<div class="footer-logo">

						<a class="navbar-brand" href="#">eStartup</a>

					</div>
				</div>

				<div class="col-sm-6 col-md-3 col-lg-2">
					<div class="list-menu">

						<h4>Abou Us</h4>

						<ul class="list-unstyled">
							<li><a href="#">About us</a></li>
							<li><a href="#">Features item</a></li>
							<li><a href="#">Live streaming</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>

					</div>
				</div>

				<div class="col-sm-6 col-md-3 col-lg-2">
					<div class="list-menu">

						<h4>Abou Us</h4>

						<ul class="list-unstyled">
							<li><a href="#">About us</a></li>
							<li><a href="#">Features item</a></li>
							<li><a href="#">Live streaming</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>

					</div>
				</div>

				<div class="col-sm-6 col-md-3 col-lg-2">
					<div class="list-menu">

						<h4>Support</h4>

						<ul class="list-unstyled">
							<li><a href="#">faq</a></li>
							<li><a href="#">Editor help</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>

					</div>
				</div>

				<div class="col-sm-6 col-md-3 col-lg-2">
					<div class="list-menu">

						<h4>Abou Us</h4>

						<ul class="list-unstyled">
							<li><a href="#">About us</a></li>
							<li><a href="#">Features item</a></li>
							<li><a href="#">Live streaming</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>

					</div>
				</div>

			</div>
		</div>



	</footer>
	<!--BOT-->

	<!---END BOT--->

	<div href="#" class="chat-bot"><i class="fa fa-comment"><iframe class="disabled" allow="microphone;" width="350" height="430" src="https://console.dialogflow.com/api-client/demo/embedded/de3fa892-a601-4e2e-9c56-4853859386dd">
			</iframe></i></div>

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<a href="javascript: window.parent.closeIframe()"><i class="fa fa-close"></i></a>


	<!-- JavaScript Libraries -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/jquery/jquery-migrate.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="lib/superfish/hoverIntent.js"></script>
	<script src="lib/superfish/superfish.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/modal-video/js/modal-video.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/wow/wow.min.js"></script>
	<!-- Contact Form JavaScript File -->
	<script src="contactform/contactform.js"></script>

	<!-- Template Main Javascript File -->
	<script src="js/main.js"></script>
	<script src="js/statistics.js"></script>
	<script>
		$(document).ready(function() {
			function closeIframe() {
				var iframe = document.getElementById('someid');
				iframe.parentNode.removeChild(iframe);
			}

			$('.chat-bot').on('click', function() {


				$('iframe.disabled').addClass('open');
				$('iframe.disabled').removeClass('disabled');



			});

		});

	</script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load("current", {
			packages: ["corechart"]
		});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['SexContent', 'Total share'],
				['Internet Sex', 11],
				['Sex on television', 2],
				['Newspaper sex', 2],
				['Erotica', 2],
				['Mobile sex', 7]
			]);

			var options = {
				title: 'Sources of explicit content',
				is3D: true,
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
			chart.draw(data, options);
		}

	</script>

</body>

</html>
