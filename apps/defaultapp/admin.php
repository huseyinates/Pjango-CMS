<?php
require_once 'pjango/contrib/admin/admin.php';
require_once 'pjango/contrib/admin/sites.php';

class DefaultappAdmin extends ModelAdmin {

    public function __construct(){
        
        $this->admin_menu = array('site', pjango_gettext('Site'), '/admin/settings/contactus/',
					array('contactus', pjango_gettext('Contactus'), '/admin/settings/contactus/'),
					array('pagelayoutcategory', pjango_gettext('Categories'), '/admin/settings/pagelayout/category/')
			);
    }

}

$site->register('Defaultapp', 'DefaultappAdmin');