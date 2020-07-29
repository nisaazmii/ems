<?php

require_once '../../model/CustomerData/quesInfo.php';


class queController {
	
	//add question

   public function askquestion()
    {
       
       $askquestion = new quesInfo();
       
       $askquestion->email = $_POST['email'];
                
       $askquestion->question = $_POST['question'];
       
       
       $askquestion->askquestion();
       
       $message="Your Question has been send";
                    echo "<SCRIPT type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../../view/CustomerInterface/submitInterface.php');
                        </SCRIPT>";
       }
      
               
    }


