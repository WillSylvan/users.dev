<?php

namespace App\Http\Controllers;

class PlaygroundController {
    public function index() {
      $data ["allUsers"] = \App\User::all();
        return view("listwithpersons", $data);
    }
}
