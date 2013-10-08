<?php

require ('../models/viewModel.php');
require ('../models/noteModel.php');

// create the view model so we can use it to load views
$viewModel = new viewModel();
$noteModel = new noteModel();

// create an object (assosiative array) to pass to the header view
$data = array('name' => 'susie');
$viewModel -> getView('../views/template/header.php', $data);

// if no action is given we obviously are at the root of the site
// thus we should load the landing page
if (empty($_GET['action'])) {

	// load the landing view
	$viewModel -> getView('../views/landing/body.php', $data);
	exit ;

}

// if the app is being loaded
if ($_GET['action'] == 'app') {

	// load the app view
	$viewModel -> getView('../views/app/nav.php', $data);
	$viewModel -> getView('../views/app/body.php', $data);
	exit;

}


// this is temp from class
// decide the what other page to load
if ($_GET['action'] == 'form') {

	$viewModel -> getView('../views/form/body.php', $data);

} else if ($_GET['action'] == 'process') {

	//var_dump($_POST);
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

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
} else if ($_GET['action']=="notes"){
	$data = $noteModel -> getNotes();
	$viewModel->getView("../views/app/body.php", $data);
	$viewModel->getView("../views/app/nav.php", $data);
/* 	var_dump($data); */

	
} else if ($_GET['action']=="updateform"){
	$data = $noteModel -> getNotes($_GET["id"]);
	$viewModel->getView("../views/form/updateUserForm.php", $data);
} else if ($_GET['action']=="updateuser"){
	$noteModel -> updateUser($_POST['id'], $_POST['username']);
	$data = $noteModel->getNotes();
	$viewModel -> getView('../views/app/body.php', $data);
	$viewModel -> getView('../views/app/nav.php', $data);
}
