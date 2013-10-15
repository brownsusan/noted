<?php
//Needs valdation
$email = $_POST['email'];
$password = $_POST['password'];

$user_model = new userModel();
$user = $user_model -> checkUser($email, $password);

if($user){
	$_SESSION['user'] = $user;
	header('Location: '.$GLOBALS['web_root'].'?action=notes');
}else{
	$_SESSION['user'] = null;
	header('Location: '.$GLOBALS['web_root']);
}

//header does a redirect - changing the view back to notes