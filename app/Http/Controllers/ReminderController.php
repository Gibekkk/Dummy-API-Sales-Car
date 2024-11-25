<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ReminderController extends Controller
{
    public function getAll()
    {
        $return = [
            "mendatang" => [
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date("d-m-Y", strtotime("+1 day")),
                    "namaKontak" => "John Doe",
                ],
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date("d-m-Y", strtotime("+2 day")),
                    "namaKontak" => "Mary Jane",
                ],
            ],
            "terlewat" => [
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date("d-m-Y", strtotime("-1 day")),
                    "namaKontak" => "John Doe",
                ],
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date("d-m-Y", strtotime("-2 day")),
                    "namaKontak" => "Mary Jane",
                ],
            ],
        ];
        return response()->json($return);
    }
}
