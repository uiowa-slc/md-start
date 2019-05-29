<?php
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\ORM\DataObject;
class Category extends DataObject {

	private static $db = array(
		'Title' => 'Text',

	);

	private static $many_many = array(
		'Services' => 'Service',

	);

	private static $many_many_extraFields = array(
		'Services'   => array(
			'SortOrder' => 'Int',
		)
	);

	private static $belongs_many_many = array(
		'Pages' => 'Page',
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->removeByName('SortOrder');
		$fields->removeByName('Services');
		$conf = GridFieldConfig_RelationEditor::create(10);
		$conf->addComponent($sortable = new GridFieldSortableRows('SortOrder'));
		$fields->addFieldToTab('Root.Main', new GridField('Services', 'Services', $this->Services(), $conf));
		return $fields;
	}

}
