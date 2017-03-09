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


Route::get("users", "UsersController@index");
Route::get("users/{id}", "UsersController@show");


Route::get('test/{a}', function($a) {

    $a=array(10,20,52,105,56,89,96,100005);
    $c=0;
    foreach($a as $b)
    {
        if($b>$c) {
            $c=$b;
        }
    }
    echo $c;
});

