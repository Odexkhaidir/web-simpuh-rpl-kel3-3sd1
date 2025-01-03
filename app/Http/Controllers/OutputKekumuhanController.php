<?php

namespace App\Http\Controllers;

use App\Models\OutputKekumuhan;
use Illuminate\Http\Request;

class OutputKekumuhanController extends Controller
{
    public function index()
    {
        // Cek tahun terbaru yang tersedia di database
        $latestYear = OutputKekumuhan::max('tahun');
        // Ambil data untuk lima tahun terakhir
        $years = [
            $latestYear - 4,
            $latestYear - 3,
            $latestYear - 2,
            $latestYear - 1,
            $latestYear,
        ];

        $totals = [];

        // Jika tidak ada data di database, set default tahun ke null
        if (!$latestYear) {
            $latestYear = null;
            $totalKumuh = 0;
            $chartData = [
                'Tidak Kumuh' => 0,
                'Ringan' => 0,
                'Sedang' => 0,
                'Berat' => 0,
            ];
        } else {
            // Hitung jumlah wilayah kumuh dengan status "Ringan", "Sedang", dan "Berat" untuk tahun terbaru
            $totalKumuh = OutputKekumuhan::whereIn('status_kumuh', ['Ringan', 'Sedang', 'Berat'])
                            ->where('tahun', $latestYear)
                            ->count();
            foreach ($years as $year) {
                $totals[] = OutputKekumuhan::whereIn('status_kumuh', ['Ringan', 'Sedang', 'Berat'])
                    ->where('tahun', $year)
                    ->count();
            }
            $chartData = [
                'Tidak Kumuh' => OutputKekumuhan::where('tahun', $latestYear)->where('status_kumuh', 'Tidak')->count(),
                'Ringan' => OutputKekumuhan::where('tahun', $latestYear)->where('status_kumuh', 'Ringan')->count(),
                'Sedang' => OutputKekumuhan::where('tahun', $latestYear)->where('status_kumuh', 'Sedang')->count(),
                'Berat' => OutputKekumuhan::where('tahun', $latestYear)->where('status_kumuh', 'Berat')->count(),
            ];
        }

        
        // Kirimkan data ke view
        return view('Home', compact('totalKumuh', 'chartData', 'latestYear', 'years', 'totals'));
    }
}
