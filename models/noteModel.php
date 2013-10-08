<?php

class noteModel{
	public function getNotes(){
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$st = $db->prepare("select * from note");
		$st->execute();
		$obj = $st->fetchAll();
				
		return $obj;
	}
	
/* 	CHANGE PARAMETERS TO MATCH THE TABLE */
	public function updateNote($noteId = '', $title = '', $body = '', $category = ''){
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		
		//var dump
		//echo all variables (parameters)
		
		$sql = "update note set
				title = :title,
				body = :body,
				category = :category
				where
				noteId = :noteId";
		$statement = $db -> prepare($sql);
		$statement -> execute(array(":noteId"=>$noteId, ":title" => $title, ":body"=>$body, ":category" => $category));
	}
}



/*
THIS IS FOR GETTING ONE SPECIFIC THING FROM THE DB
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