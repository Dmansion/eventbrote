<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	use Sluggable;

	// protected $primaryKey = 'slug';
	protected $fillable  = [
		'title',
		'description',
		'slug'
	];


	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title',
				'onUpdate' => true,
			],
			
		];
	}



}
