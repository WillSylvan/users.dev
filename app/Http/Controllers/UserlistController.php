<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class UserlistController
{

    public function index()
    {
    
        $email = request()->email;
        $name = request()->name;


        $users = DB::table("users")
            ->where("email", $email)
            ->orWhere("name", $name)
            ->get();

        $data['allUserOfDBlist'] = $users;

        return view("userlist", $data);
        
    }
}