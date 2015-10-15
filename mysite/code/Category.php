<?php
class Category extends DataObject {

	private static $db = array(
		'Title' => 'Text',

	);


	private static $belongs_many_many = array (
		'Services' => 'Service',
		'Homepages' => 'HomePage',
	);

}


