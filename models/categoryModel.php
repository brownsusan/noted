<?php
class categoryModel{

	public function createCategory($title = ''){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "insert into category(
				title
				)
				Values(:title)";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":title" => $title));
	}

	//Function to get all Notes
	public function getCategories(){
		//Connect to database
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Prepare a sql query for the database I just connected to - store it in a var
		$st = $db->prepare("select * from category order by categoryId");
		//Execute the query
		$st->execute();
		//Fetch everything that was returned from the query - store it in a var
		$obj = $st->fetchAll();
		//Return the var
		return $obj;
	}
	
	public function getCategory($note_id){
		$db=new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$st = $db->prepare("select * from category where categoryId=:categoryId");
		$st->execute(array(":categoryId"=>$category_id));
		$obj = $st->fetch();
		return $obj;
	}
	
	public function deleteCategory($category_id = ''){
		//Connect to database
		$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "delete from category where categoryId = :categoryId";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":categoryId" => $category_id));
	}
}