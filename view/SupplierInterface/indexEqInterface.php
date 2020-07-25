<?php

require_once '../../controller/SupplierController/EqController.php';

$data = new EqController();
$result = $data->index();

if(isset($_POST['delete'])) {
    $data->destroy($_POST['delete']);
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
    <title>Equipment List</title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
	<link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

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
                                    <li  class="active"><a href="#">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="indexEqInterface.php">- Equipment</a></li>
                                            <li><a href="indexPkgInterface.php">- Event Package</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="progressInterface.php">Progress</a></li>
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

    <!-- List Equipment Area Start -->
    <section>
        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/100.png);">
        <!-- Welcome Content -->
        <div class="welcome-content h-100">
        <div class="container h-100">

        <!-- Welcome Text -->
        <div class="col-15 col-md-11 col-lg-8">
            <h2>List of Equipment</h2><br>

        <div class='right-button-margin'>
            <a href='addEqInterface.php' class='btn btn-primary m-b-1em'>Add New Equipment</a>
        </div><br>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
            <thead>
            <tr>
                <th><b>Equipment ID</b></th>
                <th><b>Equipment Name</b></th>
                <th><b>Quantity</b></th>
                <th><b>Price/Item</b></th>
                <th><b>Date</b></th>
                <th><b>Action</b></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $res) { ?>
            <tr>
                <tr>
                    <td><?php echo $res['eqid']; ?></td>
                    <td><?php echo $res['EqName']; ?></td>
                    <td><?php echo $res['Qty']; ?></td>
                    <td><?php echo $res['EqPrice']; ?></td>
                    <td><?php echo $res['EqDate']; ?></td>
                    <td>
  
                    <form method="POST" action="">
                        <input type="hidden" name="delete" value="<?php echo $res['eqid'] ?>">
                        <input type="submit" name="btnDelete" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure you want to delete?')">
                    </form>
                    </td>
                </tr>
            </tr><?php } ?>
            </tbody>

            </table> 
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