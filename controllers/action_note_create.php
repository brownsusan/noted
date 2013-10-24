<?php
protector::protect();


if(
	empty($_POST['title']) ||
	empty($_POST['body']) ||
	!isset($_POST['category'])
){
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit;
}




$userId = $_SESSION['user']['userId'];
$title = $_POST['title'];
$body = $_POST['body'];
$category = $_POST['category'];

if($category == ''){
	$category = 1;
}

// this will eventually come from a database
$note_model = new noteModel();
//This variable stores what is returned from the getNote function ($obj)
$note = $note_model -> createNote($userId, $title, $body, $category);
//header does a redirect - changing the view back to notes
header('Location: '.$GLOBALS['web_root'].'?action=notes');