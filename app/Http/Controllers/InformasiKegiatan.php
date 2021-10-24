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
        if ($user->hasRole('sekretariat')) {
            $data = Kegiatan::where('bagian', '1')->get();
            $judulblock = 'Informasi Kegiatan Sekretariat';
        } elseif ($user->hasRole('kesmas')) {
            $data = Kegiatan::where('bagian', '2')->get();
            $judulblock = 'Informasi Kegiatan Bid. Kesmas';
        } elseif ($user->hasRole('yankes')) {
            $data = Kegiatan::where('bagian', '3')->get();
            $judulblock = 'Informasi Kegiatan Bid. Yankes';
        } elseif ($user->hasRole('sdk')) {
            $data = Kegiatan::where('bagian', '4')->get();
            $judulblock = 'Informasi Kegiatan Bid. SDK';
        } elseif ($user->hasRole('p2')) {
            $data = Kegiatan::where('bagian', '5')->get();
            $judulblock = 'Informasi Kegiatan Bid. P2';
        } else {
            $data = Kegiatan::get();
            $judulblock = 'Informasi Kegiatan (Semua Bidang)';
        }

        return view('informasi.index', [
            'judulblock' => $judulblock,
            'data' => $data,
        ]);
    }
}
