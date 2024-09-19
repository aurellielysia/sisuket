<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.kecamatan', compact('kecamatan'));
    }

    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();

        return redirect()->route('admin.kecamatan')->with('success', 'Kecamatan berhasil dihapus');
    }

    public function create()
    {
        return view('admin.kecamatan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kecamatan' => 'required|max:255',
        ]);
    
        $kecamatan = new Kecamatan();
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->save();
    
        return redirect()->route('admin.kecamatan')->with('success', 'Kecamatan berhasil ditambahkan.');
    }
}
