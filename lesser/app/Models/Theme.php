<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model {
    use HasFactory;
    public $table = "Themes";

    // Which values are stored?
	protected $fillable = [
		'id',
		'name',
		'parent_id'
	];
}
