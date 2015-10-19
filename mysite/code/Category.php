<?php
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

	public function updateCMSFields(FieldList $fields) {
		$fields->removeByName('SortOrder');
		$fields->removeByName('Services');

		$conf = GridFieldConfig_RelationEditor::create(10);
		$conf->addComponent(new GridFieldSortableRows('SortOrder'));

		$fields->addFieldToTab('Root.Main', new GridField('Services', 'Services', $this->Services(), $conf));

	}
}
