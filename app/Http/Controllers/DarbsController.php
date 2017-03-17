<?php

namespace App\Http\Controllers;

class DarbsController {
    public function index() {
        $name = "Raimonds Bergmanis";
        $data["name"] = $name;
        $data["that"] = strlen($name);
        $data["next"] = strtoupper($name);
        $data["easy"] = $name;
        $data["walk"] = ($name);
        return view("darbs", $data);
    }
}