<?php

require_once '../../model/CustomerData/AccountInfo.php';
/**
 * 
 */
class AccountController
{

	public function view()
	{
		//call static method All from user class
		$user = account::validate();

		
		 foreach ($user as $tmp) 
            { 
          
		if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Customer" && $tmp['Account_Type']=="Customer")
		{

					header("Location: HomeInterface.php");	
				
		}
		else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Supplier" && $tmp['Account_Type']=="Supplier" && $tmp['
Approval_Status'] == "APPROVE")
		{

					header("Location: http://localhost/ems/view/SupplierInterface/SupplierHomeInterface.html");	
			
		}
			else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']== $tmp['Account_Type'] && $tmp['
Approval_Status'] == "APPROVE")
		{

			
					header("Location: http://localhost/ems/view/EventOrganizerInterface/EOHomeInterface.php");
			
		}
		else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $tmp['Account_Type']=="Admin")
		{

			
					header("Location: http://localhost/ems/view/SystemAdministratorInterface/AdminHome.php");
		}	
		
		else
		{

    		$error = "<script type='text/javascript'>alert('Your Account is Not Valid, Please Signup Again or Contact Admin')</script>";		

		}
         
        } 

        echo $error;
		return $user;
	}



	public function forget()
	{
		$user1 = new account();
		
		
		$user1->Password = $_POST['Password'];
		$user1->Username = $_POST['Username'];
		
		$user1->update();
		
		//Session::setFlash(['New record succesfully added'], 'success');
	}


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





