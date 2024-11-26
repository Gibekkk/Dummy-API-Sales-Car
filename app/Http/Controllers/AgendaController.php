<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function getAll()
    {
        $format = "Y-m-d H:i:s";
        $return = [
            "mendatang" => [
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("+1 day")),
                    "namaKontak" => "John Doe",
                ],
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("+2 day")),
                    "namaKontak" => "Mary Jane",
                ],
            ],
            "terlewat" => [
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("-1 day")),
                    "namaKontak" => "John Doe",
                ],
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("-2 day")),
                    "namaKontak" => "Mary Jane",
                ],
            ],
        ];
        return response()->json($return);
    }
}