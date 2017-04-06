<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class UserlistController
{

    public function index()
    {
    

        $q = DB::table("users");

        $data['allUserOfDBlist'] = $q->get();

        return view("userlist", $data);
        
    }
}