<?php

namespace App\Http\Controllers;

class PlaystoreController {
    public function index($id) {
       $data ["user"] = \App\User::find($id);
        return view("person", $data);
    }
}

