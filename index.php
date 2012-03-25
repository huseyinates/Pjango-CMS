<?php
define('APPLICATION_PATH', dirname(__FILE__));
define('SITE_PATH', dirname(__FILE__));

set_include_path(APPLICATION_PATH.'/lib'
		.PATH_SEPARATOR.APPLICATION_PATH.'/apps'
		.PATH_SEPARATOR.get_include_path());

require_once 'pjango/conf/global_settings.php';
require_once  APPLICATION_PATH.'/settings.php';
require_once  SITE_PATH.'/settings.php';
		
require_once 'pjango/core/application.php';		
$pa = Pjango_Application::getInstance();
$pa->run(pjango_ini_get('APPLICATION_ENV'));