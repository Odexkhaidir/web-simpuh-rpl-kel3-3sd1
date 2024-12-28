<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laporans = [
            [
                'kode_laporan' => 'LAP001',
                'isi_laporan' => 'Kerusakan jalan utama di Desa Api-api',
                'photo_bukti' => 'photos/jalan_rusak.jpg',
                'status_laporan' => 'Pending',
                'kode_user' => 'USR001',
                'kode_desa' => '3326192012',
                'desa_id' => 12,
                'judul' => 'Kerusakan Jalan',
                'deskripsi' => 'Jalan utama mengalami kerusakan parah akibat banjir.',
            ],
            [
                'kode_laporan' => 'LAP002',
                'isi_laporan' => 'Saluran irigasi tersumbat di area persawahan.',
                'photo_bukti' => 'photos/irigasi_tersumbat.jpg',
                'status_laporan' => 'Selesai',
                'kode_user' => 'USR002',
                'kode_desa' => '3326192012',
                'desa_id' => 12,
                'judul' => 'Irigasi Tersumbat',
                'deskripsi' => 'Saluran irigasi tidak mengalir dengan baik sehingga sawah kekeringan.',
            ],
        ];

        foreach ($laporans as $laporan) {
            DB::table('laporans')->insert([
                'kode_laporan' => $laporan['kode_laporan'],
                'timestamp' => $laporan['timestamp'],
                'isi_laporan' => $laporan['isi_laporan'],
                'photo_bukti' => $laporan['photo_bukti'],
                'status_laporan' => $laporan['status_laporan'],
                'kode_user' => $laporan['kode_user'],
                'kode_desa' => $laporan['kode_desa'],
                'desa_id' => $laporan['desa_id'],
                'judul' => $laporan['judul'],
                'deskripsi' => $laporan['deskripsi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
