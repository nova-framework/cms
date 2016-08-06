<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Models\Page;
use Config;
use Input;
use Redirect;
use Validator;
use Helpers\Document;
use Helpers\Url;

class Pages extends Controller
{
	public function index()
	{
		$pages = Page::paginate(25);
	    return $this->getView()->shares('title', 'Manage Pages')->withPages($pages);
	}

	public function create()
	{
		$layoutfiles = $this->getLayoutFiles();
	 	return $this->getView()->shares('title', 'Create Page')->withLayouts($layoutfiles);   
	}

	public function store()
	{
	    $input = Input::only('browserTitle', 'pageTitle', 'active', 'publishedDate', 'content', 'layout');

	    $validate = $this->validate($input);

	    if ($validate->passes()) {

	    	$slug = Url::generateSafeSlug($input['pageTitle']);

	    	//save
	    	$page = new Page();
	    	$page->browserTitle = $input['browserTitle'];
	    	$page->pageTitle = $input['pageTitle'];
	    	$page->slug = $slug;
	    	$page->active = $input['active'];
	    	$page->publishedDate = $input['publishedDate'];
	    	$page->content = $input['content'];
	    	$page->layout = $input['layout'];
	    	$page->save();

	    	return Redirect::to('admin/pages')->withStatus('Page Created');
	    } 

	    return Redirect::back()->withStatus($validate->errors(), 'danger')->withInput();

	}

	public function edit($id)
	{
		$page = Page::find($id);

		if ($page === null) {
			return Redirect::to('admin/pages')->withStatus('Page not found', 'danger');
		}

	    $layoutfiles = $this->getLayoutFiles();
	 	return $this->getView()->shares('title', 'Edit Page')->withLayouts($layoutfiles)->withPage($page);
	}

	public function update($id)
	{
		$page = Page::find($id);

		if ($page === null) {
			return Redirect::to('admin/pages')->withStatus('Page not found', 'danger');
		}

	    $input = Input::only('browserTitle', 'pageTitle', 'active', 'publishedDate', 'content', 'layout');

	    $validate = $this->validate($input);

	    if ($validate->passes()) {

	    	$slug = Url::generateSafeSlug($input['pageTitle']);

	    	//save
	    	$page->browserTitle = $input['browserTitle'];
	    	$page->pageTitle = $input['pageTitle'];
	    	$page->slug = $slug;
	    	$page->active = $input['active'];
	    	$page->publishedDate = $input['publishedDate'];
	    	$page->content = $input['content'];
	    	$page->layout = $input['layout'];
	    	$page->save();

	    	return Redirect::to('admin/pages')->withStatus('Page Updated');
	    } 

	    return Redirect::back()->withStatus($validate->errors(), 'danger')->withInput();
	}

	public function destroy($id)
	{
	    $page = Page::find($id);

		if ($page === null) {
			return Redirect::to('admin/pages')->withStatus('Page not found', 'danger');
		}

		$page->delete();

		return Redirect::to('admin/pages')->withStatus('Page Deleted');
	}

	protected function getLayoutFiles()
	{
		$layoutFiles = [];
		$template = Config::get('app.template');
		$path = APPDIR.'Templates'.DS.$template.DS;

		$ignore = ['message'];

		foreach(glob($path.'*.php') as $file) {
			$file = str_replace($path, '', $file);
			$file = Document::removeExtension($file);

			if (!in_array($file, $ignore)) {
				$layoutFiles[] = $file;
			}
		}

		return $layoutFiles;
	}

	protected function validate($data) 
	{
		$rules = [
			'browserTitle' => 'required|min:3',
			'pageTitle' => 'required|min:3',
			'publishedDate' => 'required|min:3'
		];

		$attributes = [
			'browserTitle' => 'browser title',
			'pageTitle' => 'page title',
			'publishedDate' => 'published date',
		];

		return Validator::make($data, $rules, [], $attributes);
	}
}



