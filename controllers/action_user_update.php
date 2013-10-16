<?php
protector::protect();

if(empty($_POST['password'])){
	header('Location: '.$GLOBALS['web_root'].'?action=account_update');
	exit;
}

//Needs valdation
$user_id = $_SESSION['user']['userId'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$user_model = new userModel();
$user = $user_model -> updateUser($user_id, $username, $email, $password, $firstname, $lastname);
$_SESSION['user'] = $user;
header('Location: '.$GLOBALS['web_root'].'?action=account');