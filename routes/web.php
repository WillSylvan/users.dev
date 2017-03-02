<?php

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
    return "Hello World";
});


Route::get("registration/{id}", function ($id) {
    $data ["user"] = \App\User::find($id);
    return view("person", $data);
});





Route::get("person", function () {


});





