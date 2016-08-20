<?php
namespace App\Controllers\Admin;

use App\Core\Controller;

class Editor extends Controller
{
	public function index()
	{
		$this->layout = 'plain';
	    return $this->getView();
	}
}