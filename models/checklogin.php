<?php
class checklogin{
	//un and pass will come from the form
	public function _construct($username, $password){
		$db = new PDO("mysql:hostname=localhost;dbname=ssl_note","root","root");
		$sql = "select * from users where username=:username and password=:password";
		$st = $db->prepare($sql);
		$st -> execute(array(":username"=>$username, ":password"=>$password));
		$val = $st -> fetchAll();
		//Need a logged in column for this to work
		if($val){
			$_SESSION["loggedin"]=1;
			echo("VAL1");
			header("location: ");
		}else{
			$_SESSION["loggedin"] = 0;
			echo("VAL2");
			header("location: ");
		}
	}

}

session_start();
echo("session started");
$check = new checklogin($_POST["username"], md5($_POST["password"]));
var_dump($_SESSION);