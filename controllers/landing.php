<?php

// create the view model so we can use it to load views
$viewModel = new viewModel();


// if the user is not logged in
if(!(isset($_SESSION['user']) && isset($_SESSION['user']['userId']))){
	

	$viewModel -> getView('views/template/header.php');
	$viewModel -> getView('views/landing/body.php');
	$viewModel -> getView('views/template/foot.php');

}else{
	
	$user = $_SESSION['user'];
	$userId = $_SESSION['user']['userId'];
	
	
	$note_model = new noteModel();
	// this function gets all the notes from a database
	$notes = $note_model -> getNotes($userId);
	
	$category_model = new categoryModel();
	$categories = $category_model -> getCategories($userId);
	
	$viewModel -> getView('views/template/app-header.php', $user);
	$viewModel -> getView('views/notes/body.php', $notes);
	$viewModel -> getView('views/notes/nav.php', $categories);
	$viewModel -> getView('views/template/foot.php');
	
}








