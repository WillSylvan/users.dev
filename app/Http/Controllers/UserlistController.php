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
        
        // $thatemail = request()->email;

        $useremail = DB::table("users")
            ->select("email")
            ->get();
        
        $data['emaillist'] = $useremail;

        $data['allUserOfDBlist'] = $users;

        return view("userlist", $data);

    }
}