<?php
session_start();
require_once '../../controller/CustomerController/vieweqcontroller.php';

$data = new vieweqcontroller();
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
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i><span id="date"></span> <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+12)-345-6789</p>
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
                        <a class="nav-brand" href="index.html"><img src="../../libs/img/core-img/logo12.png" alt=""></a>

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
                                    <li class="active"><a href="./HomeInterface.php">Home</a></li>
                                    <li><a href="#">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="./viewpackInterface.php">View Event Package</a></li>
											<li><a href="./viewquipInterface.php">View Equipment List</a></li>
                                            
                                            
                                        
                                        </ul>
                                    </li>
									
									<li><a href="#">Booking </a>
                                        <ul class="dropdown">
                                            <li><a href="./IndexBookingInterface.php">Booking List</a></li>
											<li><a href="./bookingInterface.php">Make new booking</a></li>
                                            
                                            
                                        
                                        </ul>
                                    </li>
									
									

									<li><a href="./index_feedback.php">Feedback</a></li>
                                    
                                    <li><a href="../WelcomePage.php">Log out</a></li>
                                    
                                </ul>

                                

                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="./bookingInterface.php" class="btn akame-btn">Book Now</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Empty Area Start -->
    <section id="bill-css">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/100.png);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">

                            <!-- Welcome Text -->
							
							



<!DOCTYPE html>
<html>
<head>
    
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
</head>
<body>
 
    <!-- container -->
     <div class="container">
  
        <div class="page-header">
            <h1>Equipment List</h1>
        </div>
      
		<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
  <main>
    <section class="container" style="padding: 50px">
      
      <div class="row">
        <div class="col-12">

            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>

                    <th><b>ID</b></th>
                    <th><b>Equipment Name</b></th>
					<th><b>Quantity</b></th>
                    <th><b>Price</b></th>
                   

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
                      

                    </tr>
                  </tr><?php } ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
		
             
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
         
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<!-- confirm delete record will be here -->
 
</body>
</html>

							
                            <div class="col-12 col-md-9 col-lg-6">
                                
                            
                            
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>
    <!-- Empty Area End -->
	
   

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