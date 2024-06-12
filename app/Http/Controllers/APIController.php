<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kaos;

class APIController extends Controller
{
    public function searchkaos(Request $request)
    {
        $cari = $request->input('q');
        $kaos = Kaos::where('Merek', 'LIKE', "%$cari%")->get();
        if ($kaos->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => 'Kaos not found'
            ], 404)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        } else {
            return response()->json([
                'success' => true,
                'data' => $kaos
            ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
    }
}
