<?php
require_once '../../controller/SupplierController/progressController.php';

if (isset($_POST['submit'])) {
	// create controller
	$testing = new progressController();
	// call method dd
    $testing->testing();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title></title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
    <link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Header Area Start -->
    <header class="header-area">
    <!-- Top Header Area Start -->
    <div class="top-header-area">
    <div class="container h-100">
    <div class="row h-100 align-items-center">
    <div class="col-5">
    <div class="top-header-content">
        <p>Welcome to Event Management System!</p>
    </div>
    </div>
    <div class="col-7">
    <div class="top-header-content text-right">
        <p><i class="fa fa-clock-o" aria-hidden="true"></i><span id="date"></span> <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+60)12-345-6789</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Top Header Area End -->
        
        
    <!-- Main Header Start -->
    <div class="main-header-area">
    <div class="classy-nav-container breakpoint-off">
    <div class="container">

    <!-- Classy Menu -->
    <nav class="classy-navbar justify-content-between" id="akameNav">

    <!-- Logo -->
    <a class="nav-brand" href="SupplierHomeInterface.html"><img src="../../libs/img/core-img/logo12.png" alt=""></a>

    <!-- Navbar Toggler -->
    <div class="classy-navbar-toggler">
    <span class="navbarToggler"><span></span><span></span><span></span></span>
    </div>

    <!-- Menu -->
    <div class="classy-menu">
        <!-- Menu Close Button -->
        <div class="classycloseIcon">
            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
        </div>
        <!-- Nav Start -->
        <div class="classynav">
            <ul id="nav">
                <li><a href="SupplierHomeInterface.html">Home</a></li>                
                <li><a href="#">Services</a>
                    <ul class="dropdown">
                        <li><a href="indexEqInterface.php">- Equipment</a></li>
                        <li><a href="indexPkgInterface.php">- Event Package</a></li>
                    </ul>
                </li>
                <li class="active"><a href="progressInterface.php">Progress</a></li>
                <li><a href="feedbackInterface.php">Feedback</a></li>
                <li><a href="../WelcomePage.php">Log out</a></li>
                </ul>
        </div>
        <!-- Nav End -->
    </div>
    </nav>
    </div>
    </div>
    </div>
    </header>
    <!-- Header Area End -->

    <!-- form Area Start -->
    <section>
    <!-- Single Welcome Slide -->
    <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/100.png);">
    <!-- Welcome Content -->
    <div class="welcome-content h-100">
    <div class="container h-100">

    <!-- Welcome Text -->
    <div class="col-12 col-md-9 col-lg-6">
		<h2>POST ATTEND</h2><br>
		
        <div class="card-body">
        <form action="" method="post" role="form">

            <!-- text input -->
            <div class="form-group">
                <label>Type of Testing</label><br> 
                <input type="radio" name="testing" value="FOOD TESTING" > FOOD TESTING <br>
                <input type="radio" name="testing" value="PA SYSTEM SOUND CHECK" >PA SYSTEM SOUND CHECK<br>
            </div><br>
        <div class="form-group">
                <label>Date</label> 
                <input type='date' name='datetesting' class='form-control'>
        </div><br>
        <div class="form-group">
                <label>Time</label><br>
                <input type="radio" name="timetesting" value="10:00 AM - 12:00PM"> 10:00 AM - 12:0<br>
                <input type="radio" name="timetesting" value="14:00PM - 16:00PM" checked> 14:00PM - 16:00PM<br>
        </div><br>
	    <div class="form-group">
                <label>Venue</label><br>
                <input type="radio" name="venue" value="CHEF KITCHEN KK3"> CHEF KITCHEN KK3<br>
                <input type="radio" name="venue" value="CHEF KITCHEN K01" checked> CHEF KITCHEN K01<br>
        </div><br>
		<div class="form-group">
            <input class="btn btn-success" type="submit" name="submit" value="OK" onclick="return  confirm('Are you sure to attend?')">
            <input class="btn btn-danger" type="reset" value="Cancel" onclick="return  confirm('Are you sure to cancel attend?')"></td>
        </div>
        </form>
        </div>       
    </div>
    </div>
    </div>
    </div>
	</div>
    </section>
    <!-- Empty Area End -->
	
    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="../../libs/img/core-img/logo12.png" alt=""></a>

                        <p class="mb-30">We would love to serve you and let you enjoy your culinary experience. Excepteur sint occaecat cupidatat non proident.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Opening times</h4>

                        <!-- Open Times -->
                        <div class="open-time">
                            <p>Monday: Friday: 10.00 - 23.00</p>
                            <p>Saturday: 10.00 - 19.00</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Tel: (+12) 345 678 910</p>
                            <p>E-mail: Hello.colorlib@gmail.com</p>
                            <p>Address: Iris Watson, P.O. Box 283 8562 Fusce Rd, NY</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="../../libs/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../../libs/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../libs/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../../libs/js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="../../libs/js/default-assets/active.js"></script>
	<script type="text/javascript" src="../../libs/js/payment.js"></script>
	
	</body>

</html>