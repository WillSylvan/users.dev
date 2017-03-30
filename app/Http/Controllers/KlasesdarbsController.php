<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlasesdarbsController
{

    public function index()
    {
        $data = [];
        $i=1;
        $myarray = [];

        $limit = request()->get("x");
        $min = $limit / 2;
        $max = $limit * $limit;

//                                Radom skaitļi masīvā                             >>>>>

        while($i<=10) {
            $myarray[] = rand($min, $max);
            $i++;
        }
        
        $data['randlist'] = $myarray;

                            //   Salīdzina  X ar Y                                >>>>
        $equivalent = [];

        foreach ($myarray as $value){
           if ($limit >= $value){
                $equivalent[] = $value;
           }
        }
        
        $data['equivalent'] = $equivalent;
       
 //                             Izvada cik elementi ir Masīvā                     >>>>
        $data['allnumberinlist'] = count($equivalent);

        return view("klasesdarbs", $data);
    }
}