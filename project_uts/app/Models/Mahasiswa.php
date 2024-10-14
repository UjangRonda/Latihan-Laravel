<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kota_id', 'kode_id'];
    protected $table = "mahasiswa";

    public function kota()
    {
        return $this->belongsTo(Kota::class); 
    }

    public function kode()
    {
        return $this->belongsTo(Kode::class); 
    }
}
