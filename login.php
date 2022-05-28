<?php
include 'connect.php';

if(isset($_POST['submit']) ){
 if(!empty($_POST['username']) && !empty($_POST['password']) ){
    $username = $_POST['username'];
    $password = $_POST['password'];

   $sql=$conn->prepare("select * from users where username=? and password=? limit 1");
      $sql->execute(array($username,$password));
      $result=$sql->fetchAll();
 if($result){
 while ($row=$result){
             $dbusername=$row['username'];
             $dbpassword=$row['password'];
         if($dbusername == $usename && $dbpassword == $password){
           echo "Login Successful ";
           session_start();
           $_SESSION['username']=$_POST['username'];
           header("location:index.php");
         }
         else{
             echo "UserName or Password Invalid !";
         }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v3 clearfix">

            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-location"></i> 225 Beach Street, Australian</span>
                        <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
                    </div>
    
                    <div class="header_right float-right">
                        <span class="socials">
                            <a href="!#"><i class="fa fa-facebook"></i></a>
                            <a href="!#"><i class="fa fa-twitter"></i></a>
                            <a href="!#"><i class="fa fa-instagram"></i></a>
                        </span>
                        <span class="login-register">
                                <a href="login.php">Login</a>
                                <a href="register.php">register</a>
                            </span>
                        <!--<div class="dropdown currency">
                            <span>USD <i class="fa fa"></i></span>
                            <ul>
                                <li class="active"><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </div>
                        <div class="dropdown language">
                            <span>ENG</span>
    
                            <ul>
                                <li class="active"><a href="#">ENG</a></li>
                                <li><a href="#">FR</a></li>
                            </ul>
                        </div>-->
                    </div>
                    <!-- HEADER LOGO -->
                    <a class="logo-top img-responsive" href="#"><img src="images/logo-header.png" alt=""></a>
                    <!-- END / HEADER LOGO -->
    
                </div>
            </div>
            <!-- END / HEADER TOP -->
    
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">
    
                <div class="container">
    
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                            <ul class="menu">
                                <li class="current-menu-item">
                                    <a href="index.php">Home </a>
                                   <!-- <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="index.php">Home 1</a></li>
                                        <li><a href="index-2.php">Home 2</a></li>
                                        <li><a href="index-3.php">Home 3</a></li>
                                        <li><a href="index.php">Home 4</a></li>
                                    </ul>
                                </li>-->
                                
                                <li>
                                    <a href="#">Room <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="room.php">Room</a></li>
                                        
                                        <!--
                                        <li><a href="room-2.php">Room 2</a></li>
                                        <li><a href="room-1.php">Room 1</a></li>
                                        <li><a href="room-4.php">Room 4</a></li>
                                        <li><a href="room-5.php">Room 5</a></li>
                                        <li><a href="room-6.php">Room 6</a></li>
                                        -->
                                        <li><a href="room-detail.php">Room Detail</a></li>
                                    </ul>
                                </li>
                                <!--<li>
                                    <a href="restaurants-4.php">Restaurant </a>
                                    
                                    <a href="#">Restaurant <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="restaurants-1.php">Restaurant 1</a></li>
                                        <li><a href="restaurants-2.php">Restaurant 2</a></li>
                                        <li><a href="restaurants-3.php">Restaurant 3</a></li>
                                      
                                    </ul>
                                </li>-->
                                <li>
                                    <a href="#">Reservation <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="reservation-step-1.php">Reservation Step 1</a></li>
                                        <li><a href="reservation-step-2.php">Reservation Step 2</a></li>
                                        <li><a href="reservation-step-3.php">Reservation Step 3</a></li>
                                        <li><a href="reservation-step-4.php">Reservation Step 4</a></li>
                                        <li><a href="reservation-step-5.php">Reservation Step 5</a></li>
                                    </ul>
                                </li>
                                <li>
                                              <a href="check-out.php">Check Out</a>
    
                                  <!-- <a href="#">Page <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Guest Book <span class="fa fa-caret-right"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="guest-book.php">Guest Book 1</a></li>
                                                <li><a href="guest-book-2.php">Guest Book 2</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="#">Event <span class="fa fa-caret-right"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="events.php">Events</a></li>
                                                <li><a href="events-fullwidth.php">Events Fullwidth</a></li>
                                                <li><a href="events-detail.php">Events Detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="attractions.php">Attractions</a>
                                        </li>
                                        <li>
                                            <a href="#">Term Condition <span class="fa fa-caret-right"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="term-condition.php">Term Condition 1</a></li>
                                                <li><a href="term-condition-2.php">Term Condition 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">Activiti <span class="fa fa-caret-down"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="activiti.php">Activiti</a></li>
                                                <li><a href="activiti-detail.php">Activiti Detail</a></li>
                                            </ul>
                                        </li>
                            
                                        <li><a href="shortcode.php">ShortCode</a></li>
                                        <li><a href="page-404.php">404 Page</a></li>
                                        <li><a href="comingsoon.php">Comming Soon</a></li>
                                    </ul>-->
                                </li>
                                <!--<li>
                                    <a href="gallery-2.php">Gallery </a>
                                    <!--<ul class="sub-menu">
                                          <li><a href="gallery.php">Gallery Style 1</a></li>
                                        <li><a href="gallery-2.php">Gallery Style 2</a></li>
                                        <li><a href="gallery-3.php">Gallery Style 3</a></li> 
                                    </ul>
                                </li>-->
                               <!-- <li>
                                    <a href="#">Blog <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="blog-detail.php">Blog Detail</a></li>
                                        <li><a href="blog-detail-fullwidth.php">Blog Detail Fullwidth</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="about.php">About</a></li>
    
                            </ul>
                        </nav>
                    <!-- END / HEADER MENU -->
    
                    <!-- MENU BAR -->
                    <span class="menu-bars">
                            <span></span>
                        </span>
                    <!-- END / MENU BAR -->
    
                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->
    
        </header>
        <!-- END / HEADER -->

        <!-- ACCOUNT -->
        <section class="section-account parallax bg-11">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register">
                    <div class="text text-center">
                        <h2>LOGIN ACCOUNT</h2>
                        <p>You Can Log To Your Account From Here!</p>
                        <form action="" method="post" class="account_form">
                            <div class="field-form">
                                <input type="text" class="field-text" name="username" placeholder="User name">
                            </div>
                            <div class="field-form">
                                <input type="password" class="field-text" name="password" placeholder="Password">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                            </div>
                            <div class="field-form field-submit">
                                <button class="awe-btn awe-btn-13" type ="submit" name="submit">Login</button>
                            </div>
                            <span class="account-desc">I don’t have an account  -  <a href="#">Forgot Password</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ACCOUNT -->

                         <!-- FOOTER -->
                         <footer id="footer">

                            <!-- FOOTER CENTER -->
                            <div class="footer_center">
                                <div class="container">
                                    <div class="row">
                
                                        <div class="col-xs-12 col-lg-5">
                                            <div class="widget widget_logo">
                                                <div class="widget-logo">
                                                    <div class="img">
                                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                                    </div>
                                                    <div class="text">
                                                        <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                                        <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@thelotushotel.com</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="col-xs-4 col-lg-2">
                                            <div class="widget">
                                                <h4 class="widget-title">Page site</h4>
                                                <ul>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="room.php">Room</a></li>
                                                    <li><a href="reservation-step-1.php">Reservation</a></li>
                                                    <li><a href="check-out.php">Check-Out</a></li>
                                                </ul>
                                            </div>
                                        </div>
                
                                        <div class="col-xs-4 col-lg-2">
                                            <div class="widget">
                                                <h4 class="widget-title">ABOUT</h4>
                                                <ul>
                                                    <li><a href="contact.php">Contact Us</a></li>
                                                    <li><a href="about.php">About</a></li>
                                                </ul>
                                            </div>
                                        </div>
                
                                        <div class="col-xs-4 col-lg-3">
                                            <div class="widget widget_tripadvisor">
                                                <h4 class="widget-title">Tripadvisor</h4>
                                                <div class="tripadvisor">
                                                    <p>Now with hotel reviews by</p>
                                                    <img src="images/tripadvisor.png" alt="">
                                                    <span class="tripadvisor-circle">
                                                        <i></i>
                                                        <i></i>
                                                        <i></i>
                                                        <i></i>
                                                        <i class="part"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                
                
                                    </div>
                                </div>
                            </div>
                            <!-- END / FOOTER CENTER -->
                
                            <!-- FOOTER BOTTOM -->
                            <div class="footer_bottom">
                                <div class="container">
                                    <p>&copy; 2015 Lotus Hotel All rights reserved.</p>
                                </div>
                            </div>
                            <!-- END / FOOTER BOTTOM -->
                
                        </footer>
        
                <!-- END / FOOTER -->
    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>