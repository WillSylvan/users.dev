<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonlistController
{

    public function index()
    {

        // $array = [];

        // $listofpersons = ["Janis", "Peteris", "Ilmars", "Maris", "Haralds"];

        // $randomName = array_rand($listofpersons);
        // $account = rand(-100,100);
        // $age = rand(0,100);

        // dump($randomName, $account, $age);

//               Vārdu lists -------------------------------------->>>>

        $listofname=array("Janis"=>"red","Peteris"=>"green","Ilmars"=>"blue","Maris"=>"yellow", "Haralds"=>"white");
        print_r(array_rand($listofname));

//               Random gadu skaits -------------------------------->>>>

        $age = rand(0, 100);
        dump($age);

//               Random bilance ----------------------------------->>>>>

        $moneyBilance[] = rand(-100, 100);
        dump($moneyBilance);

//               Cik personas izvadīs norādot get parametru ----------->>>>>

        $limit = request()->get("x");
        



        
        
    }
}