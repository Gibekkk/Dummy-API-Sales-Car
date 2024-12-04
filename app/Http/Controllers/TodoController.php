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
                    "id" => "eywhrfiiweerg",
                ],
                [
                    "namaTodo" => "Selesaikan Code",
                    "created_at" => date($format, strtotime("-5 day")),
                    "id" => "fewgbfhr",
                ],
            ],
            "Selesai" => [
                [
                    "namaTodo" => "Selesaikan Laprak",
                    "created_at" => date($format, strtotime("-1 day")),
                    "completed_at" => date($format, strtotime("today")),
                    "id" => "ewjinlkreabrgw",
                ],
                [
                    "namaTodo" => "Selesaikan Code",
                    "created_at" => date($format, strtotime("-5 day")),
                    "completed_at" => date($format, strtotime("today")),
                    "id" => "ewhofijrkbhg",
                ],
            ],
        ];
        return response()->json($return);
    }

    public function getByID($id)
    {
        $format = "Y-m-d H:i:s";
        $return = [
            "namaTodo" => "Selesaikan Code",
            "created_at" => date($format, strtotime("-5 day")),
            "id" => $id,
            "isDone" => random_int(0,1) == 1
        ];
        return response()->json($return);
    }
}
