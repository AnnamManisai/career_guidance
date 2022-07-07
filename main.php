<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
        <!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url('./img/back.jpg'); width:100%; height: 656px;"></div>
			<!-- Background Image of homepage end :) -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							<h1 class="white-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">Career Guidance</h1>
							
							<?php
								// Checking user login status or redirecting to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Discover yourself<br>Go Through all the job roles choose what you like the most</b></p>

									<a class="main-button icon-button" href="login.php">Get Started!</a>

								<?php else: ?>
									<p class="lead white-text" style="margin-left: 5px;" ><b>Hey, <?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Discover yourself,<br>Go Through all the job roles choose what you like the most and improve skills according to your role,we have provided free resources fo you :) </b></p>

									<a class="main-button icon-button" href="http://127.0.0.1/career%20guidance/blog.php">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->



        <!-- Welcome info -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Career Guidance(Mini Project)</h2>
						<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>
						<p class="lead"><b style="color: rgb(56, 48, 48);">Career Guidance</b> is one stop destination <br>in helping you understand yourself, the best career for you <br> and providing all the resources in the process.</p>
					</div>
				</div>	

				<div class="row">
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="#" >
								<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="login.php"><h4>Career Knowledge</h4></a>
								<?php else: ?>
									<a href="http://127.0.0.1/career%20guidance/contact.php"><h4>Get in Touch</h4></a>
									
								
							<?php endif ?>
								
								<p>For more information call us or email us see you there :)</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="blog.php" >
								<h4>Knowledge Network</h4>
								</a>
								<p>Gain knowledge through various sources, like important informational links, access to study materials, etc.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="courses.php" >
								<h4>Online Courses</h4>
								</a>
								<p>Links to relevant Courses.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
									
				</div>
				<!-- /row -->
				
				<hr class="section-hr">

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Call To Action -->
		<div id="cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgmid.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
					
						
							<?php
								// Check if the user is logged in, if not then redirect him to login page
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

									<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
									<p class="lead white-text" >We Create Beautiful Experiences
										That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="register.php">Get Started!</a>
								<?php else: ?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b></h2>

								<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
								<p class="lead white-text" >We Create Beautiful Experiences
									That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="main.php">Get Started!</a>
									
							<?php endif ?>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">About Career Guidance</h2>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">i am manisai, this is mini project of 6 sem. let's dive into the topic Education seekers get a personalised experience on this site, based on career interest, enabling them to make well informed course and career decisions. 
							my main motive is "if you have right Knowledge and right Guidance you can achieve anything.
							that's this website is here for you you don't need to go through different and hundreds of websites pages to search right job role or to learn right skill for the job, i just provided 
							the knowledge necessary on different job roles and skills you need to learn to get the job, so feel free to wonder around and choose right one for you. </p>
							
						</div>

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/about.png" alt="">
						</div>
					</div>

				</div>
				<!-- row -->
				<hr class="section-hr">
			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section" style="height: 400px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Help us to get to know you.</p>
						<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

<?php include 'footer.php'?>
</html>
