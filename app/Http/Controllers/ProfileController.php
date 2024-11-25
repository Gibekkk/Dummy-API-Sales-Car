<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        $return = [
            "name" => "John Doe",
            "email" => "example@gmail.com",
            "nomorWhatsapp" => "08123456789",
            "perusahaan" => "My Company",
            "kodeReferal" => "12ab34cd",
            "tanggalLahir" => date("d-m-Y"),
            "alamat" => [
                "address" => "123 Main Street",
                "provinsi" => "Sulawesi Selatan",
                "kotaKabupaten" => "Makassar/Somewhere",
            ],
        ];
        return response()->json($return);
    }
}
