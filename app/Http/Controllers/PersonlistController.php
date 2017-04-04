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

        $data = [];

//               Vārdu lists -------------------------------------->>>>

        $listofname=array("Janis"=>"red","Peteris"=>"green","Ilmars"=>"blue","Maris"=>"yellow", "Haralds"=>"white");
        $data['name'] = (array_rand($listofname));

//               Random gadu skaits -------------------------------->>>>

        $age = rand(0, 100);
        $data['age'] = $age;
//               Random bilance ----------------------------------->>>>>

        $moneyBilance = rand(-100, 100);
        $data['bi'] = $moneyBilance;

        // foreach ($moneyBilance as $thatone){
        //    if ($thatone > 0) {
        //         "#006400";
        //    } else if ($thatone < 0){
        //         "#FF0000";
        //    } else ($thatone == 0){
        //         "#000000";
        //    }      
        // }

//               Cik personas izvadīs norādot get parametru ----------->>>>>

        $howmuchget = request()->get("x");

        return view("personlist", $data);        
        
    }
}