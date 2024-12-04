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
                "id" => "fhoeiqnjewu1",
                "namaReminder" => "Pengingat 1",
                "jadwalReminder" => date($format, strtotime("+5 day")),
                "catatanPengingat" => "Catatan Reminder",
                "perulangan" => "Tahunan",
                "namaKontak" => "John Doe",
            ],
            [
                "id" => "fhoeiqnjewu2",
                "namaReminder" => "Pengingat 2",
                "jadwalReminder" => date($format, strtotime("+3 day")),
                "catatanPengingat" => "Catatan Reminder",
                "perulangan" => "Bulanan",
                "namaKontak" => "John Doe",
            ],
        ];
        return response()->json($return);
    }

    public function getByID($id)
    {
        $format = "Y-m-d H:i:s";
        $return = [
            "id" => $id,
            "namaReminder" => "Pengingat 1",
            "jadwalReminder" => date($format, strtotime("+5 day")),
            "catatanPengingat" => "Catatan Reminder",
            "perulangan" => "Tahunan",
            "namaKontak" => "John Doe",
        ];
        return response()->json($return);
    }
}
