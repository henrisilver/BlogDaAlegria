<?php

class comment{

	var $id;
	var $post_id;
	var $email;
	var $name;
	var $content;
	var $date;
	
	function comment($i, $pi, $e, $n, $c, $d){
		
		$this->id = $i;
		$this->post_id = $pi;
		$this->email = $e;
		$this->name = $n;
		$this->content = $c;
		$this->date = new datetime($d);
	}
	
	
}

?>