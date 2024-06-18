<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstProjectController extends Controller
{
    function select() {
        // Selecting the record using query builder
        
        $result = DB::table('users')->get();
        // $result = DB::table('users')->where('id', 1)->get();
        // $result = DB::table('users')->orderBy('id', 'desc')->get();
        // $result = DB::table('users')->exists();
        // $result = DB::table('users')->count();
        // $result = DB::table('users')->max('id'); // you can use min(), sum(), avg()
        // $result = DB::table('users')->select(array('id','name'))->get();

        // Using raw()
        //$result = DB::select(DB::raw('select * from users'));

        echo '<pre>';
        print_r($result);
    }    

    function insert() {
        // Inserting a record using query builder
        DB::table('users')->insert(
            array('name'=>'Aashka', 'email'=>'a@email.com', 'password'=>'123456')
        );
    }

    function update() {
        // Update a record using query builder
        DB::table('users')->where('id', 3)->update(
            array('name'=>'new', 'email'=>'new@email.com', 'password'=>'123456')
        );
    }

    function delete() {
        // Delete a record using query builder
        DB::table('users')->where('id', 3)->delete();
    }
}
