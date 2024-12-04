<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function getList()
    {
        $return = [
            [
                "id" => "fewuifjb",
                "namaPaket" => "Paket Terhemat",
                "harga" => 120000,
                "diskon" => null,
                "durasiBulan" => 3,
            ],
            [
                "id" => "fewuifjbfw",
                "namaPaket" => "Paket Terbaik",
                "harga" => 250000,
                "diskon" => 5,
                "durasiBulan" => 6,
            ],
            [
                "id" => "ewuhlfqbe",
                "namaPaket" => "Paket Termantap",
                "harga" => 500000,
                "diskon" => 20,
                "durasiBulan" => 12,
            ],
        ];
        return response()->json($return);
    }
}
