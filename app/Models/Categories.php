<?php
namespace App\Models;

use Nova\Database\ORM\Model;

class Categories extends Model
{
	public function children()
	{
	    return $this->hasMany('App\Models\Categories', 'parent_id', 'id');
	}
}