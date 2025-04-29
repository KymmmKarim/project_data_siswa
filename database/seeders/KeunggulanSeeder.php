<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keunggulan;

class KeunggulanSeeder extends Seeder
{
    public function run()
    {
        Keunggulan::create([
            'judul' => 'Mudah Digunakan',
            'deskripsi' => 'Antarmuka sederhana dan intuitif memudahkan siapa saja untuk mengakses.',
            'warna' => 'blue-50',
        ]);

        Keunggulan::create([
            'judul' => 'Fitur Lengkap',
            'deskripsi' => 'Kelola data siswa, peran pengguna, dan banyak lagi dalam satu platform.',
            'warna' => 'purple-50',
        ]);

        Keunggulan::create([
            'judul' => 'Aman & Terpercaya',
            'deskripsi' => 'Data tersimpan dengan aman dan hanya bisa diakses oleh yang berwenang.',
            'warna' => 'blue-100',
        ]);
    }
}