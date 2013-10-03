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
		$viewModel->getView("views/form.php", $data);
	}else if($_GET["action"]=="process"){
		//var_dump($_POST);
		$username = $_POST["username"];
		$regex = '/^(?=.{1,15}$)[a-zA-Z][a-zA-Z0-9]*(?: [a-zA-Z0-9]+)*$/';
		if(preg_match($regex, $username)){
			print('Match');
		}else{
			print('Not a match');
		}
		
/* 		echo($_POST["username"]); */
	}
}else{
	$viewModel->getView("views/form.php", $data);
}
?>
