<?php

require_once '../../controller/SystemAdministratorController/ReportController.php';
//declaration of variables

$price= array();

$total=0;
$month=1;
$size = 0;
if (isset($_POST['submit']))
{

    $month=$_REQUEST['month'];
//create object of ReportController class
    $Report = new ReportController();
    //call income_view function
    $Report->income_view();
    //get the returned value  from income_view
    $mo=$Report->income_view();

     foreach ($mo as $ro) {
//get the data from controller in put them in new varibles to display
    $price[] =$ro['price'];
   
}
$size = count($price);




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
    <title>ALIBABA - EVENT MANAGEMENT SYSTEM</title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
    <link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">


    <style >

    select {
        height: 39px;
        width: 300px;
          border-color: black;
            background: #fafafa;
            color: black;
              border-radius: 3px;


    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {
  background-color: #dddddd;

}
header:nth-child(even) {
  background-color: #000000;
}
.btn {
    height: 39px;
  border-color: black;
  background: #fafafa;
  color: black;
}

@media print
{

.h * { visibility: hidden; }

}




</style>


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
                                    <li class="active"><a href="AdminHome.php">Home</a></li>
                                    <li><a href="ManageAccounts.php">Manage Accounts</a>
                                    <li><a>Generate Report</a>
                                        <ul class="dropdown">
                                            <li><a href="SupplierReport.php">Supplier Report</a></li>
                                            <li><a href="EquipmentReport.php">Equipment Report</a></li>
                                            <li><a href="EventReport.php">Event Report</a></li>
                                            <li><a href="CustomerReport.php">Customer Report</a></li>
                                            <li><a href="IncomeReport.php">Income Report</a></li>
                                            <li><a href="analytics.php">Analytics</a></li>
                                         </ul>   
                                
                                </ul>

                                <!-- Cart Icon -->
                            
                                <!-- Book Icon -->
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4" >
                                    <a href="../WelcomePage.php" class="btn akame-btn" >Log Out</a>
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

    
     <main id="main">
        <br>
    <div id="print">
      <br><br>
       <center><h1> Income Monthly Report</h1>

    <!--==========================
      Manage Accounts Section
    ============================-->
    <br><br>
    <section id="main" class="section-bg wow fadeInUp">  
     <form method="POST" class="h">


    <select name="month">

      <option value="01" >January</option>
      <option value="02">February</option>
      <option value="03">March</option>
      <option value="04">April</option>
      <option value="05">May </option>
      <option value="06">June</option>
      <option value="07">July</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>


    </select>  

       <input type="submit" name="submit" class="btn" value="Generate">
    
</form> 
</center> 




  
    <br><br>

<table>
  <tr>

      <tr>
        <th>Month</th>
        <th>Total Income</th>
       
        


      </tr>


<?php

    for ($i=0; $i < $size; $i++) { 
//display data in view      


 $total= $total + $price[$i] ;
 } 
 ?>

 <td> <?php
   if ($month==1)
   {
       echo "January";
 } 
 else if ($month==2)
 {
        echo "February";
 }
  else if ($month==3)
 {
        echo "March";
 }
  else if ($month==4)
 {
        echo "April";
 }
  else if ($month==5)
 {
        echo "May";
 }
  else if ($month==6)
 {
        echo "June";
 }
  else if ($month==7)
 {
        echo "July";
 }
  else if ($month==8)
 {
        echo "August";
 }
 else if ($month==9)
 {
        echo "September";
 }
 else if ($month==10)
 {
        echo "October";
 }
 else if ($month==11)
 {
        echo "November";
 }
 else
 {
    echo "December";
 }
?>
<td> <?php echo $total; ?></td>

      </tr>
    


</table>
</div>

</td>
<br><br>
  <button name="print" onclick="Print('print')"  style="margin-left:1300px;" class="btn" >Print Report</button>

<script type="text/javascript">
      function Print(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
  </script>
      </section><!-- #contact -->

  </main>
  <br><br>

  <hr>

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

