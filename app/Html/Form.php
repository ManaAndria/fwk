<?php 
namespace Html;

class Form {

	private $data;

	public function __construct($data = []) {
		$this->data = $data;
	}

	public function addField($field = []) {
		if ($field['type'] == 'text') {
			return '<input type="text"/>';
		} else if ($field['type'] == 'select') {
			$select = '<select>';
			foreach ($field['option'] as $option) {
				$select .= '<option value="'. $option .'"></option>';
			}
			$select .= '</select>';
			return $select;
		}
	}

}

?>