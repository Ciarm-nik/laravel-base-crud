<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', function () {
    return view('welcome');
});

// Comic
Route::get("/users", "ComicController@index")->name("users.index");


Route::post("/users", "ComicController@store")->name("users.store");


Route::get("/users/create", "ComicController@create")->name("users.create");


Route::get("/users/{user}", "ComicController@show")->name("users.show");




