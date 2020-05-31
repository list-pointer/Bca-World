<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	session_start();

    include('connect.php');
if(isset($_POST['onsubmit-form']))
{
 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$phoneno = $_POST['phoneno'];
	$message = $_POST['message'];



if( $name !='' and $email !='' and $phoneno !='' and $subject !='' and $message != '' )
{
	
	$sql="INSERT INTO user_query(name,phoneno,email,subject,message,date) VALUES('$name','$phoneno','$email','$subject','$message',NOW())";
	$query=mysqli_query($db,$sql);
	if($query)
	{
		  require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bcaworld062@gmail.com';                     // SMTP username
    $mail->Password   = 'Bcaworld8@#';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('bcaworld062@gmail.com', 'BCA WORLD');
    $mail->addAddress('bcaworld062@gmail.com', $email);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
     $Message =$message;
    $mail->Body    =$Message; 
    $mail->send();
    
    // header("Location: index.php");
     echo "<script>window.alert('Thankyou For Contacting Us.');</script>";
      
} catch (Exception $e) {
   echo "<script>window.alert('Incorrect Email Address.Please Enter a Different Email Address.');</script>"; 
}
		
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
	<link rel="stylesheet" href="CSS/font-awesome/css/font-awesome.min.css">

	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="CSS/Bootstrap/bootstrap.css">

	<!-- owl-carousel-->
	<link rel="stylesheet" href="CSS/Owl-Carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="CSS/Owl-Carousel/owl.theme.default.min.css">

	<!--responsive tabs CSS-->
	<link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style-bca.css">


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
                                        <button class="dropbtn" style="padding: 16px;"><a href="service.php">SERVICES</a></button>
                                    </div>
                                </li>

                                <li>
                                    <div class="dropdown">
                                        <button class="dropbtn" style="padding: 16px;"><a href="ask.php">ASK</a></button>
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

	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>

	<!-- Home -->
	<section id="home" style="margin-top: 50px;">


		<div id="home-overlay">
		</div>

		<div id="home-content">
			<div id="home-content-inner" class="text-center">
				<div id="home-heading">
					<h1 id="home-heading-1">The</h1><br>
					<h1 id="home-heading-2">Bca <span>World</span>
					</h1>
				</div>
				<div id="home-text">
					<p>"Anyone who thinks sky is the limit has limited imagination"</p>
				</div>
				<div id="home-btn">
					<a class="btn btn-general btn-home smooth-scroll" href="login.php" title="Start Now" role="button">Start Now</a>
				</div>

			</div>
		</div>
		<!--angle down arrow-->

		<a href="#services" id="arrow-down" class="smooth-scroll">
			<i class="fa fa-angle-down"></i>
		</a>
	</section>
	<!--home ends-->

	<!-- Services -->
	<section id="services">

		<!-- Services 01 -->
		<div id="services-01">
			<div class="content-box-lg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="horizontal-heading">
								<h5>What We Do</h5>
								<h2>Our Services</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 col-sm-7">
							<img src="img/services/service-laptop.jpg" alt="laptop" class="img-responsive">
						</div>
						<div class="col-md-5 col-sm-5">
							<!-- Service 01 -->
							<div class="service">
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<div class="icon text-right">
											<i class="fa fa-paint-brush"></i>
										</div>
									</div>
									<div class="col-md-10 col-sm-10">
										<h5>Service 01</h5>
										<a href="programming.html">
											<h4>Programming</h4>
											<p>"Programming Section of our websites cover's all the generally used and famous languages.We have Team of highly experienced Personals from the IT and Teaching Industry to help you with your Doubts"</p>
										</a>

									</div>
								</div>

								<!-- Service 02 -->
								<div class="service">
									<div class="row">
										<div class="col-md-2 col-sm-2">
											<div class="icon text-right">
												<i class="fa fa-laptop"></i>
											</div>
										</div>
										<div class="col-md-10 col-sm-10">
											<h5>Service 02</h5>
											<a href="linux.html">
												<h4>Linux</h4>
												<p>This Section is only dedicated to Linux.Right from installation to all the Commands you will get all the help you need for Linux</p>
											</a>
										</div>
									</div>
								</div>
								<!-- Service 03 -->
								<div class="service">
									<div class="row">
										<div class="col-md-2 col-sm-2">
											<div class="icon text-right">
												<i class="fa fa-paper-plane-o"></i>
											</div>
										</div>
										<div class="col-md-10 col-sm-10">
											<h5>Service 03</h5>
											<a href="finance.html">
												<h4>Finance</h4>
												<p>The Finance part of the website is for helping students who lack in commmerce and finance knowledge.We will help you sharpen your finance knowledge.</p>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="services-02">
			<div class="content-box-md">
				<div id="services-tabs">
					<ul class="text-center">
						<li><a href="#service-tab-1">Programming</a></li>
						<li><a href="#service-tab-2">Linux</a></li>
						<li><a href="#service-tab-3">Finance</a></li>
					</ul>
					<!-- service tab 1-->
					<div id="service-tab-1" class="service-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-6"><img src="img/services/programming1.jpg" alt="PROGRAMMING"></div>
								<div class="col-md-6">
									<div class="tab-bg">
										<h2>01</h2>
										<h3>Get More From Programming</h3>
										<p>We believe anything is possible with the right Guidence. Whether you're doing programming for the first time or you're a long time pro, we've got you covered.Our Team generally cover all in general and specially programming languages that are covered in BCA syllabus.We Cover C,C++,Android,java,SQL etc.</p>
										<div id="services-02-btn">
											<a class="btn btn-general btn-yellow smooth-scroll" href="programming.html" title="Get in Touch" role="button">Get in Touch</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="service-tab-2" class="service-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-6"><img src="img/services/linux-tab2.jpg" alt="LINUX"></div>
								<div class="col-md-6">
									<div class="tab-bg">
										<h2>02</h2>
										<h3>Get More From Linux</h3>
										<p>Linux is one of the most feared topic among students.Students tends to use windows more because of its ease of use.
											However Linux is one of the most powerful Operating System present.With Our help you will be an expert in using Linux as per your requirements. </p>
										<div id="services-02-btn">
											<a class="btn btn-general btn-yellow smooth-scroll" href="finance.html" title="Get in Touch" role="button">Get in Touch</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="service-tab-3" class="service-tab">
						<div class="container">
							<div class="row">
								<div class="col-md-6"><img src="img/services/finance-tab3.jpg" alt="FINANCE"></div>
								<div class="col-md-6">
									<div class="tab-bg">
										<h2>03</h2>
										<h3>Get More From Finance</h3>
										<p>BCA WORLD was created to help studnents in dealing with road blocks that comes between them and success.It is generally sceen that most of the Students are from Science background and generally they are not aware of anything realted to finance, But don't you worry we got you covered.</p>
										<div id="services-02-btn">
											<a class="btn btn-general btn-yellow smooth-scroll" href="linux.html" title="Get in Touch" role="button">Get in Touch</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


	</section>
	<!-- Services Ends -->

	<!-- About -->
	<section id="about">
		<!-- About 01 -->
		<div id="about-01">
			<div class="content-box-lg">
				<div class="container">
					<div class="row">
						<!-- About Left Side -->
						<div class="col-md-6 col-sm-6">

							<div id="about-left">
								<div class="vertical-heading">
									<h5>Who We Are</h5>
									<h2>A <strong>Story</strong><br>About Us</h2>
								</div>
							</div>
						</div>
						<!-- About Right Side -->
						<div class="col-md-6 col-sm-6">
							<div id="about-right">
								<p>
									It is said that knowledge comes handy when u forget
									all that you have learned But the biggest road block
									on the way of gaining knowledge are the doubts that are remained unanswered.</p>
								<p>
									I started this website as a 3rd year student of BCA.
									while i was a student i had doubts <br>infact many doubts thankfully I had
									teachers to suppport me and solve my doubts.
									still <br>i always thought of students who learn using the
									internet everytime they have doubts <br>they had to use internet and search for answers
									it's not only time consuming but sometimes confussing to. </p>
								<p>
									Being a student i understand the hardship of a student's life.
									so the motive of creating The Bca World is to help students with their doubts
									as much as i can.</p>

							</div>
						</div>
					</div>
					<!-- About Bottom -->
					<div class="row">
						<div class="col-md-12">
							<div id="about-bottom">
								<img src="img/about/about-blank.jpg" alt="About Us" class="img-responsive">
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- About 01 Ends -->

		<!-- About 02 -->
		<div id="about-02">
			<div class="content-box-md">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<!-- About item 01 -->
							<div class="about-item text-center">
								<i class="fa fa-rocket"></i>
								<h3>Mission</h3>
								<hr>
								<p>“To help students grow and become successful.”
								</p><br>
							</div>

						</div>
						<div class="col-md-4 col-sm-4">
							<!-- About item 02 -->
							<div class="about-item text-center">
								<i class="fa fa-eye"></i>
								<h3>Vision</h3>
								<hr>
								<p>“To build a place where students can come searching for their answers.”
								</p>
							</div>

						</div>
						<div class="col-md-4 col-sm-4">
							<!-- About item 03 -->
							<div class="about-item text-center">
								<i class="fa fa-pencil"></i>
								<h3>Passion</h3>
								<hr>
								<p>“My work must help other students.”
								</p><br>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- About 02 Ends -->

	</section>
	<!-- About Ends -->







	<!-- Team-->
	<section id="team">
		<div class="content-box-lg">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div id="team-left">
							<div class="vertical-heading">
								<h5>Who We Are</h5>
								<h2>Meet Our<br><strong>Talented</strong>Team</h2>
							</div>
							<p>
								The motive of The Bca World is to help students.
								So why not let students help other students.
								Maybe I founded the solo Creative but it wasn't possible without my team.</p>
							<p>
								Bhavika Joshi who is my teacher also guides me and my team.
								Our team constist of students who also happens to be my friends.
								It's not wrong to say that my team is my family and my family works
								for others!
							</p>
						</div>
					</div>

					<!-- Team Right Side -->
					<div class="col-md-6 col-sm-6 wow slideInRight" data-wow-duration="1s">

						<div id="team-members" class="owl-carousel owl-theme">

							<!-- Member 01 -->
							<div class="team-member">
								<img src="img/team/Abhishek%20Gupta.jpeg" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Abhishek Gupta</h6>
										<p>BCA WORLD FOUNDER</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>
							<!-- Member 02 -->
							<div class="team-member">
								<img src="img/team/shilpa-mistry.png" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Shilpa Mistry</h6>
										<p>(HOD) Lecturer</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>
							<!-- Member 03 -->
							<div class="team-member">
								<img src="img/team/aarti.png" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Aarti Oberio</h6>
										<p>Coordinator and Lecturer</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>
							<!-- Member 04 -->
							<div class="team-member">
								<img src="img/team/bhavika-joshi4.png" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Bhavika Joshi</h6>
										<p>Lecturer</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>
							<!-- Member 05 -->
							<div class="team-member">
								<img src="img/team/jagruti-kadam.png" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Jagruti Kadam</h6>
										<p>Lecturer</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<!-- Member 06 -->
							<div class="team-member">
								<img src="img/team/kaushik-gawad.jpg" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Kaushik Gawad</h6>
										<p>BCA Graduate</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Member 07 -->
							<div class="team-member">
								<img src="img/team/Nikhita%20lomate.jpg" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Nikhita Lomate</h6>
										<p>BCA Graduate</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<!-- Member 08 -->
							<div class="team-member">
								<img src="img/team/Maulik%20Ghatala.jpeg" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Maulik Ghatala</h6>
										<p>BCA Graduate</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<!-- Member 09 -->
							<div class="team-member">
								<img src="img/team/vinod%20vanniyar.jpeg" alt="team member" class="img-responsive">
								<div class="team-member-overlay">
									<div class="team-member-info text-center">
										<h6>Vinod Vanniyar</h6>
										<p>BCA Graduate</p>
										<ul class="social-list">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- team ends-->

	<!-- statement-->
	<section id="statement">
		<div class="content-box-lg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="tech-statement" class="text-center">
							<h4> <i class="fa fa-quote-left"> I wasn't born with a golden spoon but i am not dying without one&nbsp; </i><i class="fa fa-quote-right"></i></h4>
							<p>- Abhishek Gupta -<br>Founder<br>The Bca World</p>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- statement ends-->




	<!-- contact-->
	<section id="contact">
		<div class="content-box-md">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<!-- left side-->
						<div id="contact-left">
							<div class="vertical-heading">
								<h5>Who We Are</h5>
								<h2>Get<br>In <strong>Touch</strong></h2>
								<p>Thank You for visiting Bca World.
									If you have any queries please contact us.</p>
							</div>
							<div id="offices">
								<div class="row">
									<div class="col-md-6">
										<!-- address 1-->
										<div class="office">
											<h4>Mumbai</h4>
											<ul class="office-details">
												<li><i class="fa fa-mobile"></i>
													+91 7585458752</li>
												<li><i class="fa fa-envelope-o"></i>
													supportmumbai@solo.com</li>
												<li><i class="fa fa-map-marker"></i>
													Solo Inc Netaji Subhash Chandra Bose Road, Chowpatty, Mumbai, Maharashtra 400007, India.</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="office">
											<h4>Delhi</h4>
											<ul class="office-details">
												<li><i class="fa fa-mobile"></i>
													+91 9655458752</li>
												<li><i class="fa fa-envelope-o"></i>
													supportdelhi@solo.com</li>
												<li><i class="fa fa-map-marker"></i>
													Solo Inc Statesman House, Barakhamba Road, Connaught Place, New Delhi, Delhi 110001, India.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<ul class="social-list">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-6">
						<!--right side-->
						<div id="contact-right">
							<form name="onsubmit-form" method="post" action=" " >
								<h4>Send Message</h4><br>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="name" required="required" placeholder="Your Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" name="email" required="required" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="subject" required="required" placeholder="Subject">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="numeric" class="form-control" name="phoneno" placeholder="Phone No" maxlength="10" minlength="10">
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" required="required" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="onsubmit-form" value="SEND" class="btn btn-general submit-btn smooth-scroll ">
								</div>

							</form>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--contact end-->



	<!-- google map-->
	<section id="google-map">
		<div class="container-fluid">
			<div class="row">
				<div id="map"></div>
			</div>
		</div>
	</section>
	<!-- google map ends-->


	<!--footer-->
	<section id="footer">
		<footer class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2">
							<div class="footer-logo">
								<a href="index.php">
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
								<li><a href="sem1.php">Sem 01 </a></li>
								<li><a href="sem2.php">Sem 02 </a></li>
								<li><a href="sem3.php">Sem 03 </a></li>

							</ul>
							<ul class="footer-class" style="list-style: none;margin-left: 60px;margin-top:-125px;">
								<li><a href="sem4.php">Sem 04 </a></li>
								<li><a href="sem5.php">Sem 05 </a></li>
								<li><a href="sem6.php">Sem 06 </a></li>
							</ul>

						</div>

						<div class="col-md-2">
							<h4 style="margin-left: -20px;">About Us</h4>
							<ul class="footer-class" style="list-style: none;">
								<li><a href="index.php#about-01">Company</a></li>
								<li><a href="index.php#team">Team</a></li>
								<li><a href="index.php#statement">Statement</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h4 style="margin-left: -160px;">Contact Us</h4>
							<ul class="office-details" style="list-style: none;">
								<h4 style="margin-top: -20px;">
									<li><i class="fa fa-mobile" style="margin-left: 40px; color: #fff;"></i>
										+91 7585458752</li>
								</h4>
								<h4 style="margin-top: -20px;">
									<li><i class="fa fa-envelope-o" style="margin-left: 45px; color: #fff;"></i>
										supportmumbai@solo.com</li>
								</h4>


							</ul>
						</div>


					</div>

					<div class="col-md-12">
						<div class="col-md-6">
							<h5>
								Copyright &copy; 2019 All Rights Reserved by <span>Bca World.</span>
							</h5>
						</div>

						<div class="col-md-6" style="margin-top: 20px;">
							<ul class="social-list" style="list-style: none;">
								

									
								

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
	<script src="JS/script-bca.js"></script>

</body>

</html>
