<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function getAll()
    {
        $format = "Y-m-d H:i:s";
        $return = [
            "Belum Selesai" => [
                [
                    "namaTodo" => "Selesaikan Laprak",
                    "created_at" => date($format, strtotime("-1 day")),
                ],
                [
                    "namaTodo" => "Selesaikan Code",
                    "created_at" => date($format, strtotime("-5 day")),
                ],
            ],
            "Selesai" => [
                [
                    "namaTodo" => "Selesaikan Laprak",
                    "created_at" => date($format, strtotime("-1 day")),
                    "completed_at" => date($format, strtotime("today"),
)                ],
                [
                    "namaTodo" => "Selesaikan Code",
                    "created_at" => date($format, strtotime("-5 day")),
                    "completed_at" => date($format, strtotime("today"),
)                ],
            ],
        ];
        return response()->json($return);
    }
}
