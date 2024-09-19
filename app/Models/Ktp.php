<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;
    protected $table = 'ktp';
    protected $fillable = [
    'nik',
    'nama',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'alamat',
    'rt_rw',
    'id_kelurahan',
    'id_kecamatan',
    'agama',
    'status_perkawinan',
    'pekerjaan',
    'kewarganegaraan',
    'berlaku_hingga',
    'status',
    'rejection_reason',
    
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
