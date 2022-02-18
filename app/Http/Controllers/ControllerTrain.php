<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class ControllerTrain extends Controller
{
    public function index() {
        $trains = Train::where("startingTime", ">=", "2022-02-18 00:00")->get();
        @dd($trains);
    }
}
