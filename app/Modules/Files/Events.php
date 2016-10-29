<?php
Event::listen('modules', function($baseUri){

	$activate = ($baseUri == 'admin/files') ? "class='active'" : null;
	
	return '<li '.$activate.'><a href="'.site_url('admin/files').'"><i class="fa fa-file"></i> <span>Files</span></a></li>';
});