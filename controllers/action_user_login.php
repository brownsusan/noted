<?php


if(
	empty($_POST['email']) || !Validate::email($_POST['email']) ||
	empty($_POST['password']) || !Validate::password($_POST['password'])
){
	header('Location: '.$GLOBALS['web_root']);
	exit;
}


$email = $_POST['email'];
$password = md5($_POST['password']);

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