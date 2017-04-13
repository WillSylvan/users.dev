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

// ---------------DropDown  List  Stuff ------------->>>>>

        $useremail = DB::table("users")
            ->select("email")
            ->get();


        $data["email"] = $email;

        $data["name"] = $name;

        $data['emaillist'] = $useremail;

        $data['allUserOfDBlist'] = $users;

        return view("userlist", $data);

    }
}