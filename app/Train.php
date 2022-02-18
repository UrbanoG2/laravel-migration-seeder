<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        "company",
        "startingStation",
        "arrivingStation",
        "startingTime",
        "arrivingTime",
        "trainCode",
        "wagonNumber",
        "inTime",
        "delayed",
    ];

    public $timestamps = false;
}
