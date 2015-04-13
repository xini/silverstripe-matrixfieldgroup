<?php
/**
 * Hidden field.
 *
 * @package forms
 * @subpackage fields-dataless
 */
class NakedTextField extends DatalessField {

	public function FieldHolder($properties = array()) {
		return $this->Field($properties);
	}

	public function __construct($title) {
		$this->title = $title;
		$name = "nakedtext-".rand(0,1000);
		parent::__construct($name, $title);
	}	
}
