<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';
    protected $fillable = [
        'nama_kelurahan',
        'id_kecamatan',
    ];

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class, 'id_kecamatan', 'id');
    }
}
