<?php
namespace App\Models;

use Database\ORM\Model;

class Menu extends Model
{
	public $timestamps = true;
	protected $softDelete = true;
}
