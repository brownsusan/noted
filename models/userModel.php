<?php
class userModel{
	//un and pass will come from the form
	public function checkUser($email, $password){
				
		$db = new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$sql = "select * 
				from user
				where email=:email and password=:password";
		$st = $db->prepare($sql);
		$st -> execute(array(":email"=>$email, ":password"=>$password));
		$row = $st -> fetch();
		
		return $row;
	}

}