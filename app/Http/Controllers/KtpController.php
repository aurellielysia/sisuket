<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Notifications\KtpRejected;
use App\Models\User; 
use App\Models\Ktp;
use Carbon\Carbon;

class KtpController extends Controller
{
    public function index()
    {
        $ktp = Ktp::where('status', '!=', 'disetujui')->get();
        return view('admin.ktp', ['ktp' => $ktp]);
    }

    public function show($id)
    {
        $ktp = Ktp::with('kelurahan', 'kecamatan')->findOrFail($id);
        return response()->json ($ktp);
    }

    public function destroy($id)
    {
        $ktp = Ktp::findOrFail($id);
        $ktp->delete();

        return redirect()->route('admin.konfirmasi-pengajuan')->with('success', 'Data berhasil dihapus');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nik' => 'required|string|max:16|unique:ktp',
            'nama' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date_format:m/d/Y', 
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string|max:10',
            'id_kelurahan' => 'required|exists:kelurahan,id',
            'id_kecamatan' => 'required|exists:kecamatan,id',
            'agama' => 'required|string|max:20',
            'status_perkawinan' => 'required|string|max:20',
            'pekerjaan' => 'required|string|max:50',
            'kewarganegaraan' => 'required|string|max:3',
            'berlaku_hingga' => 'required|string|max:10',
        ]);
        
        $ktp = new Ktp();
        $ktp->nik = $request->input('nik');
        $ktp->nama = $request->input('nama');
        $ktp->tempat_lahir = $request->input('tempat_lahir');
        
        $ktp->tanggal_lahir = Carbon::createFromFormat('m/d/Y', $request->input('tanggal_lahir'))->format('Y-m-d');
        
        $ktp->jenis_kelamin = $request->input('jenis_kelamin');
        $ktp->alamat = $request->input('alamat');
        $ktp->rt_rw = $request->input('rt_rw');
        $ktp->id_kelurahan = $request->input('id_kelurahan');
        $ktp->id_kecamatan = $request->input('id_kecamatan');
        $ktp->agama = $request->input('agama');
        $ktp->status_perkawinan = $request->input('status_perkawinan');
        $ktp->pekerjaan = $request->input('pekerjaan');
        $ktp->kewarganegaraan = $request->input('kewarganegaraan');
        $ktp->berlaku_hingga = $request->input('berlaku_hingga');
        $ktp->status = 'menunggu konfirmasi';
        $ktp->save();

        return redirect()->route('user.pengajuan')->with('success', 'KTP berhasil disimpan.');
    }

    public function create()
    {
        $kelurahan = Kelurahan::all(); 
        $kecamatan = Kecamatan::all(); 
        
        return view('user.form-ktp', compact('kelurahan', 'kecamatan'));
    }

    public function pengajuan()
    {
        return view('user.pengajuan');
    }

    public function reject(Request $request)
    {
         
         $request->validate([
            'reason' => 'required|string',
        ]);
        
        $users = User::all(); 
        Notification::send($users, new KtpRejected($request->reason));

        return response()->json (['message' => 'Berkas berhasil ditolak.']);
    
    }
    
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function confirm($id)
    {
        $ktp = Ktp::find($id);
    
        if ($ktp) {
            $ktp->status = 'disetujui'; 
            $ktp->save(); 
            return response()->json(['success' => true, 'message' => 'Berkas telah dikonfirmasi.']);
        }
        return response()->json(['success' => false, 'message' => 'Berkas tidak ditemukan.']);
    }

    public function konfirmasi()
    {
        $ktp = Ktp::where('status', 'disetujui')->get();
        return view('admin.konfirmasi-pengajuan', ['ktp' => $ktp]);
    }
    
}
