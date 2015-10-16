<?php
class Service extends DataObject {

	private static $db = array(
		'Title'   => 'Text',
		'Link'    => 'Text',
		'Content' => 'HTMLText',

	);

	private static $many_many = array(
		'Categories' => 'Category',
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->removeByName('SortOrder');

	}
}
