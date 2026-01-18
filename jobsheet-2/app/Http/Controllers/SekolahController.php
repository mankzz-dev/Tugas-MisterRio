<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function show($id)
    {
        $daftarSekolah = [
            1 => [
                'nama' => 'SMK Informatika Utama',
                'alamat' => 'Jl. Digital No. 1, Jakarta',
                'akreditasi' => 'A'
            ],
            2 => [
                'nama' => 'SMK Teknologi Maju',
                'alamat' => 'Jl. Inovasi No. 10, Bandung',
                'akreditasi' => 'B'
            ]
        ];
        // Mencari data berdasarkan ID
        $sekolah = $daftarSekolah[$id] ?? null;
        // Proteksi jika data tidak ditemukan
        if (!$sekolah) {
            abort(404, 'Profil Sekolah Tidak Ditemukan');
        }
        // Mengirim data ke View menggunakan compact()
        return view('profil_sekolah', compact('sekolah'));
    }
}
