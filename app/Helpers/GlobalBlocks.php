<?php
namespace App\Helpers;

use DB;

class GlobalBlocks
{
	public static function get($title, $type)
	{
	    $result = DB::table('global_blocks')->where('title', $title)->where('type', $type)->count();
	    if ($result == 0) {
	    	DB::table('global_blocks')->insert([
	    		'title' => $title,
	    		'type' => $type
	    	]);
	    }

	    return DB::table('global_blocks')->where('title', $title)->where('type', $type)->pluck('content');

	}
}