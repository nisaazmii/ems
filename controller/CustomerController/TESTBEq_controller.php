<?php
require_once '../../model/CustomerData/TESTBEq_model.php';
/**

* 

*/
class TESTBEq_controller
{

	public function index($value='')
	{
		// assign the returned values(array of equipment object) to variable users
		$equipment = TESTBEq_model::All(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment
		return $equipment;
	}

	public function calculate()
	{
		
		
		
	}

	public function get($EqID){
		
		// get equipment object associate with $id
		$equipment = TESTBEq_model::getById($EqID);

		// return equipment object with the equipment details
		return $equipment;
	}

	

	public function redirect($url){
        header('Location: '.$url);
        exit();
    }
}

?>