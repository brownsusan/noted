<?php
protector::protect();

$viewModel = new viewModel();

//Temp user data
$user = $_SESSION['user'];

// Instantiating the noteModel which gets its information from a database
$user_model = new userModel();

/*
$data = array(
	'note' => $note,
	'categories' => $categories
);
*/







$viewModel -> getView('views/template/app-header.php', $user);
//Getting the update view, and giving it the data for the note that was clicked 
/* $viewModel -> getView('views/account_update/body.php', $data); */
$viewModel -> getView('views/account_update/body.php');
/* $viewModel -> getView('views/notes/nav.php'); */
$viewModel -> getView('views/template/foot.php');
