<?php
include('models/viewModel.php');
//Instantiating
$viewModel = new viewModel();
//Calling the class method getView
$data = array("name" => "susie");
$viewModel->getView("views/header.php", $data);

/*
var_dump($_GET);
var_dump($_POST);
*/



if(!empty($_GET['action'])){
	if($_GET["action"] == "form"){
		$viewModel->getView("views/body.php", $data);
	}else if($_GET["action"]=="process"){
		//var_dump($_POST);
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirmPassword = $_POST["confirmPassword"];
		if(preg_match('/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/', $firstName)){
			print('Match');
		}else{
			print('Not a match');
		};
		if(preg_match("/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/", $lastName)){
			print('Match');
		}else{
			print('Not a match');
		};
		if(preg_match("/^(?=.{1,15}$)[a-zA-Z][a-zA-Z0-9]*(?: [a-zA-Z0-9]+)*$/", $username)){
			print('Match');
		}else{
			print('Not a match');
		};
		if(preg_match("/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)){
			print('Match');
		}else{
			print('Not a match');
		};
/*
		Password matching expression. 
		Password must be at least 8 characters, 
		no more than 15 characters, and 
		must include at least one upper case letter, 
		one lower case letter, and 
		one numeric digit.
*/
		if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/", $password)){
			print('Match');
		}else{
			print('Not a match');
		};
		if($password == $confirmPassword){
			
		}else{
			print('Not a match');
		};
	}
}else{
	$viewModel->getView("views/body.php", $data);
}
?>
