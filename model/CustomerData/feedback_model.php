<?php
require_once '../../libs/database.php';

class feedback_model
{
	public $table = 'feedback';
	
	public $rate, $comments;
	
	function index_feedback()
	{
		$query = "INSERT INTO feedback (rate, comments)VALUES (:rate, :comments)";
		
		$param = [':rate' => $this->rate, ':comments' => $this->comments];
		
		$stmt = DB::RUN($query, $param);
		
	}
	
	
}

?>