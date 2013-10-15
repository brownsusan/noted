<?php
protector::protect();
//Needs valdation
$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$user_model = new userModel();
$user = $user_model -> updateUser($title, $body, $category);
/* header('Location: '.$GLOBALS['web_root'].'?action=notes'); */