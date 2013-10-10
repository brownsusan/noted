<?php
class noteModel{
	//Function to get all Notes
	public function getNotes(){
		//Connect to database
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Prepare a sql query for the database I just connected to - store it in a var
		$st = $db->prepare("select * from note order by noteId desc");
		//Execute the query
		$st->execute();
		//Fetch everything that was returned from the query - store it in a var
		$obj = $st->fetchAll();
		//Return the var
		return $obj;
	}
	
	public function getNote($note_id){
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$st = $db->prepare("select * from note where noteId=:noteId");
		$st->execute(array(":noteId"=>$note_id));
		$obj = $st->fetch();
		return $obj;
	}
	
	//Function to update a note
	public function updateNote($noteId = '', $title = '', $body = '', $category = ''){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "update note set
				title = :title,
				body = :body,
				category = :category
				where
				noteId = :noteId";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":noteId"=>$noteId, ":title" => $title, ":body"=>$body, ":category" => $category));
	}
	
	public function createNote($title = '', $body = '', $category = ''){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "insert into note(
				title,
				body,
				category)
				Values(:title, :body, :category)";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":title" => $title, ":body"=>$body, ":category" => $category));
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