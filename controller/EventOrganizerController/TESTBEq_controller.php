<?php
require_once '../../model/EventOrganizerData/TESTBEq_model.php';
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


	public function total($gtotal, $stdate, $endate, $stt, $ent, $qty)
	{
		$t=$gtotal;

		$ob = new TESTBEq_model();
		//$ob->idd=$id;

		$ob->startdate=$stdate;
		$ob->enddate=$endate;
		$ob->starttime=$stt;
		$ob->endtime=$ent;
		$ob->quantity=$qty;
		$ob->price=$t;
		$ob->gtotal();

	}
}

?>