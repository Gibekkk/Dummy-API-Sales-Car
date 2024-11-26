<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \DateTime;

class AgendaController extends Controller
{
    public function getAll()
    {
        $return = [
            "mendatang" => [
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => new DateTime("+1 day"),
                    "namaKontak" => "John Doe",
                ],
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => new DateTime("+2 day"),
                    "namaKontak" => "Mary Jane",
                ],
            ],
            "terlewat" => [
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => new DateTime("-1 day"),
                    "namaKontak" => "John Doe",
                ],
                [
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => new DateTime("-2 day"),
                    "namaKontak" => "Mary Jane",
                ],
            ],
        ];
        return response()->json($return);
    }
}
