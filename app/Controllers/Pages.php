<?php
namespace App\Controllers;

use Core\Controller;
use Core\View;
use Request;
use App\Models\Page;

class Pages extends Controller {

	public function fetch()
	{
	    $request = Request::path();

	    if ($request == '/') {
	    	$page = Page::where('id', 1)->first();
	    } else {
	    	$page = Page::
	    	where('slug', $request)
	    	->where('active', 'Yes')
	    	->where('publishedDate', '<=', date('Y-m-d H:i:s'))
	    	->first();
	    }

	    if (empty($page)) {
	    	return View::make('Error/404')->shares('title', 'Page not found!');
	    }

	    if (!file_exists(APPDIR.'Templates/'.$this->template.'/'.$page->layout.'.php')){
	    	$page->layout = 'default';
	    }

	    $this->layout = $page->layout;

	    return View::make('Default')
	    ->shares('title', $page->pageTitle)
	    ->shares('browserTitle', $page->browserTitle)
	    ->withContent($page->content);
	}
}