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
				<h2>SEM 03</h2>
				<ul class="text-center">

					<li><a href="#service-tab-1" style="margin-left: -100px;">Database Management Application System</a></li>
					<li><a href="#service-tab-2" style="margin-left: -30px;">Information Technology</a></li>
					<li><a href="#service-tab-3">Operating System</a></li>
					<li><a href="#service-tab-4">Web Technologies</a></li>
				</ul>
				<!-- service tab 1-->
				<div id="service-tab-1" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM3/db1.jpg" alt="Database Management Application System"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 1.pdf'" style="margin-top: -17px;">Unit 1: Data files and DBMS</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 2.pdf'">Unit 2: Introduction to DBMS</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 3.pdf'">Unit 3: Relational data models and relational algebra</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 4.pdf'">Unit 4: Entity Relationship</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 5.pdf'">Unit 5: Normalizations</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 6.pdf'">Unit 6: SQL</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 7.pdf'">Unit 7: Transaction Management</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/DBMS/UNIT 8.pdf'">Unit 8: PL/SQL</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="service-tab-2" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM3/it01.jpg" alt="INFORMATION TECHNOLOGY"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 1.pdf'" style="margin-top: -17px;">Unit 1: Learning Skills</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 2.pdf'">Unit 2: 21st century Learning environment</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 3.pdf'">Unit 3: Productivity tools Part I</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 4.pdf'">Unit 4: Productivity tools Part II</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 5.pdf'">Unit 5: ELearning Skills</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 6.pdf'">Unit 6: E learning Challenges</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 7.pdf'">Unit 7: Security</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/IT/UNIT 8.pdf'">Unit 8: List of resources</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="service-tab-3" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM3/os.jpg" alt="OPERATING SYSTEM"></div>
							<div class="tab-bg">

								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 1.pdf'" style="margin-top: -17px;">Unit 1 :History of The Operating Systems</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 2.pdf'">Unit 2: Operating System –Functions And Structure</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 3.pdf'">Unit 3: Information Management</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 4.pdf'">Unit 4: Process Management</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 5.pdf'">Unit 5: Inter Process Communication</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 6.pdf'">Unit 6: I/O Management And Deadlock</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 7.pdf'">Unit 7: Memory Management</button>
								<button class="btn" onclick="window.location.href='DOCS/SEM 03/OS/UNIT 8.pdf'">Unit 8: Protection and Security</button>
							</div>
						</div>
					</div>
				</div>

				<!-- service tab 4-->
				<div id="service-tab-4" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM3/wt2.jpg" alt="WEB TECHNOLOGIES"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 1.pdf'" style="margin-top: -17px;">Unit 1: Introduction to Web</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 2.pdf'">Unit 2: Languages and technologies for browsers</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 3.pdf'">Unit 3: Introduction to HTML</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 4.pdf'">Unit 4: Cascading Style Sheets</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 5.pdf'">Unit 5: Introduction to Client side Scripting</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 6.pdf'">Unit 6: JavaScript</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 7.pdf'">Unit 7: XML</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 03/WT/UNIT 8.pdf'">Unit 8: Website Design Concepts</button>
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
			<a href="sem2.php">Back </a>
			<a href="sem1.php">1</a>
			<a href="sem2.php">2</a>
			<a href="sem3.php">3</a>
			<a href="sem4.php">4</a>
			<a href="sem5.php">5</a>
			<a href="sem6.php">6</a>
			<a href="sem4.php">Next </a>
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
