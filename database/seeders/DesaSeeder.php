<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = [
            // Kecamatan Bojong (kode: 332601)
            ['kode_desa' => '332601001', 'nama_desa' => 'Bojong', 'kode_kecamatan' => '332601', 'kecamatan_id' => 1],
            ['kode_desa' => '332601002', 'nama_desa' => 'Bojong Timur', 'kode_kecamatan' => '332601', 'kecamatan_id' => 1],
            ['kode_desa' => '332601003', 'nama_desa' => 'Bojong Wetan', 'kode_kecamatan' => '332601', 'kecamatan_id' => 1],

            // Kecamatan Kedungwuni (kode: 332602)
            ['kode_desa' => '332602001', 'nama_desa' => 'Kedungwuni Barat', 'kode_kecamatan' => '332602', 'kecamatan_id' => 2],
            ['kode_desa' => '332602002', 'nama_desa' => 'Kedungwuni Timur', 'kode_kecamatan' => '332602', 'kecamatan_id' => 2],
            ['kode_desa' => '332602003', 'nama_desa' => 'Kedungwuni Selatan', 'kode_kecamatan' => '332602', 'kecamatan_id' => 2],

            // Kecamatan Kajen (kode: 332603)
            ['kode_desa' => '332603001', 'nama_desa' => 'Kajen', 'kode_kecamatan' => '332603', 'kecamatan_id' => 3],
            ['kode_desa' => '332603002', 'nama_desa' => 'Kajen Timur', 'kode_kecamatan' => '332603', 'kecamatan_id' => 3],
            ['kode_desa' => '332603003', 'nama_desa' => 'Kajen Barat', 'kode_kecamatan' => '332603', 'kecamatan_id' => 3],

            // Kecamatan Kesesi (kode: 332604)
            ['kode_desa' => '332604001', 'nama_desa' => 'Kesesi', 'kode_kecamatan' => '332604', 'kecamatan_id' => 4],
            ['kode_desa' => '332604002', 'nama_desa' => 'Kesesi Timur', 'kode_kecamatan' => '332604', 'kecamatan_id' => 4],
            ['kode_desa' => '332604003', 'nama_desa' => 'Kesesi Barat', 'kode_kecamatan' => '332604', 'kecamatan_id' => 4],

            // Kecamatan Sragi (kode: 332605)
            ['kode_desa' => '332605001', 'nama_desa' => 'Sragi', 'kode_kecamatan' => '332605', 'kecamatan_id' => 5],
            ['kode_desa' => '332605002', 'nama_desa' => 'Sragi Barat', 'kode_kecamatan' => '332605', 'kecamatan_id' => 5],
            ['kode_desa' => '332605003', 'nama_desa' => 'Sragi Timur', 'kode_kecamatan' => '332605', 'kecamatan_id' => 5],

            // Kecamatan Siwalan (kode: 332606)
            ['kode_desa' => '332606001', 'nama_desa' => 'Siwalan', 'kode_kecamatan' => '332606', 'kecamatan_id' => 6],
            ['kode_desa' => '332606002', 'nama_desa' => 'Siwalan Tengah', 'kode_kecamatan' => '332606', 'kecamatan_id' => 6],
            ['kode_desa' => '332606003', 'nama_desa' => 'Siwalan Timur', 'kode_kecamatan' => '332606', 'kecamatan_id' => 6],

            // Tambahkan lebih banyak desa di sini untuk semua kecamatan (hingga 200+ data)
        ];

        // Insert ke database
        foreach ($desas as $desa) {
            DB::table('desas')->insert([
                'kode_desa' => $desa['kode_desa'],
                'nama_desa' => $desa['nama_desa'],
                'kode_kecamatan' => $desa['kode_kecamatan'],
                'kecamatan_id' => $desa['kecamatan_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
