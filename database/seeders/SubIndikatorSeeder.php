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
            # Indikator 1
            [
                'kode_sub_indikator' => 'SUBIND001A',
                'nama_sub_indikator' => 'Ketidakteraturan Bangunan',
                'volume' => 6.00,
                'satuan' => 'Unit',
                'persentase' => 3.43,
                'nilai' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND001',
                'indikator_id' => 1,
            ],
            [
                'kode_sub_indikator' => 'SUBIND001B',
                'nama_sub_indikator' => 'Kepadatan Bangunan',
                'volume' => '-',
                'satuan' => 'Ha',
                'persentase' => 0,
                'nilai' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND001',
                'indikator_id' => 1,
            ],
            [
                'kode_sub_indikator' => 'SUBIND001C',
                'nama_sub_indikator' => 'Ketidaksesuaian dengan Persy Teknis Bangunan',
                'volume' => 112.00,
                'satuan' => 'Unit',
                'persentase' => 64.00,
                'nilai' => 3,
                'versi' => '0.1',
                'kode_indikator' => 'IND001',
                'indikator_id' => 1,
            ],

            # Indikator 2
            [
                'kode_sub_indikator' => 'SUBIND002A',
                'nama_sub_indikator' => 'Cakupan Pelayanan Jalan Lingkungan',
                'volume' => 850.00,
                'satuan' => 'Meter',
                'persentase' => 27.33,
                'nilai' => 1,
                'versi' => '0.1',
                'kode_indikator' => 'IND002',
                'indikator_id' => 2,
            ],
            [
                'kode_sub_indikator' => 'SUBIND002B',
                'nama_sub_indikator' => 'Kualitas Permukaan Jalan Lingkungan',
                'volume' => 880.00,
                'satuan' => 'Meter',
                'persentase' => 28.30,
                'nilai' => 1,
                'versi' => '0.1',
                'kode_indikator' => 'IND002',
                'indikator_id' => 2,
            ],

            # Indikator 3
            [
                'kode_sub_indikator' => 'SUBIND003A',
                'nama_sub_indikator' => 'Ketersediaan Akses Aman Air Minum',
                'volume' => '-',
                'satuan' => 'KK',
                'persentase' => 0.00,
                'nilai' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND003',
                'indikator_id' => 3,
            ],
            [
                'kode_sub_indikator' => 'SUBIND003B',
                'nama_sub_indikator' => 'Tidak Terpenuhinya Kebutuhan Air Minum',
                'volume' => 110.00,
                'satuan' => 'KK',
                'persentase' => 51.64,
                'nilai' => 3,
                'versi' => '0.1',
                'kode_indikator' => 'IND003',
                'indikator_id' => 3,
            ],

            # Indikator 4
            [
                'kode_sub_indikator' => 'SUBIND004A',
                'nama_sub_indikator' => 'Ketidakmampuan Mengalirkan Limpasan Air',
                'volume' => 2.94,
                'satuan' => 'Ha',
                'persentase' => 40.09,
                'nilai' => 1,
                'versi' => '0.1',
                'kode_indikator' => 'IND004',
                'indikator_id' => 4,
            ],
            [
                'kode_sub_indikator' => 'SUBIND004B',
                'nama_sub_indikator' => 'Ketidaktersediaan Drainase',
                'volume' => 1200.00,
                'satuan' => 'Meter',
                'persentase' => 64.78,
                'nilai' => 3,
                'versi' => '0.1',
                'kode_indikator' => 'IND004',
                'indikator_id' => 4,
            ],
            [
                'kode_sub_indikator' => 'SUBIND004C',
                'nama_sub_indikator' => 'Kualitas Kontruksi Drainase',
                'volume' => 352.50,
                'satuan' => 'Meter',
                'persentase' => 19.03,
                'nilai' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND004',
                'indikator_id' => 4,
            ],

            # Indikator 5
            [
                'kode_sub_indikator' => 'SUBIND005A',
                'nama_sub_indikator' => 'Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis',
                'volume' => 57.00,
                'satuan' => 'KK',
                'persentase' => 26.76,
                'nilai' => 1,
                'versi' => '0.1',
                'kode_indikator' => 'IND005',
                'indikator_id' => 5,
            ],
            [
                'kode_sub_indikator' => 'SUBIND005B',
                'nama_sub_indikator' => 'Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis',
                'volume' => 61.00,
                'satuan' => 'KK',
                'persentase' => 28.64,
                'nilai' => 1,
                'versi' => '0.1',
                'kode_indikator' => 'IND005',
                'indikator_id' => 5,
            ],

            # Indikator 6
            [
                'kode_sub_indikator' => 'SUBIND006A',
                'nama_sub_indikator' => 'Prasarana dan Sarana Persampahan Tidak Sesuai dengan persyaratan Teknis',
                'volume' => '-',
                'satuan' => 'KK',
                'persentase' => 0.00,
                'nilai' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND006',
                'indikator_id' => 6,
            ],
            [
                'kode_sub_indikator' => 'SUBIND006B',
                'nama_sub_indikator' => 'Sistem Pengelolaan Persampahan yang tidak sesuai Standar Teknis',
                'volume' => '-',
                'satuan' => 'KK',
                'persentase' => 0.00,
                'nilai' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND006',
                'indikator_id' => 6,
            ],

            # Indikator 7
            [
                'kode_sub_indikator' => 'SUBIND007A',
                'nama_sub_indikator' => 'Ketidaktersediaan Prasarana Proteksi Kebakaran',
                'volume' => '-',
                'satuan' => 'Unit',
                'persentase' => 0.00,
                'nilai' => 0,
                'versi' => '0.1',
                'kode_indikator' => 'IND007',
                'indikator_id' => 7,
            ],
            [
                'kode_sub_indikator' => 'SUBIND006B',
                'nama_sub_indikator' => 'Ketidaktersediaan Sarana Proteksi Kebakaran',
                'volume' => 175.00,
                'satuan' => 'Unit',
                'persentase' => 100.00,
                'nilai' => 5,
                'versi' => '0.1',
                'kode_indikator' => 'IND007',
                'indikator_id' => 7,
            ],
        ];

        foreach ($subIndikators as $subIndikator) {
            DB::table('sub_indikators')->insert([
                'kode_sub_indikator' => $subIndikator['kode_sub_indikator'],
                'nama_sub_indikator' => $subIndikator['nama_sub_indikator'],
                'volume' => $subIndikator['volume'],
                'satuan' => $subIndikator['satuan'],
                'persentase' => $subIndikator['persentase'],
                'nilai' => $subIndikator['nilai'],
                'versi' => $subIndikator['versi'],
                'kode_indikator' => $subIndikator['kode_indikator'],
                'indikator_id' => $subIndikator['indikator_id'],
                'timestamp' => $subIndikator['timestamp'] ?? Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}