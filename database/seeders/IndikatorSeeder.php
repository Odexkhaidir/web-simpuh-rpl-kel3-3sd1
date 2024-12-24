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
                'nama_indikator' => 'Kesejahteraan Masyarakat',
                'deskripsi' => 'Mengukur tingkat kesejahteraan masyarakat desa.',
                'persentase' => 75.5,
                'tahun' => 2023,
                'kode_desa' => null,
                'desa_id' => 1,
            ],
            [
                'kode_indikator' => 'IND002',
                'nama_indikator' => 'Kesehatan',
                'deskripsi' => 'Indikator untuk menilai akses dan kualitas layanan kesehatan.',
                'persentase' => 85.3,
                'tahun' => 2023,
                'kode_desa' => null,
                'desa_id' => 1,
            ],
            [
                'kode_indikator' => 'IND003',
                'nama_indikator' => 'Pendidikan',
                'deskripsi' => 'Mengukur tingkat pendidikan masyarakat desa.',
                'persentase' => 90.2,
                'tahun' => 2023,
                'kode_desa' => null,
                'desa_id' => 3,
            ],
        ];

        foreach ($indikators as $indikator) {
            DB::table('indikators')->insert([
                'kode_indikator' => $indikator['kode_indikator'],
                'nama_indikator' => $indikator['nama_indikator'],
                'deskripsi' => $indikator['deskripsi'],
                'persentase' => $indikator['persentase'],
                'tahun' => $indikator['tahun'],
                'kode_desa' => $indikator['kode_desa'],
                'desa_id' => $indikator['desa_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}