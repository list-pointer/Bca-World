<?php
    session_start();
    include('connect.php');
    if(!isset($_SESSION['user']))
        header("location: login.php");
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
    <link rel="stylesheet" href="css/style2.css">


</head>


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
        
        <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <!-- About Left Side -->
                        <div class="col-md-12">
                <center>
                    <div class="logo-2" >
                        
                            <h2 class="logo-text-2" ><span>BCA</span>&nbsp;WORLD</h2>
                        
                    </div>

                    <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">

                        <input name="question" type="text" title="Your Question..." placeholder="Ask Your question on our Community for greate user expereince..." id="question">

                        <select name="cat">
                            <option valus="Category">Category</option>
                            <option value="Programming">Programming</option>
                            <option value="Finance">Finance</option>
                            <option value="Linux">Linux</option>
                          
                        </select>
                        <input name="submit" type="submit" class="up-in" id="ask_submit">
                    </form>
                </center>
            </div>
        </div></div></div>
        
        <div id="ask-ta">
            <h1>Thank You.<br>Stay tunned for updates.</h1>
        </div>
        
        <?php
        
            if( isset( $_POST["submit"] ) )
            {

                
                $question =  $_POST["question"] ;
                
                $no = $_POST["cat"];
                $question = addslashes($question);
                $q = "SELECT * FROM quans WHERE question = '$question'";
                $result = mysqli_query($db,$q);
                if(mysqli_error($db))
                    echo "<script>window.alert('Some Error Occured. Try Again or Contact Us.');</script>";
                else if( $no == "Category"){
                    echo "<script>window.alert('Choose a Category.');</script>";
                }
                else if( mysqli_num_rows($result) == 0 ){
                    $query = "INSERT INTO quans VALUES(NULL, '$question', NULL,'".$_SESSION['user']."',NULL)";
                    $query1 = "INSERT INTO quacat SELECT q.id, c.name FROM quans as q, category as c WHERE q.question = '".$question."' AND c.name = '".$_POST['cat']."'";
                    mysqli_query( $db, $query);
                    if(mysqli_query( $db, $query1)){
                        echo "<style>#sf{display: none;} #ask-ta{display:block;}</style>";
                    }
                    else{
                        echo "<script>window.alert('Something went wrong. Try Again or Contact Us.');</script>";
                    }
                }
                else{
                    echo "<script>window.alert('Question was already Asked. Search it on Home Page.');</script>";
                }
                
                mysqli_close($db);
            }
        
        ?>
        
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
                                    <li><i class="fa fa-mobile" style="color: #fff;margin-left: -140px;"></i>
                                        +91 7585458752</li>
                                </h4>
                                <h4 style="margin-top: -20px;">
                                    <li><i class="fa fa-envelope-o" style="margin-left: -60px; color: #fff;"></i>
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
        
    </body>
    
</html>