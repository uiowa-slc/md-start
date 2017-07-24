<?php
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
}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array(
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}

}
