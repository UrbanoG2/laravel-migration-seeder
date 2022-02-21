<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where("startingDate",">=", "2022-02-18")->get();
        // @dd($trains);
        $data = ["trains" => $trains];

        return view ("home", $data);
    }

    public function show(Train $train) {
        return view ("show", compact("train"));
    }
}
