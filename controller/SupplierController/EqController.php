<?php
require_once '../../model/SupplierData/EqInfo.php';
/**

* 

*/
class EqController{

	public function index($value=''){
		// assign the returned values(array of equipment object) to variable users
		$equipment = EqInfo::All(); // we use the static method All() that we
							  		// created in equipment model to retrieve all 
							  		// data for equipment
		return $equipment;
	}

	public function add($value=''){

		// create new equipment object
		$equipment = new EqInfo();

		// set the attributes of equipment object
		$equipment->EqName = $_POST['EqName'];
		$equipment->Qty = $_POST['Qty'];
		$equipment->EqPrice = $_POST['EqPrice'];
		$equipment->EqDate = date("Y-m-d");

		// save new equipment into database
		$equipment->save();

		// set message
		$message="The record has been successfully added";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/SupplierInterface/indexEqInterface.php');
                        </script>";
	}

	public function get($eqid){
		
		// get equipment object associate with $eqid
		$equipment = EqInfo::getById($eqid);

		// return equipment object with the equipment details
		return $equipment;
	}

	public function update($eqid){

		// get equipment data associate with $eqid
		$findUser = EqInfo::getById($eqid);

		// update/set the attributes of the equipment
		$equipment = new EqInfo();

		$equipment->eqid = $findUser['eqid'];
		$equipment->EqName = $_POST['EqName'];
		$equipment->Qty = $_POST['Qty'];
		$equipment->EqPrice = $_POST['EqPrice'];
		$equipment->EqDate = date("Y-m-d");

		// update the equipment data in database
		$equipment->update();

		// set message
		$message="The record has been updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/SupplierInterface/indexEqInterface.php'); </script>";
	}

	public function destroy($eqid){

		// get equipment data associate with $eqid
		$findUser = EqInfo::getById($eqid);

		// update/set the attributes of the equipment
		$equipment = new EqInfo();

		$equipment->eqid = $findUser['eqid'];

		// delete the equipment
		$equipment->delete();

		// set message
		$message="The record has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/SupplierInterface/indexEqInterface.php');
                        </script>";
	}

	public function redirect($url){
        header('Location: '.$url);
        exit();
    }
}

?>