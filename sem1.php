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
				<h2>SEM 01</h2>
				<ul class="text-center">

					<li><a href="#service-tab-1" style="margin-left: -100px;">C &nbsp; Programming</a></li>
					<li><a href="#service-tab-2" style="margin-left: -30px;">C++ &nbsp; Proggramming</a></li>
					<li><a href="#service-tab-3">English &nbsp; Communication</a></li>
					<li><a href="#service-tab-4">Mathematics</a></li>
				</ul>
				<!-- service tab 1-->
				<div id="service-tab-1" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM1/c200.jpg" alt="C PROGRAMMING"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 1.pdf'" style="margin-top: -17px;">Unit 1: Introduction to Computer</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 2.pdf'">Unit 2: Techniques of Problem Solving</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 3.pdf'">Unit 3: Planning the Computer Program</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 4.pdf'">Unit 4: Introduction to C</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 5.pdf'">Unit 5: Decision Making and looping</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 6.pdf'">Unit 6: Arrays and Strings</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 7.pdf'">Unit 7: Functions and Pointers</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C/unit 8.pdf'">Unit 8: Structures and Unions</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="service-tab-2" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM1/c++3.jpg" alt="C++"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 1.pdf'" style="margin-top: -17px;">Unit 1: Introduction</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 2.pdf'">Unit 2: Classes Objects and functions in c++</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 3.pdf'">Unit 3: Constructors, Destructors and Operator Overloading</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 4.pdf'">Unit 4: Inheritance</button><br>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 5.pdf'">Unit 5: Polymorphism</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 6.pdf'">Unit 6: Working with files , Console I/O Operations</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 7.pdf'">Unit 7: Exception Handling</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/C++/unit 8.pdf'">Unit 8: Templates and Standard Template Library</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="service-tab-3" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM1/ec5.jpg" alt="English Communication"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 1.pdf'" style="margin-top: -17px;">Unit 1: Introduction</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 2.pdf'">Unit 2 : Verbal Communication</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 3.pdf'">Unit 3: Reading and Writing Skills</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 4.pdf'">Unit 4:Developing Reports and Proposals</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 5.pdf'">Unit 5: Solving the Problem</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 6.pdf'">Unit 6: Working in Groups and Teams</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 7.pdf'">Unit 7: Thinking Critically</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/EC/unit 8.pdf'">Unit 8: Presenting yourself Professionally</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- service tab 4-->
				<div id="service-tab-4" class="service-tab">
					<div class="container">
						<div class="row">
							<div class="col-md-6"><img src="DOCS-IMG/SEM1/maths.jpg" alt="MATHS"></div>
							<div class="col-md-6">
								<div class="tab-bg">

									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 1.pdf'" style="margin-top: -17px;">Unit 1: Set Theory And Number Systems</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 2.pdf'">Unit 2: Mathematical Induction And Mathematical Logic</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 3.pdf'">Unit 3: Exponents, Surds and Logarithms</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 4.pdf'">Unit 4: Permutations and Combinations</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 5.pdf'">Unit 5: Relations and Functions</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 6.pdf'">Unit 6: Vectors, Matrices and Determinants</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 7.pdf'">Unit 7: Linear Equations, Polynomials and Introduction<br> to Graph theory</button>
									<button class="btn" onclick="window.location.href='DOCS/SEM 01/MATHS/unit 8.pdf'">Unit 8: Mensuration</button>
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
			<a href="sem1.php">1</a>
			<a href="sem2.php">2</a>
			<a href="sem3.php">3</a>
			<a href="sem4.php">4</a>
			<a href="sem5.php">5</a>
			<a href="sem6.php">6</a>
			<a href="sem2.php">Next </a>
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
