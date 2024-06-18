<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'doc' => 'required|mimes:jpeg, png|max:1024|
                dimentions:min_width=1000, min_height=200, max_width=2000, max_height=2000'
        ]);

        $request->file('doc')->store('media');

        echo 'Hello! You have Submitted Form!';

        //return $request->post('name');

        // To load a view
        //return view('user.header').view('user.index', array('userid' => $id)).view('user.footer');
    }
}