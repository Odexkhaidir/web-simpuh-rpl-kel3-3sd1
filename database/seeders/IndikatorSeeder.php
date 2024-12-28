<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indikators = [
            [
                'kode_indikator' => 'IND001',
                'nama_indikator' => 'Kondisi Bangunan Gedung',
                'deskripsi' => ' ',
                'persentase' => 21.33,
                'tahun' => 2023,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
            [
                'kode_indikator' => 'IND002',
                'nama_indikator' => 'Kondisi Jalan Lingkungan',
                'deskripsi' => ' ',
                'persentase' => 27.81,
                'tahun' => 2023,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
            [
                'kode_indikator' => 'IND003',
                'nama_indikator' => 'Kondisi Penyesiaan Air Minum',
                'deskripsi' => ' ',
                'persentase' => 25.82,
                'tahun' => 2023,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
            [
                'kode_indikator' => 'IND004',
                'nama_indikator' => 'Kondisi Drainase Lingkungan',
                'deskripsi' => ' ',
                'persentase' => 34.96,
                'tahun' => 2023,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
            [
                'kode_indikator' => 'IND005',
                'nama_indikator' => 'Kondisi Pengelolaan Air Limbah',
                'deskripsi' => ' ',
                'persentase' => 27.70,
                'tahun' => 2023,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
            [
                'kode_indikator' => 'IND006',
                'nama_indikator' => 'Kondisi Pengelolaan Persampahan',
                'deskripsi' => ' ',
                'persentase' => 0.00,
                'tahun' => 2023,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
                        [
                'kode_indikator' => 'IND007',
                'nama_indikator' => 'Kondisi Proteksi Kebakaran',
                'deskripsi' => ' ',
                'persentase' => 50.00,
                'tahun' => 2023,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
        ];

        foreach ($indikators as $indikator) {
            DB::table('Indikators')->insert([
                'kode_indikator' => $indikator['kode_indikator'],
                'nama_indikator' => $indikator['nama_indikator'],
                'deskripsi' => $indikator['deskripsi'],
                'persentase' => $indikator['persentase'],
                'tahun' => $indikator['tahun'],
                'kode_desa' => $indikator['kode_desa'],
                'desa_id' => $indikator['desa_id'],
                'timestamp' => $indikator['timestamp'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}