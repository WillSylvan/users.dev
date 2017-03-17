<?php

namespace App\Http\Controllers;

class RandomNumController {
    public function index()
    {
        $i=1;
        while($i<=10) {
            $randNum[] = rand(1,13);
            $i++;
        }

        foreach ($randNum as &$new){
            $new = $new > 7;

            dd($new);
        }
    }
}






    // $filtRandNum = $randNum < 7;
    //      echo $filtRandNum;
