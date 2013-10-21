<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost:8888/php/?action=api_notes_json&user_id=' . $_GET['id']);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
curl_close($curl);
//Adding in true will return an associative array
$dataObject = json_decode($data);
//-> is similar to dot syntax and is used for objects
//[] are used for associative arrays

foreach($dataObject as $note){
	
	echo $note -> noteId;
	echo '<br /><hr />';
	echo $note -> title;
	echo '<br /><hr />';
	echo $note -> body;
	echo '<br /><hr />';
	echo $note -> categoryId;
	echo '<br /><hr /><br/><br/><br/><br/>';
	
	$db = new PDO ("mysql:hostname=localhost;dbname=ssl_note","root","root");
		//Make a variable for the sql query
		$sql = "insert into api_note(
				noteUserId,
				title,
				body,
				categoryId)
				Values(:noteUserId, :title, :body, :categoryId)";
		//Prepare the statement - store it in a variable
		$statement = $db -> prepare($sql);
		//Execute the statement - passing all the values to the query that we received when the function is called
		$statement -> execute(array(":noteUserId"=>$note -> noteUserId, ":title"=>$note -> title, ":body"=>$note -> body, ":categoryId" => $note -> categoryId));
	
}

