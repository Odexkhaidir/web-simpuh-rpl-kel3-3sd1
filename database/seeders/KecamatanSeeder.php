<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatans = [
            ['kode_kecamatan' => '332601', 'nama_kecamatan' => 'Bojong'],
            ['kode_kecamatan' => '332602', 'nama_kecamatan' => 'Kedungwuni'],
            ['kode_kecamatan' => '332603', 'nama_kecamatan' => 'Kajen'],
            ['kode_kecamatan' => '332604', 'nama_kecamatan' => 'Kesesi'],
            ['kode_kecamatan' => '332605', 'nama_kecamatan' => 'Sragi'],
            ['kode_kecamatan' => '332606', 'nama_kecamatan' => 'Siwalan'],
            ['kode_kecamatan' => '332607', 'nama_kecamatan' => 'Wonopringgo'],
            ['kode_kecamatan' => '332608', 'nama_kecamatan' => 'Wiradesa'],
            ['kode_kecamatan' => '332609', 'nama_kecamatan' => 'Karanganyar'],
            ['kode_kecamatan' => '332610', 'nama_kecamatan' => 'Talun'],
            ['kode_kecamatan' => '332611', 'nama_kecamatan' => 'Doro'],
            ['kode_kecamatan' => '332612', 'nama_kecamatan' => 'Paninggaran'],
            ['kode_kecamatan' => '332613', 'nama_kecamatan' => 'Lebakbarang'],
            ['kode_kecamatan' => '332614', 'nama_kecamatan' => 'Petungkriyono'],
            ['kode_kecamatan' => '332615', 'nama_kecamatan' => 'Karangdadap'],
            ['kode_kecamatan' => '332616', 'nama_kecamatan' => 'Buaran'],
            ['kode_kecamatan' => '332617', 'nama_kecamatan' => 'Tirto'],
            ['kode_kecamatan' => '332618', 'nama_kecamatan' => 'Wonokerto'],
            ['kode_kecamatan' => '332619', 'nama_kecamatan' => 'Pekalongan Barat'],
            ['kode_kecamatan' => '332620', 'nama_kecamatan' => 'Pekalongan Timur'],
        ];

        foreach ($kecamatans as $kecamatan) {
            DB::table('kecamatans')->insert([
                'kode_kecamatan' => $kecamatan['kode_kecamatan'],
                'nama_kecamatan' => $kecamatan['nama_kecamatan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
