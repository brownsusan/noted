<?php

class Validate{
	
	public static function email($email){
		$match = preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $email);
		
		if($match == 1){
			return TRUE;
		}
		
		return FALSE;
	}
	
	
	public static function username($username){
		$match = preg_match('/^(?=.{1,15}$)[a-zA-Z][a-zA-Z0-9]*(?: [a-zA-Z0-9]+)*$/', $username);
		
		if($match == 1){
			return TRUE;
		}
		
		return FALSE;
	}
	
	
	public static function firstName($firstName){
		$match = preg_match('/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/', $firstName);
		
		if($match == 1){
			return TRUE;
		}
		
		return FALSE;
	}
	
	
	public static function lastName($lastName){
		$match = preg_match('/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/', $lastName);
		
		if($match == 1){
			return TRUE;
		}
		
		return FALSE;
	}
	
	
	public static function password($password){
		$match = preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/', $password);
		
		if($match == 1){
			return TRUE;
		}
		
		return FALSE;
	}
	
}