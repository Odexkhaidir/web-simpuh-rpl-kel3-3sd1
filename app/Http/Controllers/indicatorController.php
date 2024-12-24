<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class indicatorController extends Controller
{

    public function getIndicators($userId)
    {
        // Mengambil data user berdasarkan ID
        $user = User::with('indicators')->find($userId);

        // Validasi jika user tidak ditemukan
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }

        // Mengambil nilai value dari relasi indicators
        $indicatorValues = $user->indicators->pluck('value');

        return response()->json([
            'success' => true,
            'data' => $indicatorValues
        ]);
    }

}
