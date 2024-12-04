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
                    "id" => "fiwuelfvgewbfhqd3",
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("+1 day")),
                    "namaKontak" => "John Doe",
                ],
                [
                    "id" => "fiwuelfvgewbfhq1",
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("+2 day")),
                    "namaKontak" => "Mary Jane",
                ],
            ],
            "terlewat" => [
                [
                    "id" => "fiwuelfvgewbfhq2",
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("-1 day")),
                    "namaKontak" => "John Doe",
                ],
                [
                    "id" => "fiwuelfvgewbfhq4",
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("-2 day")),
                    "namaKontak" => "Mary Jane",
                ],
            ],
        ];
        return response()->json($return);
    }

    public function getByID($id)
    {
        $format = "Y-m-d H:i:s";
        $return = [
            "id" => $id,
            "namaAgenda" => "Kerja",
            "lokasiAgenda" => "Kantor",
            "jadwalAgenda" => date($format, strtotime("+1 day")),
            "namaKontak" => "John Doe",
            "isPassedDue" => false
        ];
        return response()->json($return);
    }
}
