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

        $new = [];

        for ($i = 0; $i < count($useremail); $i++) {
            $first = $useremail[$i]->email;
            $new[] = "@" . explode("@", $first)[1];
        }

        $data["email_domain"] = $new;

        $data["email"] = $email;

        $data["email"] = $email;

        $data['emaillist'] = $useremail;


        $data['allUserOfDBlist'] = $users;

        return view("userlist", $data);

    }
}