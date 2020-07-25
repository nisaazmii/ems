<?php

require_once '../../model/SystemAdministratorData/AccountInfo.php';
/**
 * 
 */
class AccountController
{
//fro validate the login inputs with the database
	public function view()
	{
	//get the returned value  from validate function  in account class
		$user = account::validate();

		
		 foreach ($user as $tmp) 
            { 
          //all statements to check the login verfication
		if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Customer" && $tmp['Account_Type']=="Customer")
		{

					header("Location: http://localhost/ems/view/EventOrganizerInterface/EOHomeInterface.php");
			
				
		}
		else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Supplier" && $tmp['Account_Type']=="Supplier")
		{

					header("Location: http://localhost/ems/view/SupplierInterface/SupplierHomeInterface.html");	
			
		}
			else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="EventOrganizer" && $tmp['Account_Type']=="EventOrganizer")
		{

			
					header("Location: http://localhost/ems/view/EventOrganizerInterface/EOHomeInterface.php");
			
		}
		else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $tmp['Account_Type']=="Admin")
		{

			
					header("Location: AdminHome.php");
			
		}
		else
		{

    		$error = "<script type='text/javascript'>alert('the username or password is wrong, do it again')</script>";		

		}
         
        } 

        echo $error;
		return $user;
	}


//to update the user password
	public function forget()
	{
		$user1 = new account();
		
		
		$user1->Password = $_POST['Password'];
		$user1->Username = $_POST['Username'];
		
		$user1->update();
		
	}

//to allow user to register to the system (customer)
	public function add()
	{
		$user1 = new account();
		
		$user1->Username = $_POST['Username'];
		$user1->Password = $_POST['Password'];
		$user1->Name = $_POST['Name'];
		$user1->Email = $_POST['Email'];
		$user1->Address = $_POST['Address'];
		$user1->ContactNo = $_POST['ContactNo'];
		$user1->ICno = $_POST['ICno'];
		$user1->Gender = $_POST['Gender'];
		$user1->Approval_Status ="PENDING";
		$user1->Approval_Date =date("Y-m-d");
		$user1->Account_Type ="Customer";

		$user1->save();
		echo "<script>window.open('Login.php','_self')</script>";

		
	}
	//to allow user to register to the system (supplier)

		public function S_add()
	{
		$user1 = new account();
		
		$user1->Username = $_POST['Username'];
		$user1->Password = $_POST['Password'];
		$user1->Name = $_POST['Name'];
		$user1->Email = $_POST['Email'];
		$user1->Address = $_POST['Address'];
		$user1->ContactNo = $_POST['ContactNo'];
		$user1->ICno = $_POST['ICno'];
		$user1->Gender = $_POST['Gender'];
		$user1->Approval_Status ="PENDING";
		$user1->Approval_Date =date("Y-m-d");
		$user1->Account_Type ="Supplier";
		$user1->Company =$_POST['Company'];

		$user1->S_save();
					echo "<script>window.open('Login.php','_self')</script>";

		
	}

//to allow user to register to the system (event organizer)

		public function E_add()
	{
		$user1 = new account();
		
		$user1->Username = $_POST['Username'];
		$user1->Password = $_POST['Password'];
		$user1->Name = $_POST['Name'];
		$user1->Email = $_POST['Email'];
		$user1->Address = $_POST['Address'];
		$user1->ContactNo = $_POST['ContactNo'];
		$user1->ICno = $_POST['ICno'];
		$user1->Gender = $_POST['Gender'];
		$user1->Approval_Status ="PENDING";
		$user1->Approval_Date =date("Y-m-d");
		$user1->Account_Type ="EventOrganizer";
		$user1->Company =$_POST['Company'];

		$user1->E_save();
					echo "<script>window.open('Login.php','_self')</script>";

	}


}





