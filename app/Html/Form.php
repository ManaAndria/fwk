<?php 
namespace Html;

class Form {

	public function addField($type = 'text') {
		return '<p><input type="'. $type .'"/></p>';
	}

}

?>