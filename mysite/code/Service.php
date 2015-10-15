<?php
class Service extends DataObject {

	private static $db = array(
		'Title' => 'Text',
		'Content' => 'HTMLText', 
		'SortOrder' => 'Int',

	);

	private static $many_many = array(
		'Categories' => 'Category',
	);


}

