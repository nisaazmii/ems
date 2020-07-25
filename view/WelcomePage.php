    
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
    <link rel="stylesheet" href="../libs/Style/css/style.css">
   <style type="text/css">

    
   </style>
 
</head>
<body>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form  id="signup-form" class="signup-form">
                        <h2 class="form-title" >WELCOME TO EMS</h2>
                     
                      <div class="form-group">
                        <h3>Login :</h3>
                       <a href="EventOrganizerInterface/Login.php"> <button  class="form-submit" type="button" >Login</button></a>
                      <br><br>
                      <a href="SystemAdministratorInterface/AdminLogin.php"> <button  class="form-submit" type="button" >Admin Login</button></a>
                                            <br><br>

                        <hr>
                  <h3>Register as :</h3>
                        <a href="CustomerInterface/Registration.php"> <button  class="form-submit" type="button" >Customer</button></a>
                        <br><br>
                        <a href="SupplierInterface/S_Registration.php"> <button  class="form-submit" type="button" >Supplier</button></a>
                        <br><br>
                        <a href="EventOrganizerInterface/EO_Registration.php"> <button  class="form-submit" type="button" >Event Organizer</button></a>
                    </form>
                 
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>