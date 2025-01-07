<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ParameterUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parameters = [
            [
                'kode_parameter_umum' => 'PAR001',
                'nama_parameter_umum' => 'Luas Lahan',
                'nilai' => 1500,
                'satuan' => 'm2',
                'tahun' => 2025,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
            [
                'kode_parameter_umum' => 'PAR002',
                'nama_parameter_umum' => 'Populasi Penduduk',
                'nilai' => 2000,
                'satuan' => 'orang',
                'tahun' => 2025,
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
        ];

        foreach ($parameters as $parameter) {
            DB::table('parameter_umums')->insert([
                'kode_parameter_umum' => $parameter['kode_parameter_umum'],
                'nama_parameter_umum' => $parameter['nama_parameter_umum'],
                'nilai' => $parameter['nilai'],
                'satuan' => $parameter['satuan'],
                'tahun' => $parameter['tahun'],
                'kode_desa' => $parameter['kode_desa'],
                'desa_id' => $parameter['desa_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
