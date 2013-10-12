<?php
//Comes from the url (which comes from the html)
//Needs valdation
$category_id = $_GET['category_id'];

if($category_id == 1){
	header('Location: '.$GLOBALS['web_root'].'?action=notes');
	exit;
}

$note_model = new noteModel();
$note_model -> updateNoteCategory($category_id);

// this will eventually come from a database
$category_model = new categoryModel();
//This variable stores what is returned from the getNote function ($obj)
$category_model -> deleteCategory($category_id);
//header does a redirect - changing the view back to notes
header('Location: '.$GLOBALS['web_root'].'?action=notes');