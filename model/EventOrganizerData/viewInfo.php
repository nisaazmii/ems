<?php

require_once '../../libs/database.php';
/**
 * 
 */
class viewInfo
{
	public $table = 'eventbook';
	
	public $value,$eventname,$packagename,$startdate,$enddate,$starttime,$endtime,$venue,$price,$PkgName,$PkgDesc,$PkgPrice;
        
        public function booking()
	{
		$query="INSERT INTO eventbook (eventname,packagename,startdate,enddate,starttime,endtime,venue,price) 
		VALUES (:eventname,:packagename,:startdate,:enddate,:starttime,:endtime,:venue,:price)";
                $param=[ ':eventname' => $this->eventname, ':packagename' => $this->packagename, ':startdate' => $this->startdate, ':enddate' => $this->enddate, ':starttime' => $this->starttime, ':endtime' => $this->endtime, ':venue' => $this->venue, ':price' => $this->price ];
                $stmt = DB::RUN($query, $param);
               
	}
	
	public static function Allpack()	{

		$query = "SELECT * FROM package";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$booking = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with equipment array
				return $booking;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
	

	public static function sortNM()	{

		$query = "SELECT * FROM package ORDER BY PkgName ASC";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$booking = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with equipment array
				return $booking;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}


	public static function sortPC()	{

		$query = "SELECT * FROM package ORDER BY PkgPrice ASC";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$booking = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with equipment array
				return $booking;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
	
	
        
        
}
?>
