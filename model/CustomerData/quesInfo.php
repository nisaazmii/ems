<?php

require_once '../../libs/database.php';
/**
 * 
 */
class quesInfo
{
	public $table = 'qna';
	
	public $value,$email,$question;
        
        public function askquestion()
	{
		$query="INSERT INTO qna (email,question) VALUES (:email,:question)";
                $param=[ ':email' => $this->email, ':question' => $this->question ];
                $stmt = DB::RUN($query, $param);
               
	}
        
        
}
?>
