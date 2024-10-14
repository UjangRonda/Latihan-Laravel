<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['kota'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class); 
    }

    public function kode()
    {
        return $this->hasOne(Kode::class); 
    }
}
