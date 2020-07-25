<?php

require_once '../../model/SupplierData/progressInfo.php';

class progressController {

	//add details

   public function testing()
    {
       
       $testing = new progressInfo();
       
       $testing->testing = $_POST['testing'];
                
       $testing->datetesting = $_POST['datetesting'];
	   
	   $testing->timetesting = $_POST['timetesting'];
	   
	   $testing->venue = $_POST['venue'];
       
       
       $testing->testing();
       
       $message="Your testing has been send";
                    echo "<SCRIPT type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/SupplierInterface/progdetailsInterface.php');
                        </SCRIPT>";
       }
	   
	   public function index($value=''){
		// assign the returned values(array object) to variable users
		$testing = progressInfo::All(); // we use the static method All() that we
							  		// created  model to retrieve all 
							  		// data 
					
									
		return $testing;
	}
	   
      
               
    }
?>