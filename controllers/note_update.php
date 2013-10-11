<?php

$viewModel = new viewModel();

//Get variable comes from the url
$note_id = $_GET['note_id'];

//Temp user data
$user = array('name' => 'susie');

// Instantiating the noteModel which gets its information from a database
$note_model = new noteModel();

//This variable stores what information is returned from the getNote function ($obj - a single note)
//(id comes from the url which comes from the html - it is hard coded in with a get variable)
$note = $note_model -> getNote($note_id);

$category_model = new categoryModel();
$categories = $category_model -> getCategories();

$data = array(
	'note' => $note,
	'categories' => $categories
);







$viewModel -> getView('views/template/header.php', $user);
//Getting the update view, and giving it the data for the note that was clicked 
$viewModel -> getView('views/note_update/body.php', $data);
$viewModel -> getView('views/notes/nav.php');
$viewModel -> getView('views/template/foot.php');
