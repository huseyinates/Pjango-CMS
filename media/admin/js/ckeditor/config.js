﻿/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{

    config.htmlEncodeOutput = false;
    config.entities = false;	
	
	config.toolbar = 'PjangoToolbar';
 	config.toolbar_PjangoToolbar = [
		{ name: 'document', items : [ 'Source','Preview','Save','Print'] },
		{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'tools', items : [ 'Maximize', 'ShowBlocks'] },
		'/',
		{ name: 'styles', items : ['Font','FontSize' ] },
		{ name: 'basicstyles', items : [ 'TextColor','BGColor','Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
		{ name: 'paragraph', items : [ 'Blockquote','NumberedList','BulletedList','-','Outdent','Indent','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'] }
	];
};