<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route sementara agar tombol +, Edit, dan Hapus tidak 404 sebelum halaman form dibuat
Route::get('/create', function () {
    return 'Halaman Tambah Biodata';
})->name('biodata.create');

Route::get('/edit/{id}', function ($id) {
    return "Halaman Edit Biodata ID: {$id}";
})->name('biodata.edit');

Route::delete('/delete/{id}', function ($id) {
    return redirect()->route('dashboard')->with('success', "Data ID {$id} berhasil dihapus.");
})->name('biodata.destroy');