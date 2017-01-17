<?php
namespace App\Models;

use Nova\Database\ORM\Model;

class Menu extends Model
{
	public $timestamps = true;
	protected $softDelete = true;
}
