<?php
class userModel{
	//un and pass will come from the form
	public function checkUser($data){
		session_start();
		
		$db = new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$sql = "select username, password 
				from user
				where username=:username and password=:password";
		$st = $db->prepare($sql);
		$st -> execute(array(":username"=>$data[username], ":password"=>$data[password]));
		$val = $st -> fetchAll();
		$isgood = $st->rowCount();
		
		if($isgood > 0){
			$_SESSION["loggedin"] = 1;
			return 1;
		}else{
			$_SESSION["loggedin"] = 0;
			return 0;
		}
	}

}