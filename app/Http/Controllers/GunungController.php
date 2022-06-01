<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GunungController extends Controller
{
    public function getInformasiGunung()
    {
        $jumlahPendaki = Pelanggan::where('checkout', 0)->count();
        $jumlahKuota = Jalur::where('status', 1)->sum('kuota');
        $sisaKuota = $jumlahKuota - $jumlahPendaki;
        $kuotaTiapJalur = Jalur::where('status', 1)->select('id', 'nama', 'kuota')->get();
        $jumlahPendakiTiapJalur = Pelanggan::join('grups', 'pelanggans.grup_id', '=', 'grups.id')
            ->where('checkout', 0)
            ->select('grups.jalur_id', DB::raw('count(pelanggans.id) as jumlah'))
            ->groupBy('grups.jalur_id')
            ->get();

        $response = [
            'message' => 'Informasi Gunung',
            'data' => [
                'jumlah_pendaki' => $jumlahPendaki,
                'kuota_maksimal' => $jumlahKuota,
                'sisa_kuota' => $sisaKuota,
                'jumlah_pendaki_tiap_jalur' => $jumlahPendakiTiapJalur,
                'kuota_tiap_jalur' => $kuotaTiapJalur
            ]
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
