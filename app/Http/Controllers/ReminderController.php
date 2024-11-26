<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ReminderController extends Controller
{
    public function getAll()
    {
        $format = "Y-m-d H:i:s";
        $return = [
            [
                "namaReminder" => "Pengingat 1",
                "jadwalReminder" => date($format, strtotime("+5 day")),
                "catatanPengingat" => "Catatan Reminder",
                "perulangan" => "Tahunan",
                "namaKontak" => "John Doe",
            ],
            [
                "namaReminder" => "Pengingat 2",
                "jadwalReminder" => date($format, strtotime("+3 day")),
                "catatanPengingat" => "Catatan Reminder",
                "perulangan" => "Bulanan",
                "namaKontak" => "John Doe",
            ],
        ];
        return response()->json($return);
    }
}
