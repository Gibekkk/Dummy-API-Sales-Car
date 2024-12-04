<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NotifikasiController extends Controller
{
    public function getAll()
    {
        $return = [
            [
                "id" => "feuhwfe1",
                "namaNotifikasi" => "Agenda hari ini: Ulang Tahun Ahmad!",
                "deskripsiNotifikasi" => "Agenda kamu hari ini: lorem ipsum",
                "isRead" => true,
            ],
            [
                "id" => "feuhwfe2",
                "namaNotifikasi" => "Agenda hari ini: Ulang Tahun Ahmad!",
                "deskripsiNotifikasi" => "Agenda kamu hari ini: lorem ipsum",
                "isRead" => false,
            ],
        ];
        return response()->json($return);
    }

    public function getByID($id)
    {
        $return = [
            "id" => $id,
            "namaNotifikasi" => "Agenda hari ini: Ulang Tahun Ahmad!",
            "deskripsiNotifikasi" => "Agenda kamu hari ini: lorem ipsum",
            "isRead" => random_int(0,1) == 1,
            "isDeleted" => random_int(0,1) == 1
        ];
        return response()->json($return);
    }
}
