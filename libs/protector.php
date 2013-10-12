<?php

class protector{
	
	public static function protect(){
		
		//Cannot output anything on the screen before this or it will note work.
		if(!(isset($_SESSION["user"]) && isset($_SESSION["user"]['userId']))){
			header("location: ".$GLOBALS['web_root']);
			exit();
		}

	}
}