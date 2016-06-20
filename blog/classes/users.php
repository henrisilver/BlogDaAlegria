<?php

class users{

	var $id;
	var $email;
	var $password;
	var $name;
	
	function users($i, $e, $s, $n){
		
		$this->id = $i;
		$this->email = $e;
		$this->password = $s;
		$this->name = $n;
	}	
	
}

?>