<?php

namespace App\Http\Controllers;

class SkaitlosanaController {
    public function index() {
        $name = "Janis Latgalis";
        $data["name"] = $name;
        $name = "Janis Latgalis";
        $data["namecount"] = strlen($name);
        $name = "Janis Latgalis";
        $data["namestrtolower"] = strtolower($name);
        $name = "Janis Latgalis";
        $data["namesstrtoupper"] = strtoupper($name);
        $numbers = [12,3,2,4,6,88,7];
        $data["list"] = $numbers;
        sort($numbers);
        $data["sortedlist"] = $numbers;
        $data["maxnumb"] = max($numbers);
        $data["minnumb"] = min($numbers);
        $data["hownumbers"] = count($numbers);
        return view("skaitlosana", $data);

    }
}

