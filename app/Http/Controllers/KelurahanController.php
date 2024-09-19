<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
   
    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();
        $kecamatan = Kecamatan::all(); 
        return view('admin.kelurahan', compact('kelurahan', 'kecamatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelurahan' => 'required|string|max:100',
            'id_kecamatan' => 'required|exists:kecamatan,id',
        ]);

        $kelurahan = new Kelurahan();
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
    
        return redirect()->route('admin.kelurahan')->with('success', 'Kelurahan added successfully.');
    }

    public function create()
    {
        return view('admin.kelurahan');
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->delete();

        return redirect()->route('admin.kelurahan')->with('success', 'Kelurahan removed successfully.');
    }
}
