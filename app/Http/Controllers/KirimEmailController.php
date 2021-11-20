<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function kirim(string $id)
    {
        $kegiatan = Kegiatan::with('bagian')->where('id', $id)->first();
        foreach (User::role($kegiatan->bagian->nama)->get() as $user)
        {
            $email = $user->email;
            $data = [
                'nama' => $user->nama,
                'title' => 'Perhatian!',
                'tanggaldari' => $kegiatan->tanggaldari,
                'tanggalsampai' => $kegiatan->tanggalsampai,
                'kegiatan' => $kegiatan->kegiatan,
                'tempat' => $kegiatan->tempat,
            ];
            Mail::to($email)->send(new SendMail($data));
        }
        return back()->with('success', 'Berhasil mengirim email notifikasi!');
    }
}
