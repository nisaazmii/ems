<?php

require_once '../../libs/database.php';

/**
* Model class for Equipment
*/
class TESTBEq_model
{

	public $table = 'eventbook';
	public $startdate;
	public $enddate;
	public $starttime;
	public $endtime;
	public $eqid;
	public $price;
	public $quantity;
	public $idd;
	



	/**
	* Static method All()
	* this method will retrieve all equipment data in database 
	* and will return the data as array of equipment object
	*/

	public static function All()	{

		$query = "SELECT * FROM equipment";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$equipment = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with equipment array
				return $equipment;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	/**
	* Static method getById()
	* this method will retrieve 1 row of data from database
	* based on the id passed to the method

	* @param int id
	*/

	public static function getById($EqID){

		$query = "SELECT * FROM equipment WHERE EqID = :EqID LIMIT 1";

		$param = [':EqID' => $EqID]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query

				// need to use fetch to retrieve only 1 row of data
				// this will retrieve the row of data
				// that is associated to the passed id
				$equipment = $stmt->fetch(PDO::FETCH_ASSOC); 
													    	 
				// return the equipment object
				return $equipment;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function gtotal()
	{
$query = "INSERT INTO  eqbook(startdate , enddate , starttime , endtime, quantity, price) VALUES ( :startdate, :enddate, :starttime, :endtime, :quantity, :price)";


		$param = [

				':price' => $this->price,
				':startdate' => $this->startdate,
				':enddate' => $this->enddate,
				':starttime' => $this->starttime,
				':endtime' => $this->endtime,
				':quantity' => $this->quantity,


				
			];

			$stmt = DB::RUN($query, $param);
	

			if ($stmt) {
    echo "<script type='text/javascript'>alert('done 3!')</script>";
    
						}
			else
						{
    	echo "<script type='text/javascript'>alert('failed!')</script>";
						}
	}

	


	
}
?>