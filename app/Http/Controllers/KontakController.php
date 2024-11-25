<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function general()
    {
        $return = [
            "Hot" => random_int(0, 30),
            "Medium" => random_int(0, 30),
            "Low" => random_int(0, 30),
            "Follow Up" => random_int(0, 30),
            "Follow Up Lanjutan" => random_int(0, 30),
            "Customer" => random_int(0, 30),
            "Netral" => random_int(0, 30),
            "Repeat Order" => random_int(0, 30),
        ];
        return response()->json($return);
    }
}
