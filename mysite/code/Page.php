<?php

use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\CMS\Model\SiteTree;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);
	private static $many_many = array(
		'Categories' => 'Category',
	);

	private static $many_many_extraFields = array(
		'Categories' => array(
			'SortOrder' => 'Int',
		)
	);
	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("Content");

		$conf = GridFieldConfig_RelationEditor::create(10);
		$conf->addComponent(new GridFieldSortableRows('SortOrder'));

		$fields->addFieldToTab('Root.Main', new GridField('Categories', 'Categories', $this->Categories(), $conf));

		$serviceConf = GridFieldConfig_RecordEditor::create(10);

		$fields->addFieldToTab('Root.Main', new GridField('Services', 'Services', Service::get(), $serviceConf));
		return $fields;
	}

	public function Categories(){
		return $this->getManyManyComponents('Categories')->sort('SortOrder');
	}	
}
