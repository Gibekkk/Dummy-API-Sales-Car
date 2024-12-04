<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function general()
    {
        $return = [
            "Hot" => random_int(0, 30),
            "Medium" => random_int(0, 30),
            "Low" => random_int(0, 30),
            "Follow Up" => random_int(0, 30),
            "Follow Up Lanjutan" => random_int(0, 30),
            "Customer" => random_int(0, 30),
            "Netral" => random_int(0, 30),
            "Repeat Order" => random_int(0, 30),
        ];
        return response()->json($return);
    }

    public function getByID($id)
    {
        $format = "Y-m-d H:i:s";
        $return = [
            "id" => "fhrwulighpi",
            "namaKontak" => "John Doe",
            "address" => "123 Main Street",
            "pekerjaanJabatan" => "Programmer",
            "nomorTelpon" => [
                [
                    "isWhatsapp" => true,
                    "nomorTelepon" => "08123456789",
                ],
                [
                    "isWhatsapp" => false,
                    "nomorTelepon" => "08123456789",
                ],
            ],
            "asalDatabase" => "Teman Kuliah",
            "fotoProfil" => "https://firebasestorage.googleapis.com/v0/b/sales-mobil-dba13.appspot.com/o/default_profile.png?alt=media&token=f2715c1f-822e-4c65-89b3-0b6faf8614ba",
            "catatan" => "Teman Baik Dulu Di Kuliah",
            "kendaraanImpian" => [
                [
                    "merekMobil" => "Toyota",
                    "namaKendaraan" => "Xenia",
                    "typeKendaraan" => "G",
                    "warna" => "Hitam",
                    "id" => "fweouirfw",
                    "isSold" => random_int(0,1) == 1
                ],
                [
                    "merekMobil" => "Toyota",
                    "namaKendaraan" => "Xenia",
                    "typeKendaraan" => "G",
                    "warna" => "Hitam",
                    "id" => "rfweufkbweuagr",
                    "isSold" => random_int(0,1) == 1
                ],
            ],
            "agenda" => [
                [
                    "id" => "fiwuelfvgewbfhq2",
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("1 day")),
                    "isPassedDue" => false
                ],
                [
                    "id" => "fiwuelfvgewbfhq1",
                    "namaAgenda" => "Kerja",
                    "lokasiAgenda" => "Kantor",
                    "jadwalAgenda" => date($format, strtotime("-1 day")),
                    "isPassedDue" => true
                ],
            ],
            "reminder" => [
                [
                    "id" => "fhoeiqnjewu1",
                    "namaReminder" => "Pengingat 1",
                    "jadwalReminder" => date($format, strtotime("+5 day")),
                    "catatanPengingat" => "Catatan Reminder",
                    "perulangan" => "Tahunan",
                ],
                [
                    "id" => "fhoeiqnjewu2",
                    "namaReminder" => "Pengingat 2",
                    "jadwalReminder" => date($format, strtotime("+3 day")),
                    "catatanPengingat" => "Catatan Reminder",
                    "perulangan" => "Tahunan",
                ],
            ],
        ];
        return response()->json($return);
    }

    public function getAll()
    {
        $return = [
            [
                "id" => "fhrwufijr",
                "namaKontak" => "John Doe",
                "address" => "123 Main Street",
                "pekerjaanJabatan" => "Programmer",
                "nomorTelpon" => [
                    [
                        "isWhatsapp" => true,
                        "nomorTelepon" => "08123456789",
                    ],
                    [
                        "isWhatsapp" => false,
                        "nomorTelepon" => "08123456789",
                    ],
                ],
                "fotoProfil" => "https://firebasestorage.googleapis.com/v0/b/sales-mobil-dba13.appspot.com/o/default_profile.png?alt=media&token=f2715c1f-822e-4c65-89b3-0b6faf8614ba",
            ],
            [
                "id" => "wubkghrifwk",
                "namaKontak" => "Mary Jane",
                "address" => "123 Main Street",
                "pekerjaanJabatan" => "Programmer",
                "nomorTelpon" => [
                    [
                        "isWhatsapp" => true,
                        "nomorTelepon" => "08123456789",
                    ],
                ],
                "fotoProfil" => "https://firebasestorage.googleapis.com/v0/b/sales-mobil-dba13.appspot.com/o/default_profile.png?alt=media&token=f2715c1f-822e-4c65-89b3-0b6faf8614ba",
            ],
        ];
        return response()->json($return);
    }
}
