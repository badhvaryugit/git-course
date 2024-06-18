<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index($id = '') {
        // echo 'Hello Index!' . $id;

        // To load a home view
        return view('user.header').view('user.index', array('userid' => $id)).view('user.footer');
    }

    function about(Request $r) {
        // To load about view
        return view('user.header').view('user.about').view('user.footer');
    }

    function services($id = '') {
        // To load a services view
        return view('user.header').view('user.services').view('user.footer');
    }

    function session_set(Request $r) {
        $r->session()->put('name', 'Bhavin');
    }

    function session_get(Request $r) {
        echo $r->session()->get('name');
    }

    function session_remove(Request $r) {
        $r->session()->forget('name');
    }

    function session_check(Request $r) {
        if($r->session()->has('name')) {
            echo "Session Yes";
        } else {
            echo "Session No";
        }
    }

    function loginSubmit(Request $r) {
        $r->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $r->input('email');
        $passoword = $r->input('password');

        if ($email == 'b@gmail.com' && $passoword == 'Bhavin') {
            $r->session()->put('name', 'Bhavin'); // set the session by giving name
            return redirect('home'); // then redirect to home/index page
        } else {
            session()->flash('error', 'Please enter valid login details.'); // display error message
            return redirect('login'); // redirect back to login page
        }
    }
}