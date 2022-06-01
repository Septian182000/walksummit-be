<?php

namespace App\Http\Controllers;

use App\Models\Grup;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PemesananController extends Controller
{
    public function cariGrub()
    {
        $idGrup = request('idGrup');
        $grup = Grup::join('jalurs', 'grups.jalur_id', '=', 'jalurs.id')
            ->join('pelanggans', 'grups.id', '=', 'pelanggans.grup_id')
            ->select('grups.id', 'pelanggans.nama as koordinator', 'grups.status', 'jalurs.nama as jalur')
            ->where('grups.id', $idGrup)
            ->first();

        if (!$grup) {
            $response = [
                'message' => 'grup tidak ditemukan',
            ];

            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response = [
            'message' => 'grup ditemukan',
            'data' => $grup
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
