<?php

require_once '../../libs/database.php';

/**
* Model class for Equipment
*/
class EqInfo{

	public $table = 'equipment';

	public $eqid;
	public $EqName;
	public $Qty;
	public $EqPrice;
	public $EqDate;

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
	* based on the eqid passed to the method

	* @param int eqid
	*/

	public static function getById($eqid){

		$query = "SELECT * FROM equipment WHERE eqid = :eqid LIMIT 1";

		$param = [':eqid' => $eqid]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query

				// need to use fetch to retrieve only 1 row of data
				// this will retrieve the row of data
				// that is associated to the passed eqid
				$equipment = $stmt->fetch(PDO::FETCH_ASSOC); 
													    	 
				// return the equipment object
				return $equipment;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function save(){

		$query = "INSERT INTO equipment (`EqName`, `Qty`, `EqPrice`, `EqDate`) VALUES (:EqName, :Qty, :EqPrice, :EqDate)";

		$param = [ //the parameter that will be bind by pdo
			':EqName' => $this->EqName,
			':Qty' => $this->Qty,
			':EqPrice' => $this->EqPrice,
			':EqDate' => $this->EqDate
			];	

		try { 
			// use static method run() from class DB
	    	if ($stmt = DB::Run($query, $param)) { 

	    		// we dont use fetch() or fetchAll() here
		   		// because no data will be return when we
				// perform update operation

	    		return true;
	    	};
		} catch (PDOException $e) {
			return $e->getMessage();
		}

	}

	public function update(){

		$query = "UPDATE `equipment` SET `EqName`=:EqName, `Qty`=:Qty, `EqPrice`=:EqPrice, `EqDate`=:EqDate WHERE `eqid`=:eqid";

		$param = [ //the parameter that will be bind by pdo
			':EqName' => $this->EqName,
			':Qty' => $this->Qty,
			':EqPrice' => $this->EqPrice,
			':EqDate' => $this->EqDate,
			':eqid' => $this->eqid
			];	

		try {
			// use static method run() from class DB
	    	if ($stmt = DB::Run($query, $param)) { 

	    		// we dont use fetch() or fetchAll() here
				// because no data will be return when we
				// perform update operation								   
				                                   
	    		return true;
	    	};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function delete(){

		$query = "DELETE FROM $this->table WHERE eqid=:eqid";

		$param = [':eqid' => $this->eqid]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class D
			if ($stmt = DB::Run($query, $param)) { 
				
				// we dont use fetch() or fetchAll() here
				// because no data will be return when we
				// perform delete operation
				                                   
				return true;
			}
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}
?>