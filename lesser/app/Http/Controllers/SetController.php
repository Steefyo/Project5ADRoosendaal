<?php

namespace App\Http\Controllers;

// Navigating to another page.
use Illuminate\Support\Facades\Route;

// Requesting the posted data.
use Illuminate\Http\Request;

// Connection DB
use Illuminate\Support\Facades\DB;

use App\Models\Set;

class SetController extends Controller {

    // Public variable
    public $set_array;
    public $set_currently_exist_array;
    public $tempArray;

    public function __construct() {
        $this->set_array = array();
        $this->set_currently_exist_array = array();
        $this->tempArray = array();
    }

    // Get all post requests
    // Request posted id
    // Navigate to the page
    public function search(Request $request) {       
        $request->request->all();
        $id = $request->input('id');

        if (empty($id)) {
            return redirect('/home')->withErrors(['Er is geen invoer.']);
        }

        return redirect('/set/' . $id);
    }

    public function solo($id) {
        // Use Set model based on input $id
        $set = Set::where('set_num', 'LIKE', $id . '%')->first();

        // Check if the data actually exists
        if ($set) {
            return view('set/solo')->with(compact('set'));
        } else {
            return redirect('/home')->withErrors(['Lego set: ' . $id . ' bestaat niet.']);
        }        
    }

    public function multi($id) {
        // Fetch set from database
        $set = Set::where('set_num', $id)->first();

        // Push current Lego set to the "existing" list
        array_push($this->set_currently_exist_array, $set);

        // Start fetching
        $this->getSetRelevant($this->set_array);

        // Check if the system can find related items in the generated Array
        $this->getRelatedItem($this->set_array, $this->set_currently_exist_array, 'theme_id');
        $this->getRelatedItem($this->set_array, $this->set_currently_exist_array, 'theme_id');
        $this->getRelatedItem($this->set_array, $this->set_currently_exist_array, 'theme_id');

        // If related item has a broken object
        // Override broken object
        for($i = 0; $i < count($this->set_currently_exist_array); $i++) {
            if (!is_object($this->set_currently_exist_array[$i])) {
                $this->set_currently_exist_array[$i] = $this->getRelatedItem($this->set_array, $this->set_currently_exist_array, 'year');
            }
        }

        // If related item has a broken object
        // Override broken object
        for($i = 0; $i < count($this->set_currently_exist_array); $i++) {
            if (!is_object($this->set_currently_exist_array[$i])) {
                $this->set_currently_exist_array[$i] = $this->getRelatedItem($this->set_array, $this->set_currently_exist_array, 'num_parts');
            }
        }

        // If related item has a broken object
        // Override broken object
        for($i = 0; count($this->set_currently_exist_array) < 4; $i++) {
            $this->set_currently_exist_array[$i] = Set::inRandomOrder()->first();
        }

        // Renaming the value to be able to add in compact view.
        $set_related = $this->set_currently_exist_array;
        return view('set/multi')->with(compact('set', 'set_related'));
    }

    // Define starting point
    // Fetch 4000 random values
    // Fill the array using a function with logic
    // Return the array
    public function getSetRelevant($set_array) {
        $num    = 0;
        $sets   = Set::inRandomOrder()->take(4000)->get();
        $this->pushToArray($num, $this->set_array, $this->set_currently_exist_array, $sets);
        return $set_array;
    }  

    // For each item check if current exist in the "existing" list
    // If not exist
    // Continue the function until the "end is reached" (until the if statement has been completed)
    //      Add to array of found items
    //      Add 1 to the counter
    //      Restart the function
    public function pushToArray($num, $set_array, $set_currently_exist_array, $sets) {
        foreach ($set_currently_exist_array as $set_currently_exist) {
            if ($set_currently_exist->set_num != $sets[$num]->set_num) {
                if ($num < count($sets) -1) {
                    array_push($this->set_array, $sets[$num]);
                    $num++;
                    return $this->pushToArray($num, $this->set_array, $set_currently_exist_array, $sets);
                }
            }
        }
    }

    // Find related item based on KEY
    // Push to array if not exist
    public function getRelatedItem($set_array, $set_currently_exist_array, $key) {
        foreach ($this->set_array as $set) {
            foreach ($this->set_currently_exist_array as $set_currently_exist) {
                if ($set_currently_exist[$key] == $set[$key]) {
                    if (!in_array($set, $this->set_currently_exist_array)) {
                        array_push($this->set_currently_exist_array, $set);
                    }
                }
            }
        }
    }
}