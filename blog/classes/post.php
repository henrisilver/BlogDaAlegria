<?php

class post{

	var $id;
	var $user_id;
	var $user_email;
	var $user_name;
	var $title;
	var $content;
	var $date;
	
	function post($i, $u, $e, $n, $t, $c, $d){
		
		$this->id = $i;
		$this->user_id = $u;
		$this->user_email = $e;
		$this->user_name = $n;
		$this->title = $t;
		$this->content = $c;
		$this->date = new datetime($d);
	}
}

?>