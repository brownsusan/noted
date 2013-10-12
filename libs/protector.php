<?php

class protector{
	
	public function protect(){
		
		//Cannot output anything on the screen before this or it will note work.
		if(isset($_SESSION["loggedin"])){
			if($_SESSION["loggedin"]==1){
				header("location: ../day5/index.php?action=login");
			}
		}else{
			header("location: ../day5/index.php?action=login");
		}

	}

}