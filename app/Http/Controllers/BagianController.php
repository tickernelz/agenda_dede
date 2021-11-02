<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class BagianController extends Controller
{
    public function index()
    {
        // Nilai tetap
        $judulblock = 'Daftar Bagian';

        // Get Data
        $data = Bagian::get();

        return view('bagian.index', [
            'judulblock' => $judulblock,
            'data' => $data,
        ]);
    }

    public function tambahindex()
    {
        // Nilai tetap
        $judulblock = 'Tambah Data Bagian';

        return view('bagian.tambah', [
            'judulblock' => $judulblock,
        ]);
    }

    public function editindex(Request $request, int $id)
    {
        // Nilai tetap
        $judulblock = 'Edit Data Bagian';

        // Get Data
        $data = Bagian::find($id);

        return view('bagian.edit', [
            'judulblock' => $judulblock,
            'data' => $data,
        ]);
    }

    public function tambah(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required',
        ]);

        // Get Request
        $get_nama = $request->input('nama');

        // Kirim Data ke Database
        $user = new Bagian;
        $user->nama = $get_nama;
        $user->save();

        $role = Role::create([
            'name' => $get_nama,
            'guard_name' => 'web',
        ]);
        $role->givePermissionTo('melihat agenda');

        return back()->with('success', 'Data Berhasil Ditambahkan!.');
    }

    public function edit(Request $request, int $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = Bagian::find($id);
        $role = Role::findByName($data->nama);
        $role->name = $request->nama;
        $data->nama = $request->nama;
        $data->save();
        $role->save();

        return back()
            ->with('success', 'Data Berhasil Diperbarui!');
    }

    public function hapus(int $id)
    {
        $bagian = Bagian::find($id);
        $role = Role::findByName($bagian->nama);
        $bagian->delete();
        $role->delete();

        return redirect()->route('index-bagian');
    }
}
