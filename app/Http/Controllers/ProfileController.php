<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() {
        // To view data

        //return Profile::all();
        //return Profile::where("id", 1)->get(); 
        //return Profile::find(1); // first(), min('id'), max('id'), sum('id'), avg('id'), count('id')

        // To delete 1 record

        //$res = Profile::find(2);
        //$res->delete();

        // To delete more than 1 record
        //Profile::destroy(array(1, 2));  // deletes id 1 and 2

        // To insert a new record
        // $res = new Profile;

        // $res->name = 'Aashka';
        // $res->email = 'a@email.com';
        // $res->password = '123456';
        // $res->save();

        // To update a record
        // $res = Profile::find(3);
        // $res->name = 'Aashka';
        // $res->email = 'aa@email.com';
        // $res->save();

        // or use below method for update
        $res = Profile::where('id', 3)->update(array('name' => 'Aashka', 'email' => 'aa@email.com'));
    }
}
