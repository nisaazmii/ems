<?php

require_once '../../model/SystemAdministratorData/AccessInfo.php';

class AccessController
{

public function view()
	{
		//get the returned value  from model_show function  in Access class
		$dis = Access::model_show();
		return $dis;
	}



public function approve_view()
	{
		//get the returned value  from approve_show function  in Access class
		$dis = Access::approve_show();
		return $dis;
	}



	public function block_view()
	{
//get the returned value  from block_show function  in Access class
		$dis = Access::block_show();
		return $dis;
	}



   public function delete($username)
	{

		//create object of Access class
		$delete = new Access();
		//call delete_model function
		$delete->delete_model($username);

	}



	public function Block($username)
	{

		//create object of Access class
		$block = new Access();
				//call block_model function
		$block->block_model($username);

	}



	public function approve($username)
	{
	   //create object of Access class

		$approve = new Access();
		//call approve_model function
		$approve->approve_model($username);

	}




	


}
	
?>