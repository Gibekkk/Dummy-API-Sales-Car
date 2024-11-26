<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NotifikasiController extends Controller
{
    public function getAll()
    {
        $return = [
            [
                "namaNotifikasi" => "Agenda hari ini: Ulang Tahun Ahmad!",
                "deskripsiNotifikasi" => "Agenda kamu hari ini: lorem ipsum",
                "isRead" => true,
            ],
            [
                "namaNotifikasi" => "Agenda hari ini: Ulang Tahun Ahmad!",
                "deskripsiNotifikasi" => "Agenda kamu hari ini: lorem ipsum",
                "isRead" => false,
            ],
        ];
        return response()->json($return);
    }
}
