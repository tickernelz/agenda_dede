<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Auth;

class InformasiKegiatan extends Controller
{
    public function index()
    {
        // Get User Data
        $user = Auth::user();

        // Get Data Kegiatan
        if ($user->hasAnyRole('Super Admin|Admin')) {
            $data = Kegiatan::with('bagian')->get();
            $judulblock = 'Informasi Kegiatan (Semua Bidang)';
        } elseif ($user->hasRole($user->roles->first()->name)) {
            $data = Kegiatan::whereHas('bagian', function ($q) use ($user) {
                $q->where('nama', $user->roles->first()->name);
            })->get();
            $judulblock = 'Informasi Kegiatan ' . $user->roles->first()->name . '';
        } else {
            $data = Kegiatan::with('bagian')->get();
            $judulblock = 'Informasi Kegiatan (Semua Bidang)';
        }

        return view('informasi.index', [
            'judulblock' => $judulblock,
            'data' => $data,
        ]);
    }
}
