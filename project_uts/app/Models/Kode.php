<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'kota_id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class); 
    }
}
