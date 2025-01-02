<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SaranPenangananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $saranPenanganans = [
            [
                'kode_saran_penanganan' => 'SP001',
                'desa_id' => 1, // Sesuaikan dengan ID desa yang ada di tabel desas
                'kode_desa' => '3326012001',
                'saran_penanganan' => 'Perbaikan jalan utama di Desa Klesem.',
            ],
            [
                'kode_saran_penanganan' => 'SP002',
                'desa_id' => 2,
                'kode_desa' => '3326012002',
                'saran_penanganan' => 'Pengadaan saluran air bersih di Desa Bodas.',
            ],
            [
                'kode_saran_penanganan' => 'SP003',
                'desa_id' => 3,
                'kode_desa' => '3326012003',
                'saran_penanganan' => 'Pembangunan drainase di Desa Sukoharjo.',
            ],
            [
                'kode_saran_penanganan' => 'SP004',
                'desa_id' => 4,
                'kode_desa' => '3326012004',
                'saran_penanganan' => 'Pengelolaan sampah terpadu di Desa Gembong.',
            ],
            [
                'kode_saran_penanganan' => 'SP005',
                'desa_id' => 5,
                'kode_desa' => '3326012005',
                'saran_penanganan' => 'Perbaikan fasilitas umum di Desa Garungwiyoro.',
            ],
        ];

        foreach ($saranPenanganans as $saranPenanganan) {
            DB::table('saran_penanganans')->insert([
                'kode_saran_penanganan' => $saranPenanganan['kode_saran_penanganan'],
                'desa_id' => $saranPenanganan['desa_id'],
                'kode_desa' => $saranPenanganan['kode_desa'],
                'saran_penanganan' => $saranPenanganan['saran_penanganan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
