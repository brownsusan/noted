<?php
protector::protect();


if(
	empty($_POST['username']) || !Validate::username($_POST['username']) ||
	empty($_POST['email']) || !Validate::email($_POST['email']) ||
	empty($_POST['password']) || !Validate::password($_POST['password']) ||
	empty($_POST['confirmPassword']) ||
	$_POST['password'] != $_POST['confirmPassword'] ||
	empty($_POST['firstname']) || !Validate::firstName($_POST['firstname']) ||
	empty($_POST['lastname']) || !Validate::lastName($_POST['lastname']) ||
	empty($_POST['security_code']) || $_POST['security_code'] != $_SESSION['security_code']
){
	header('Location: '.$_SERVER['HTTP_REFERER']);
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