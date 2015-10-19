<?php

class ServiceAdmin extends ModelAdmin {

	private static $menu_title = 'Services';

	private static $url_segment= 'services';

	private static $managed_models = array (
		'Service',
		);

}