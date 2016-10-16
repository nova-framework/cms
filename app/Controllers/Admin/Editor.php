<?php
namespace App\Controllers\Admin;

use App\Core\BackendController;

class Editor extends BackendController
{
	public function index()
	{
		$this->layout = 'plain';
	    return $this->getView();
	}
}