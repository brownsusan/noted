<?php
//Needs valdation

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$user_model = new userModel();
$user = $user_model -> createUser($username, $email, $password, $firstname, $lastname);

var_dump($user);

exit ;

if ($user) {

} else {
	header('Location: ' . $GLOBALS['web_root'] . '?action=notes');
}
