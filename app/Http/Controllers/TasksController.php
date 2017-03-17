<?php

namespace App\Http\Controllers;

class TasksController {
    public function index() {
      $numbers = [1,3,4,8,9,2];
      
    //   $numbers = [1, 2, 3, 4, 5, 6, 7];
      $num = request()->get("number");
      $numbers[] = (int)$num;
      $sum = array_sum($numbers);
      $numbers[] = $sum;
      $third = $numbers[2];
      $second = $numbers[1];
      $multiply = $third * $second;
      $numbers[] = $multiply;
      $plus = $numbers[0] + $numbers[7];
      array_unshift($numbers, $plus);
      return($numbers);

    }
}

