<?php
$SETTINGS['APPLICATION_ENV'] = 'DEV'; //DEV, PROD, TEST
$SETTINGS['DEBUG'] = true;

$SETTINGS['LANGUAGES'] = array(
    array('tr', 'Turkish'),
    array('en', 'English'),
);

$SETTINGS['SITE_ID'] = 1;
$SETTINGS['TIME_ZONE'] = 'Europe/Istanbul';
$SETTINGS['LANGUAGE_CODE'] = 'tr';
$SETTINGS['SECRET_KEY'] = '@qvho08lmb(nnxi(-_$hrx8bnrtvp^@laupg)e%rq6i7nf0p1i';
 
$SETTINGS['DATABASES'] = array(
	'DEV'  => 'mysql://root:@localhost/pjango-cms',
);
$SETTINGS['SITE_URL_PREFIX'] = '';
$SETTINGS['SITE_URL'] = '/Pjango-CMS';
$SETTINGS['ADMIN_SITE_URL'] = $SETTINGS['SITE_URL'].'/admin';
$SETTINGS['MEDIA_URL'] = $SETTINGS['SITE_URL'].'/media';
$SETTINGS['ADMIN_MEDIA_URL'] = $SETTINGS['MEDIA_URL'].'/admin';
$SETTINGS['ROOT_URLCONF'] = 'defaultapp.urls';
$SETTINGS['TEMPLATE_DIRS'] = array(APPLICATION_PATH.'/templates');
$SETTINGS['INSTALLED_APPS'] = array(
	'pjango.core',
    'pjango.contrib.contenttypes',   
    'pjango.contrib.auth',	
	'pjango.contrib.filemanager',
	'pjango.contrib.post',
	'pjango.contrib.pages',
	'pjango.contrib.admin',
	'defaultapp',
);
$SETTINGS['LOGIN_REDIRECT_URL'] = '/admin/';
