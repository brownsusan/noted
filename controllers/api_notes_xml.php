<?php
header('Content-type: text/xml');

$userId = $_GET['user_id'];

// Load Data
$note_model = new noteModel();
$notes = $note_model -> getNotes($userId);

$xml = "<notes>";
//make a for each loop for notes at note
foreach($notes as $note){
	$xml .= "<note>";
		$xml .= "<id>".$note['noteId']."</id>";  
		$xml .= "<title>".$note['title']."</title>";
		$xml .= "<body>".$note['body']."</body>";  
		$xml .= "<category>".$note['categoryId']."</category>";    
	$xml .= "</note>";
}
$xml .= "</notes>";

echo $xml;
