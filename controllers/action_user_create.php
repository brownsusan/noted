<?php

// if something is invalid
if(
	empty($_POST['username']) || !Validate::username($_POST['username']) ||
	empty($_POST['email']) || !Validate::email($_POST['email']) ||
	empty($_POST['password']) || !Validate::password($_POST['password']) ||
	empty($_POST['confirmPassword']) ||
	$_POST['password'] != $_POST['confirmPassword'] ||
	empty($_POST['firstname']) || !Validate::firstName($_POST['firstname']) ||
	empty($_POST['lastname']) || !Validate::lastName($_POST['lastname']) ||
	empty($_POST['terms']) || $_POST['terms'] != TRUE
){
	header('Location: '.$_SERVER['HTTP_REFERER']);
	exit;
}







$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$user_model = new userModel();
$user = $user_model -> createUser($username, $email, $password, $firstname, $lastname);

if($user){
	$_SESSION['user'] = $user;
	header('Location: '.$GLOBALS['web_root'].'?action=notes');
}else{
	header('Location: '.$GLOBALS['web_root']);
}
