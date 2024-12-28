<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ParameterIndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parameterIndikators = [
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

        foreach ($parameterIndikators as $parameterIndikator) {
            DB::table('laporans')->insert([
                'kode_laporan' => $parameterIndikator['kode_laporan'],
                'timestamp' => $parameterIndikator['timestamp'],
                'isi_laporan' => $parameterIndikator['isi_laporan'],
                'photo_bukti' => $parameterIndikator['photo_bukti'],
                'status_laporan' => $parameterIndikator['status_laporan'],
                'kode_user' => $parameterIndikator['kode_user'],
                'kode_desa' => $parameterIndikator['kode_desa'],
                'desa_id' => $parameterIndikator['desa_id'],
                'judul' => $parameterIndikator['judul'],
                'deskripsi' => $parameterIndikator['deskripsi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
