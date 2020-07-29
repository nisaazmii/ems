<?php

require_once '../../model/EventOrganizerData/vieweqInfo.php';

class vieweqController {
	
	//display att
	
	
	public function index($value=''){
		// assign the returned values(array of equipment object) to variable users
		$booking = vieweqinfo::Alleq(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment
					
									
		return $booking;
	}


public function searcheq($equipment){
		// assign the returned values(array of equipment object) to variable users
		$booking = new vieweqinfo();
		$booking->seaEq = $equipment; // we use the static method All() that we
		$result = $booking->Seareq($equipment);				  		// created in equipment model to retrieve all 
							  		// data for equipment
					
									
		return $result;
	}
		
	
      
               
    }

