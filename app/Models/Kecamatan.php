<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = [
        'nama_deskripsi'
    ];

    public function kelurahan()
    {
        return $this->hasMany(kelurahan::class, 'id_kecamatan');
    }
}
