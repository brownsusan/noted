<?php

class userModel{
	public function getUsers(){
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$st = $db->prepare("select * from user");
		$st->execute();
		$obj = $st->fetchAll();
		return $obj;
	}
}