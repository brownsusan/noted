<?php
class noteModel{

	public function createNote($userId ='', $title = '', $body = '', $category_id = 1){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "insert into note(
				noteUserId,
				title,
				body,
				categoryId)
				Values(:noteUserId, :title, :body, :categoryId)";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":noteUserId" => $userId, ":title" => $title, ":body"=>$body, ":categoryId" => $category_id));
	}

	//Function to get all Notes
	public function getNotes($userId){
		//Connect to database
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Prepare a sql query for the database I just connected to - store it in a var
		//where userId=:useryId - will need a userId parameter passed in
		$st = $db->prepare("select * from note
							join category on note.categoryId = category.categoryId
							where noteUserId = :userId 
							order by noteId desc");
		//Execute the query
		$st->execute(array(":userId" => $userId));
		//Fetch everything that was returned from the query - store it in a var
		$obj = $st->fetchAll();
		//Return the var
		return $obj;
	}
	
	public function getNotesByCategory($category_id){
		//Connect to database
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Prepare a sql query for the database I just connected to - store it in a var
		$st = $db->prepare("select * from note where categoryId=:categoryId order by noteId desc");
		//Execute the query
		$st->execute(array(":categoryId"=>$category_id));
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
	public function updateNote($noteId = '', $title = '', $body = '', $category_id = ''){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "update note set
				title = :title,
				body = :body,
				categoryId = :categoryId
				where
				noteId = :noteId";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":noteId"=>$noteId, ":title" => $title, ":body"=>$body, ":categoryId" => $category_id));
	}
	
	public function updateNoteCategory($category_old, $category_new = 1){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "update note set
				categoryId = :categoryIdNew
				where
				categoryId = :categoryIdOld";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":categoryIdNew"=>$category_new, ":categoryIdOld" => $category_old));
	}
	
	public function deleteNote($id = ''){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "delete from note where noteId = :noteId";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":noteId" => $id));
	}
	
	
	
	
}