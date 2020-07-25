<?php

require_once '../../model/CustomerData/viewInfo.php';

class viewController {
	
	//display att
	
	public function index($value=''){
		// assign the returned values(array of equipment object) to variable users
		$booking = viewinfo::Allpack(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment
					
									
		return $booking;
	}
	
	
   	public function sort(){

		$sort = $_POST['sort'];
		if ($sort == "PkgName")
		{
		// assign the returned values(array of equipment object) to variable users
		$booking = viewinfo::sortNM(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment
		}
		else 
		{
			// assign the returned values(array of equipment object) to variable users
		$booking = viewinfo::sortPC(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment

		}	
									
		return $booking;
	}
      
               
    }

