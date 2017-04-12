<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class DemoController
{
    public function index()
    {
        $email = request()->email;
        $name = request()->name;

        $users = DB::table("users")
            ->where("email", $email)
            ->orWhere("name", $name)
            ->get();

        $allemails = DB::table("users")
            ->select("email")
            ->get();

            
        $data["users"] = $users;
        $data["email"] = $email;
        $data["name"] = $name;
        $data["allemails"] = $allemails;

        return view("demo", $data);
    }
}