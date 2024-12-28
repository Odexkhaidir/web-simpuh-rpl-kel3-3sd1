<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubIndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subIndikators = [
            [
                'kode_sub_indikator' => 'SUBIND001A',
                'nama_sub_indikator' => 'Ketidakteraturan Bangunan',
                'nilai' => 6.00,
                'satuan' => 'Unit',
                'persentase' => 3.43,
                'versi' => '0.1',
                'kode_indikator' => 'IND001',
                'indikator_id' => 1,
            ],
            [
                'kode_sub_indikator' => 'SUBIND001B',
                'nama_sub_indikator' => 'Kepadatan Bangunan',
                'nilai' => '-',
                'satuan' => 'Ha',
                'persentase' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND001',
                'indikator_id' => 1,
            ],
            [
                'kode_sub_indikator' => 'SUBIND001A',
                'nama_sub_indikator' => 'Ketidakteraturan Bangunan',
                'nilai' => 6.00,
                'satuan' => 'Unit',
                'persentase' => 3.43,
                'versi' => '0.1',
                'kode_indikator' => 'IND001',
                'indikator_id' => 1,
            ],
            
        ];

        foreach ($subIndikators as $subIndikator) {
            DB::table('subIndikators')->insert([
                'kode_sub_indikator' => $subIndikator['kode_sub_indikator'],
                'nama_sub_indikator' => $subIndikator['nama_sub_indikator'],
                'nilai' => $subIndikator['nilai'],
                'satuan' => $subIndikator['satuan'],
                'persentase' => $subIndikator['persentase'],
                'versi' => $subIndikator['versi'],
                'kode_indikator' => $subIndikator['kode_indikator'],
                'indikator_id' => $subIndikator['indikator_id'],
                'timestamp' => $subIndikator['timestamp'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}