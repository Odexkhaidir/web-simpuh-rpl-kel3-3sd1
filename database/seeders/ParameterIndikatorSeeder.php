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
        $parameters = [
            [
                'nama_parameter_indikator' => 'Jumlah Sekolah Dasar',
                'nilai' => 15,
                'satuan' => 'unit',
                'kode_indikator' => 'IND001',
                'nama_sub_indikator' => 'Fasilitas Pendidikan',
                'nama_indikator' => 'Pendidikan',
            ],
            [
                'nama_parameter_indikator' => 'Tingkat Kemiskinan',
                'nilai' => 10,
                'satuan' => '%',
                'kode_indikator' => 'IND002',
                'nama_sub_indikator' => 'Indikator Sosial',
                'nama_indikator' => 'Kesejahteraan Sosial',
            ],
        ];

        foreach ($parameters as $parameter) {
            DB::table('parameter_indikators')->insert([
                'nama_parameter_indikator' => $parameter['nama_parameter_indikator'],
                'nilai' => $parameter['nilai'],
                'satuan' => $parameter['satuan'],
                'kode_indikator' => $parameter['kode_indikator'],
                'nama_sub_indikator' => $parameter['nama_sub_indikator'],
                'nama_indikator' => $parameter['nama_indikator'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
