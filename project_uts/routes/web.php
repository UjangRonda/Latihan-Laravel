<?php

use App\Models\Kode;
use App\Models\Kota;
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

Route::get('/', function () {
    return view('home');
});

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa', [
        'mahasiswa' => $data 
    ]);
});

Route::get('/mahasiswa/{id}', function ($id) {
    $data = Mahasiswa::with(['kota', 'kode'])->find($id);

    if (!$data) {
        abort(404); 
    }

    return view('data', ['data' => $data]);
});

Route::get('/anggota', function () {
    return view('anggota');
});
