<?php
session_start();
if( isset($_SESSION['user'])){
        header("Location: index.php");
    }
    include('connect.php');
if(isset($_POST['login_btn']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
if(  $email !='' and $password !='' )
{
	$password=md5($password);
	$check = mysqli_query($db,"SELECT * FROM register_user where email = '$email' and password = '$password' and activated ='1'"); 
	if(mysqli_num_rows($check)>=1)
	{
		$rs = mysqli_fetch_array($check);

		$_SESSION['user'] = $rs['id'];
		
		$_SESSION['name'] = $rs['name'];
		
		$_SESSION['email'] = $rs['email'];
		
		$_SESSION['date'] = $rs['date'];
//echo $_SESSION['name'];
		//cho $_SESSION['email'];
		//echo $_SESSION['date'];
		//echo $_SESSION['name'];
		header("Location: index.php");
	}
	else{
			echo "<script>window.alert('Something Went Wrong. Please Try Again .');</script>";
}
}
 mysqli_close($db);

}
?>


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
	<link rel="stylesheet" href="css/login.css">


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

	<!-- home overlay -->
	<div id="home-overlay">
	</div>

	<!-- login html-->
	<div class="login">
		<img src="img/login/101.jpg" class="login-img">
		<h1>LOGIN</h1>
		<form method="POST" action=" ">

			<p>Enter Email Address</p>
			<input type="email" placeholder="Enter email address" name="email"><br><br>
			<p>Enter Password</p>
			<input type="password" placeholder="Enter Password" name="password"><br><br>

			<input type="submit" value="submit" name="login_btn">

		</form>
	</div>



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
