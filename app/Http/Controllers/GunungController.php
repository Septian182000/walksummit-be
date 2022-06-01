<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GunungController extends Controller
{
    public function getInformasiGunung()
    {
        $jumlahPendaki = Pelanggan::where('checkout', 0)->count();
        $jumlahKuota = Jalur::where('status', 1)->sum('kuota');
        $sisaKuota = $jumlahKuota - $jumlahPendaki;

        $response = [
            'message' => 'Informasi Gunung',
            'data' => [
                'jumlah_pendaki' => $jumlahPendaki,
                'kuota_maksimal' => $jumlahKuota,
                'sisa_kuota' => $sisaKuota
            ]
        ];


        return response()->json($response, Response::HTTP_OK);
    }
}
