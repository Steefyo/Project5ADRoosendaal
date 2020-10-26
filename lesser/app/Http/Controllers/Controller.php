<?php

namespace App\Http\Controllers;

use App\Models\Set;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {}

    public function index() {

        // TODO Insert random function here
        $set = Set::inRandomOrder()->first();
        $set_number = $set->set_num;

    	return view('home')->with(compact('set'));
    }
}
