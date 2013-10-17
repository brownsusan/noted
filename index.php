<?php

session_start();


$GLOBALS['web_root'] = '/php/';

require ('libs/CaptchaSecurityImages.php');
require ('libs/protector.php');
require ('libs/viewModel.php');

require ('models/noteModel.php');
require ('models/categoryModel.php');
require ('models/userModel.php');

// if no action is given we obviously are at the root of the site
// thus we should load the landing page
if (empty($_GET['action'])) {

	// load the landing view
	// $viewModel -> getView('views/landing/body.php', $data);
	require 'controllers/landing.php';

}

else {
	//If the file does not exist with the action that was passed in from the url
	if(!file_exists('controllers/'.$_GET['action'].'.php')){
		//Load the error controller
		require 'controllers/error_404.php';
		//Then stop the file from proceeding
		exit;
	}
	//Otherwise load the controller for the action that was passed in through the url.
	//This action variable comes from the hrefs & form action attributes that are hard coded into the html
	require 'controllers/'.$_GET['action'].'.php';
}

exit;






/********** CLASS EXAMPLE **********/
// this is temp from class
// decide the what other page to load
if ($_GET['action'] == 'form') {

	$viewModel -> getView('views/form/body.php', $data);

} else if ($_GET['action'] == 'action_user_create') {

	//var_dump($_POST);
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$terms = $_POST['terms'];

	if (preg_match('/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/', $firstName)) {
		print('Match');
	} else {
		print('Not a match');
	}
	if (preg_match('/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/', $lastName)) {
		print('Match');
	} else {
		print('Not a match');
	}
	if (preg_match('/^(?=.{1,15}$)[a-zA-Z][a-zA-Z0-9]*(?: [a-zA-Z0-9]+)*$/', $username)) {
		print('Match');
	} else {
		print('Not a match');
	}
	if (preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $email)) {
		print('Match');
	} else {
		print('Not a match');
	}
	if ($terms){
		print('Match');
	}else{
		print('Match');
	}
	/*
	 Password matching expression.
	 Password must be at least 8 characters,
	 no more than 15 characters, and
	 must include at least one upper case letter,
	 one lower case letter, and
	 one numeric digit.
	 */
	if (preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/', $password)) {
		print('Match');
	} else {
		print('Not a match');
	}
	if ($password == $confirmPassword) {

	} else {
		print('Not a match');
	}
	//Here I would want to be getting the notes.
} else if ($_GET['action'] == "notes") {
	$data = $noteModel -> getNotes();
	$viewModel -> getView("views/app/body.php", $data);
	$viewModel -> getView("views/app/nav.php", $data);
	/* 	var_dump($data); */

} else if ($_GET['action'] == "updateform") {
	$data = $noteModel -> getNotes($_GET["id"]);
	$viewModel -> getView("views/form/updateUserForm.php", $data);
} else if ($_GET['action'] == "updateuser") {
/* 	$noteModel -> updateUser($_POST['id'], $_POST['username']); */
	$data = $noteModel -> getNotes();
	$viewModel -> getView('views/app/body.php', $data);
	$viewModel -> getView('views/app/nav.php', $data);
}
