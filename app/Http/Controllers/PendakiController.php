<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PendakiController extends Controller
{
    public function destroy($id)
    {
        Pelanggan::destroy($id);

        return back();
    }

    public function edit($id)
    {
        $pendaki = Pelanggan::findOrFail($id);

        return view('pages.pendaki.edit')->with([
            'pendaki' => $pendaki,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'no_telp_orgtua' => 'required|numeric',
        ]);

        Pelanggan::where('id', $id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'no_telp_orgtua' => $request->no_telp_orgtua,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('grup.detail', $request->grup_id);
    }
}
