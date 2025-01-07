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
        $sarans = [
            [
                'kode_saran_penanganan' => 'SAR001',
                'saran_penanganan' => 'Perbaiki jalan utama dengan aspal berkualitas tinggi.',
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
            [
                'kode_saran_penanganan' => 'SAR002',
                'saran_penanganan' => 'Bangun saluran irigasi tambahan untuk mencegah tersumbatnya aliran air.',
                'kode_desa' => '3326192012',
                'desa_id' => 12,
            ],
        ];

        foreach ($sarans as $saran) {
            DB::table('saran_penanganans')->insert([
                'kode_saran_penanganan' => $saran['kode_saran_penanganan'],
                'saran_penanganan' => $saran['saran_penanganan'],
                'kode_desa' => $saran['kode_desa'],
                'desa_id' => $saran['desa_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
