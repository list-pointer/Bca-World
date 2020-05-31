<!DOCTYPE html>
<html lang="en">

<head>

	<!-- important meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>THE BCA WORLD</title>

	<!-- Favicon-->
	<link rel="shortcut icon" href="IMG/favicon/favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<!--font awesome-->
	<link rel="stylesheet" href="CSS/font awesome/css/font-awesome.min.css">

	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="CSS/Bootstrap/bootstrap.css">

	<!-- owl-carousel-->
	<link rel="stylesheet" href="CSS/Owl-Carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="CSS/Owl-Carousel/owl.theme.default.min.css">

	<!--responsive tabs CSS-->
	<link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/docs.css">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

	<!-- section for nav bar-->
	<section id="nav">

		<nav class="navbar navbar-fixed-top navbar-deafult">
			<div class="container-fluid">
				<div class="site-nav-wrapper">
					<div class="logo">
						<a href="index.php">
							<h2 class="logo-text"><span>BCA</span>&nbsp;WORLD</h2>
						</a>
					</div>

					<!-- Main Menu -->
					<div class="container">
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav pull left">
								<li>
									<div class="dropdown">
										<button class="dropbtn" style="padding: 16px;"><a href="index.php">HOME</a></button>
									</div>
								</li>

								<li>
									<div class="dropdown">
										<button class="dropbtn" style="padding: 16px;"><a href="services.php">SERVICES</a></button>
									</div>
								</li>

								<li>
									<div class="dropdown ">
										<button class="dropbtn" style="padding: 16px;">ABOUT </button>
										<div class="dropdown-content">
											<a href="index.php#about">Company</a>
											<a href="index.php#team">Team</a>
											<a href="index.php#statement">Statement</a>

										</div>
									</div>
								</li>

								<li>
									<div class="dropdown ">
										<button class="dropbtn" style="padding: 16px;">DOCS</button>
										<div class="dropdown-content">
											<a href="sem1.php">Semester 01</a>
											<a href="sem2.php">Semester 02</a>
											<a href="sem3.php">Semester 03</a>
											<a href="sem4.php">Semester 04</a>
											<a href="sem5.php">Semester 05</a>
											<a href="sem6.php">Semester 06</a>
										</div>
									</div>
								</li>

								<li>
									<div class="dropdown">
										<button class="dropbtn" style="padding: 16px;"><a href="index.php#contact">Contact US</a></button>
									</div>
								</li>

								<?php
								session_start();
								if(isset($_SESSION['user'])){
								?>
								<li>
									<div id="nav-btns">
										<a class="btn btn-general nav-btn smooth-scroll" href="profile.php" title="Profile" role="button" style="margin-top:8px;margin-left:160px;">Profile</a>
									</div>
								</li>
								<li>
									<div id="nav-btns">
										<a class="btn btn-general nav-btn smooth-scroll" href="logout.php" title="Logout" role="button" style="margin-top:8px;">Logout</a>
									</div>
								</li>
								<?php
								}
								else
								{
									?>
								<li>
									<div id="nav-btns">
										<a class="btn btn-general nav-btn smooth-scroll" href="login.php" title="Login" role="button" style="margin-left: 180px;margin-top:8px;">Login</a>
									</div>
								</li>

								<li>
									<div id="nav-btns">
										<a class="btn btn-general nav-btn smooth-scroll" href="signup.php" title="Sign Up" role="button" style="margin-top:8px;">Sign Up</a>
									</div>
								</li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</section>
	<!-- nav ends-->



	<div id="services-02">
		<div class="content-box-md">
			<div id="services-tabs">
				<h2>SEM 02</h2>
				<ul class="text-center">

					<li><a href="#service-tab-1" style="margin-left: -100px;">DataStructure Using C++</a></li>
					<li><a href="#service-tab-2" style="margin-left: -30px;">Statistics</a></li>
					<li><a href="#service-tab-3">Computer Networks</a></li>
					<li><a href="#service-tab-4">Eniviromental Skills</a></li>
				</ul>
				<!-- service tab 1-->
				<div id="service-tab-1" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM2/ds10.jpg" alt="DataStructure Using C++"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 1.pdf'" style="margin-top: -17px;">Unit 1: Introduction to Data Structure</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 2.pdf'">Unit 2: Sorting and Searching</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 3.pdf'">Unit 3: Stacks</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 4.pdf'">Unit 4: Queues</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 5.pdf'">Unit 5: Linked List</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 6.pdf'">Unit 6: Trees</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 7.pdf'">Unit 7: Graph</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/DS/UNIT 8.pdf'">Unit 8: Hashing</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="service-tab-2" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM2/st2.jpg" alt="Statistics"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 1.pdf'" style="margin-top: -17px;">Unit 1: Classification, Tabulation and Graphical Methods</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 2.pdf'">Unit 2: Measures of Central Tendency</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 3.pdf'">Unit 3: Measures of Dispersion</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 4.pdf'">Unit 4: Moments Skewness and Kurtosis</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 5.pdf'">Unit 5: Correlation and Regression</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 6.pdf'">Unit 6: Probability</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 7.pdf'">Unit 7: Random Variables, Special<br> Continuous Probability Distributions</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 02/STATS/UNIT 8.pdf'">Unit 8: Test of Hypothesis, Large <br>Sample Tests, Small Sample Tests</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="service-tab-3" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM2/cn01.jpg" alt="Computer Networks"></div>
							<div class="tab-bg">

								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN1.pdf'" style="margin-top: -17px;">Unit 1: Introduction to Networks</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN2.pdf'">Unit 2: Network Topologies & Networking Devices</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN3.pdf'">Unit 3: Transmission Media</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN4.pdf'">Unit 4: Network Architecture and Protocols</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN5.pdf'">Unit 5: OSI Reference Model</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN6.pdf'">Unit 6: TCP / IP Suite</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN7.pdf'">Unit 7: Computer Security</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 02/CN/CN8.pdf'">Unit 8: Cryptography & Network Security</button>
							</div>
						</div>
					</div>
				</div>

				<!-- service tab 4-->
				<div id="service-tab-4" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM2/evs2.jpg" alt="Enviromental Skills"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'" style="margin-top: -17px;">Unit 1 History of The Operating Systems</button>
									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'">Unit 2 History of The Operating Systems</button>
									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'">Unit 3 History of The Operating Systems</button>
									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'">Unit 4 History of The Operating Systems</button>
									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'">Unit 5 History of The Operating Systems</button>
									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'">Unit 6 History of The Operating Systems</button>
									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'">Unit 7 History of The Operating Systems</button>
									<button class="btn" onclick="window.location.href='HTML_Basics(1).pdf'">Unit 8 History of The Operating Systems</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--lnks for next doc pages-->
	<div class="links">
		<center>
			<a href="sem1.php">Back </a>
			<a href="sem1.php">1</a>
			<a href="sem2.php">2</a>
			<a href="sem3.php">3</a>
			<a href="sem4.php">4</a>
			<a href="sem5.php">5</a>
			<a href="sem6.php">6</a>
			<a href="sem3.php">Next </a>
		</center>
	</div>

	<!--footer-->
	<section id="footer">
		<footer class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2">
							<div class="footer-logo">
								<a href="index.html">
									<h2 class="footer-logo-text"><span>BCA</span>&nbsp;WORLD</h2>
								</a>
							</div>
							<!--logo<a class="footer-logo" href="index.html#home"><img src="img/logo/logo.jpg" alt="Logo"></a>-->

						</div>
						<div class="col-md-2">
							<h4 style="margin-left: 5px;">Service Links</h4>
							<ul class="footer-class" style="list-style: none;">
								<li><a href="programming.html">Programming</a></li>
								<li><a href="linux.html">Linux</a></li>
								<li><a href="finance.html">Finance</a></li>
							</ul>
						</div>
						<div class="col-md-2">
							<h4 style="margin-left:35px;">Documentations</h4>
							<ul class="footer-class" style="list-style: none;">
								<li><a href="sem1.html">Sem 01 </a></li>
								<li><a href="sem2.html">Sem 02 </a></li>
								<li><a href="sem3.html">Sem 03 </a></li>

							</ul>
							<ul class="footer-class" style="list-style: none;margin-left: 60px;margin-top:-125px;">
								<li><a href="sem4.html">Sem 04 </a></li>
								<li><a href="sem5.html">Sem 05 </a></li>
								<li><a href="sem6.html">Sem 06 </a></li>
							</ul>

						</div>

						<div class="col-md-2">
							<h4 style="margin-left: -20px;">About Us</h4>
							<ul class="footer-class" style="list-style: none;">
								<li><a href="index.html#services">Company</a></li>
								<li><a href="index.html#team">Team</a></li>
								<li><a href="index.html#statement">Statement</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4 style="margin-left: -160px;">Contact Us</h4>
							<ul class="office-details" style="list-style: none;">
								<h4 style="margin-top: -20px;margin-left: -180px;">
									<li><i class="fa fa-mobile" style="margin-left: 40px; color: #fff;"></i>
										+91 7585458752</li>
								</h4>
								<h4 style="margin-top: -20px;margin-left: -105px;">
									<li><i class="fa fa-envelope-o" style="margin-left: 45px; color: #fff;"></i>
										supportmumbai@solo.com</li>
								</h4>


							</ul>
						</div>


					</div>

					<div class="col-md-12">
						<div class="col-md-6">
							<h5>
								Copyright &copy; 2018 All Rights Reserved by <span>SOLO Inc.</span>
							</h5>
						</div>

						<div class="col-md-6">
							<ul class="social-list" style="list-style: none;">
								<li>

									<h4>Follow Us on &nbsp;&nbsp;&nbsp;&nbsp;</h4>
								</li>

								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>


			<!-- Back To Top -->
			<a href="#home" id="back-to-top" class="btn btn-sm btn-yellow btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
				<i class="fa fa-angle-up"></i>
			</a>
		</footer>
	</section>
	<!--========== END FOOTER ==========-->

	<!--JQUERY-->
	<script src="JS/jquery-3.3.1.js"></script>

	<!--bootstrap JS-->
	<script src="JS/Bootstrap/bootstrap.js"></script>

	<!-- Carousel JS-->
	<script src="JS/Owl-Carousel/owl.carousel.min.js"></script>

	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E"></script>

	<!--easing scroll-->
	<script src="JS/easing/jquery.easing.1.3.js"></script>

	<!--responsive tabs-->
	<script src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>

	<!--Custom JS-->
	<script src="JS/script.js"></script>

</body>

</html>
