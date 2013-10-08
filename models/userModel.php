<?php

class userModel{
	public function getUsers(){
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$st = $db->prepare("select * from user");
		$st->execute();
		$obj = $st->fetchAll();
		return $obj;
	}
	
/* 	CHANGE PARAMETERS TO MATCH THE TABLE */
	public function updateUser($id = '', $username = ''){
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		
		//var dump
		//echo all variables (parameters)
		
		$sql = "update user set
				username = :username,
				where
				id = :id";
		$statement = $db -> prepare($sql);
		$statement -> execute(array(":id"=>$id, ":username" => $username));
	}
}



/*
THIS IS THE WAY IT SHOULD BE DONE - GETTING AN ERROR ON ID VARIABLE (UND)
class userModel{
	public function getUsers(){
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$sql = "select * from user where id = :id";
		$st = $db->prepare($sql);
		$st->execute(array(":id"=>$id));
		return $st->fetchAll();
	}
}
*/