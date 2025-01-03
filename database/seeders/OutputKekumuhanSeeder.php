<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OutputKekumuhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data output kekumuhan yang lebih banyak
        $outputs = [
            [
                'kode_output' => '001',
                'indeks_kumuh' => 29,
                'status_kumuh' => 'Sedang',
                'kontribusi_penanganan' => 19.35,
                'tahun' => 2024,
                'kode_desa' => '332601001',
                'desa_id' => 1,
            ],
            [
                'kode_output' => '002',
                'indeks_kumuh' => 45,
                'status_kumuh' => 'Berat',
                'kontribusi_penanganan' => 25.75,
                'tahun' => 2023,
                'kode_desa' => '332601002',
                'desa_id' => 2,
            ],
            [
                'kode_output' => '003',
                'indeks_kumuh' => 15,
                'status_kumuh' => 'Ringan',
                'kontribusi_penanganan' => 10.00,
                'tahun' => 2025,
                'kode_desa' => '332601003',
                'desa_id' => 3,
            ],
            [
                'kode_output' => '004',
                'indeks_kumuh' => 35,
                'status_kumuh' => 'Sedang',
                'kontribusi_penanganan' => 20.00,
                'tahun' => 2024,
                'kode_desa' => '332601004',
                'desa_id' => 4,
            ],
            [
                'kode_output' => '005',
                'indeks_kumuh' => 50,
                'status_kumuh' => 'Berat',
                'kontribusi_penanganan' => 30.25,
                'tahun' => 2023,
                'kode_desa' => '332601005',
                'desa_id' => 5,
            ],
            [
                'kode_output' => '006',
                'indeks_kumuh' => 10,
                'status_kumuh' => 'Ringan',
                'kontribusi_penanganan' => 5.75,
                'tahun' => 2025,
                'kode_desa' => '332601006',
                'desa_id' => 6,
            ],
            [
                'kode_output' => '007',
                'indeks_kumuh' => 40,
                'status_kumuh' => 'Berat',
                'kontribusi_penanganan' => 22.50,
                'tahun' => 2022,
                'kode_desa' => '332601007',
                'desa_id' => 7,
            ],
            [
                'kode_output' => '008',
                'indeks_kumuh' => 18,
                'status_kumuh' => 'Ringan',
                'kontribusi_penanganan' => 12.00,
                'tahun' => 2024,
                'kode_desa' => '332601008',
                'desa_id' => 8,
            ],
            [
                'kode_output' => '009',
                'indeks_kumuh' => 25,
                'status_kumuh' => 'Sedang',
                'kontribusi_penanganan' => 15.25,
                'tahun' => 2023,
                'kode_desa' => '332601009',
                'desa_id' => 9,
            ],
            [
                'kode_output' => '010',
                'indeks_kumuh' => 55,
                'status_kumuh' => 'Berat',
                'kontribusi_penanganan' => 35.75,
                'tahun' => 2022,
                'kode_desa' => '332601010',
                'desa_id' => 10,
            ],
            [
                'kode_output' => '011',
                'indeks_kumuh' => 15,
                'status_kumuh' => 'Tidak',
                'kontribusi_penanganan' => 20.75,
                'tahun' => 2024,
                'kode_desa' => '332601010',
                'desa_id' => 11,
            ],
            [
                'kode_output' => '012',
                'indeks_kumuh' => 10,
                'status_kumuh' => 'Tidak',
                'kontribusi_penanganan' => 12.75,
                'tahun' => 2024,
                'kode_desa' => '332601010',
                'desa_id' => 12,
            ],
        ];

        // Insert data ke tabel output_kekumuhans
        foreach ($outputs as $output) {
            DB::table('output_kekumuhans')->insert([
                'kode_output' => $output['kode_output'],
                'indeks_kumuh' => $output['indeks_kumuh'],
                'status_kumuh' => $output['status_kumuh'],
                'kontribusi_penanganan' => $output['kontribusi_penanganan'],
                'tahun' => $output['tahun'],
                'kode_desa' => $output['kode_desa'],
                'desa_id' => $output['desa_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
