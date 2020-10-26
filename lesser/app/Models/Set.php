<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Set extends Model {
	use HasFactory;

	// Table name
	protected $table = "sets";

	// Which values are stored?
	protected $fillable = [
		'set_num',
		'name',
		'year',
		'theme_id',
		'num_parts'
	];

	// Connect another model to this one on certain key
	public function theme() {
		//			Belongs to is 1 on 1
		//			hasMany is 1 on ...
		//						Other model / Current key / New Key 	// Sorting mode
		return $this->belongsTo('App\Models\Theme', 'theme_id', 'id')->orderBy('id', 'DESC');
	}
}