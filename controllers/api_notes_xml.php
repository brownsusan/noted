<?php
header('Content-type: text/xml');

// MLoad is basically a require_once

// this is my equivalent of the protector

// Load Data
$note_model = new noteModel();
$notes = $note_model -> getNotes($_SESSION['user']['userId']);

/* exit(json_encode($notes[0])); */

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
