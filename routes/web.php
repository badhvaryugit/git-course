<?php

use App\Http\Controllers\FirstProjectController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Models\Todo;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first/{id}', function ($id) {
    return view('first');
});

Route::get('home', [UserController::class, 'index']);

Route::get('about', [UserController::class, 'about']);

/*Route::get('/about', function() {
    if(!session()->has('name')) {
        session()->flash('error', 'Access denied.');
        return redirect('login');
    } else {
        Route::get('about', [UserController::class, 'about']);
    }
});
*/

Route::get('services', [UserController::class, 'services']);

Route::get('/user_home/{id}', [UserController::class, 'index']);

Route::view('page', 'page');
Route::view('page2', 'page2');

Route::view('my_form', 'form');
Route::post('formSubmit', [FormController::class, 'index']);

/*Route::get('/web', function () {
    return view('web', array('data' => array('Bhavin', 'Meghna')));
});*/

Route::group(['middleware' => ['UserCheck']], function () {
    Route::view('news1', 'news1');
    Route::view('news2', 'news2');
});

//Route::view('news1', 'news1');
//Route::view('news2', 'news2');

Route::view('denied', 'denied');

Route::get('session_set', [UserController::class, 'session_set']);
Route::get('session_get', [UserController::class, 'session_get']);
Route::get('session_remove', [UserController::class, 'session_remove']);
Route::get('session_check', [UserController::class, 'session_check']);

Route::view('login', 'login');
Route::post('loginSubmit', [UserController::class, 'loginSubmit']);
Route::get('/logout', function() {
    session()->forget('name');
    session()->flash('error', 'You are successfully logged out.');
    return redirect('login');
});

Route::group(['middleware' => ['UserAuth']], function () {
    Route::get('home', [UserController::class, 'index']);
    Route::get('about', [UserController::class, 'about']);
    Route::get('services', [UserController::class, 'services']);
});

Route::get('select', [FirstProjectController::class, 'select']);
Route::get('insert', [FirstProjectController::class, 'insert']);
Route::get('update', [FirstProjectController::class, 'update']);
Route::get('delete', [FirstProjectController::class, 'delete']);

Route::get('get_data', [ProfileController::class, 'index']);


/* CRUD operation Video - Small Todo project */
Route::get('todo_show', [TodoController::class, 'show']);
Route::get('todo_delete/{id}', [TodoController::class, 'destroy']);
Route::get('todo_create', [TodoController::class, 'create']);
Route::post('todo_submit', [TodoController::class, 'store']);
Route::get('todo_edit/{id}', [TodoController::class, 'edit']);
Route::post('todo_update/{id}', [TodoController::class, 'update'])->name('todo.update');