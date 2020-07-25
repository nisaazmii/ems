<?php

require_once '../../controller/SupplierController/AccountController.php';	



if (isset($_POST['submit'])) {
	$val = new AccountController();
	$val->view();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../../libs/Style/css/style.css">
    
</head>
<body>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Username" id="Username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Password" id="Password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        

						<div>
                         Account Type: <br>
                          <input type="radio" name="Account_Type" value="Customer" checked> Customer <br>
   						 <input type="radio" name="Account_Type" value="EventOrganizer"> Event Organizer <br>
   						 <input type="radio" name="Account_Type" value="Supplier"> Supplier <br>
                        </div>
						<br>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p class="Register">
                        Create New Account ? <a href="S_Registration.php" class="Register-link">Register</a>
                    </p>
                    <p class="Register">
                        Forget Password ? <a href="ForgetPass.php" class="Register-link">Reset</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>