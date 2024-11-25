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
            "fotoProfil" => "https://firebasestorage.googleapis.com/v0/b/sales-mobil-dba13.appspot.com/o/default_profile.png?alt=media&token=f2715c1f-822e-4c65-89b3-0b6faf8614ba",
        ];
        return response()->json($return);
    }
}
