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


Route::get('test', function() {

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

Route::get("skaitlosana", "SkaitlosanaController@index");
Route::get("darbs", "DarbsController@index");
Route::get("tasks", "TasksController@index");
Route::get("randomnum", "RandomNumController@index");
Route::get("klasesdarbs", "KlasesdarbsController@index");
Route::get("personlist", "PersonlistController@index");
Route::get("userlist", "UserlistController@index");
Route::get("demo", "DemoController@index");
