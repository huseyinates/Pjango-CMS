<?php
require_once 'pjango/shortcuts.php';
require_once 'pjango/contrib/admin/util.php';
require_once 'pjango/http.php';
require_once 'pjango/core/mail.php';


class DefaultappViews {
	
	function index($request, $slug=false) {
	    $templateArr = array();
		render_to_response("index.html", $templateArr);
	}
}