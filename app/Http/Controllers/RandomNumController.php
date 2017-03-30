<?php

namespace App\Http\Controllers;

class RandomNumController {
    public function index()
    {
        $i=1;
        $randNum = [];
        while($i<=10) {
            $randNum[] = rand(1,13);
            $i++;
        }

        dump($randNum);

        $smallerTo7 = [];
        foreach ($randNum as $new){
            if($new < 7) {
                $smallerTo7[] = $new;
            }
        }

        dump($smallerTo7);

        $newList = [];
        foreach ($randNum as $newpow){
            $newList[] = $newpow * $newpow;
        }

        dump($newList);

        $plusAllNumb = [];
       foreach ($newList as $i => $fp) {
           echo($i % 1 === 0 ? ' third' : '');
           // dump($fp);
       }

}
    }



