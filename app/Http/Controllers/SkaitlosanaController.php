<?php

namespace App\Http\Controllers;

class SkaitlosanaController {
    public function index() {
        $name = "Janis Latgalis";
        $data["name"] = $name;
        $data["namecount"] = strlen($name);
        $data["namestrtolower"] = strtolower($name);
        $data["namesstrtoupper"] = strtoupper($name);
        $numbers = [12,3,2,4,6,55,323,88,7];
        $data["list"] = $numbers;
        sort($numbers);
        $data["sortedlist"] = $numbers;
        $data["maxnumb"] = max($numbers);
        $data["minnumb"] = min($numbers);
        $data["hownumbers"] = count($numbers);
        $data["reversenumb"] = array_reverse($numbers);
        return view("skaitlosana", $data);

    }
}

