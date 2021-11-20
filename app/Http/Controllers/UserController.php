<?php

namespace App\Http\Controllers;

use App\Models\User;
use Crypt;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // Nilai tetap
        $judulblock = 'Daftar User';

        // Get Data
        $data = User::with('roles')->get();

        return view('user.index', [
            'judulblock' => $judulblock,
            'data' => $data,
        ]);
    }

    public function tambahindex()
    {
        // Nilai tetap
        $judulblock = 'Tambah Data User';

        // Get Data
        $roles = Role::all();

        return view('user.tambah', [
            'judulblock' => $judulblock,
            'roles' => $roles,
        ]);
    }

    public function editindex(Request $request, int $id)
    {
        // Nilai tetap
        $judulblock = 'Edit Data User';

        // Get Data
        $data = User::with('roles')->find($id);
        $roles = Role::all();

        return view('user.edit', [
            'judulblock' => $judulblock,
            'data' => $data,
            'roles' => $roles,
        ]);
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'nama' => 'required|string',
            'nip' => 'required|unique:users',
            'status' => 'required|string',
            'password' => 'required|string',
        ]);

        // Get Request
        $get_status = Crypt::decrypt($request->input('status'));

        // Kirim Data ke Database
        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->nama = $request->input('nama');
        $user->nip = $request->input('nip');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        $user->assignRole($get_status);

        return back()->with('success', 'Data Berhasil Ditambahkan!.');
    }

    public function edit(Request $request, int $id)
    {
        $data = User::where('id', $id)->first();

        $request->validate([
            'username' => 'required|string|unique:users,username,'.$data->id,
            'email' => 'required|email|unique:users,email,'.$data->id,
            'nama' => 'required|string',
            'nip' => 'required|unique:users,nip,'.$data->id,
            'status' => 'required|string',
            'password' => 'nullable|string',
        ]);

        // Get Request
        $get_status = Crypt::decrypt($request->input('status'));

        // Edit Data
        if ($request->filled('password')) {
            $data->password = Hash::make($request->input('password'));
        }
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->nama = $request->input('nama');
        $data->nip = $request->input('nip');
        $data->save();
        $data->assignRole($get_status);

        return back()->with('success', 'Data Berhasil Diubah!.');
    }

    public function hapus(int $id)
    {
        User::find($id)->delete();

        return redirect()->route('index-user');
    }
}
