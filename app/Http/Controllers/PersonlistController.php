<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonlistController
{

    public function index()
    {
        $allPersons = [];
        $data = [];
        $howmuchget = request()->get("x");
//               Vārdu lists -------------------------------------->>>>

        $listofname = ["Janis","Peteris","Ilmars","Maris", "Haralds"];

        for ($x=0; $x<=$howmuchget; $x++)
        {
                $allPersons[] = [
                        "name" => $listofname[array_rand($listofname)],
                        "age" => rand(0, 100),
                        "bilance" => rand(-100.00, 100.00),
                ];
                
        } 

        $data['allpersons'] = $allPersons;

        return view("personlist", $data);        
        
    }
}