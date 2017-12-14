<?php

global $project;
$project = 'mysite';

global $database;
$database = 'mdstart';

require_once ('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

if (Director::isLive()) {
	Director::forceSSL();
}
Authenticator::unregister('MemberAuthenticator');
Authenticator::set_default_authenticator('SAMLAuthenticator');