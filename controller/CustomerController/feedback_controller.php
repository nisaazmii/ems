<?php
require_once'../../model/CustomerData/feedback_model.php';

class feedback_controller
{
	public function index_feedback()
	{
		$index_feedback = new feedback_model();
		
		$index_feedback->rate = $_POST['rate'];
		
		$index_feedback->comments = $_POST['comments'];
	
		$index_feedback->index_feedback();
	
		$message="Your feedback had been submitted!";
                    echo "<SCRIPT type='text/javascript'> 
                            alert('$message');
                            window.location('../View/index_feedback.php');
                        </SCRIPT>";
	
	}
	
	
	
}


?>