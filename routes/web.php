<?php

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// DB::listen(function($query) {
//     echo "<pre>";
//     var_dump($query->sql);
//     echo "</pre>";
// });

Route::view('/', 'home')->name('home');

Route::view('/' . __('about'), 'about')->name('about');


Route::resource('portafolio', 'ProjectController')
    ->parameters(['portafolio' => 'project'])
    ->names('projects');

Route::patch('portfolio/{project}/restore', 'ProjectController@restore')
    ->name('projects.restore');

Route::delete('portfolio/{project}/force-delete', 'ProjectController@forceDelete')
    ->name('projects.force-delete');

Route::get('categories/{category}', 'CategoryController@show')
    ->name('categories.show');

Route::view('/' . __('contact'), 'contact')
    ->name('contact');

Route::post('contact', 'MessageController@store')
    ->name('messages.store');

// Auth::routes(['register' => false]);
Auth::routes();
