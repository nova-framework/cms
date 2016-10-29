<?php
namespace App\Models;

use Nova\Database\ORM\Model;

class Page extends Model
{
	public $timestamps = true;
	protected $softDelete = true;
}