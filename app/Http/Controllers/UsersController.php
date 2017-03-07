<?php

namespace App\Http\Controllers;

class UsersController {

    public function index() {
      $data ["allUsers"] = \App\User::all();
        return view("listwithpersons", $data);
    }

    public function show($id) {
       $data ["user"] = \App\User::find($id);
        return view("person", $data);
    }

}

