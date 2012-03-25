<?php
include_once 'pjango/conf/urls/defaults.php';

$installedApps = pjango_ini_get('INSTALLED_APPS');
foreach ($installedApps as $app) {
    $appPath = reverse($app);
    if($appPath && is_file($appPath.'/urls.php')){include_once $appPath.'/urls.php';}
}

$urlpatterns = patterns('',
	array('^$', 'defaultapp.views.index'),
    array('^(?P<slug>.*)/$', 'pjango.contrib.pages.views.flatpage')
);

