<?php

namespace App\Http\Controllers;

use App\Models\User;
use Crypt;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        // Nilai tetap
        $judulblock = 'Daftar User';

        // Get Data
        $data = User::get();

        return view('user.index', [
            'judulblock' => $judulblock,
            'data' => $data,
        ]);
    }

    public function tambahindex()
    {
        // Nilai tetap
        $judulblock = 'Tambah Data User';

        return view('user.tambah', [
            'judulblock' => $judulblock,
        ]);
    }

    public function editindex(Request $request, int $id)
    {
        // Nilai tetap
        $judulblock = 'Edit Data User';

        // Get Data
        $data = User::find($id);

        return view('user.edit', [
            'judulblock' => $judulblock,
            'data' => $data,
        ]);
    }

    public function tambah(Request $request)
    {
        $rules = [
            'username' => 'required|string|unique:users',
            'nama' => 'required|string',
            'nip' => 'required|unique:users',
            'status' => 'required|string',
            'password' => 'required|string',
        ];

        $messages = [
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username harus beda dari yang lain',
            'username.string' => 'Username tidak valid',
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama tidak valid',
            'nip.required' => 'NIP wajib diisi',
            'nip.unique' => 'NIP harus beda dari yang lain',
            'status.required' => 'Status wajib diisi',
            'status.string' => 'Status harus berupa string',
            'password.required' => 'Password wajib diisi',
            'password.string' => 'Password harus berupa string',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        // Get Request
        $get_username = $request->input('username');
        $get_nama = $request->input('nama');
        $get_nip =$request->input('nip');
        $get_status = Crypt::decrypt($request->input('status'));
        $get_password = bcrypt($request->input('password'));

        // Kirim Data ke Database
        $user = new User;
        $user->username = $get_username;
        $user->nama = $get_nama;
        $user->nip = $get_nip;
        $user->status =  $get_status;
        $user->password = $get_password;
        $user->save();

        // Menambah Peran User
        if ($get_status === 'super_admin')
        {
            $user->assignRole('super_admin');
        } elseif ($get_status === 'admin')
        {
            $user->assignRole('admin');
        } elseif ($get_status === 'user')
        {
            $user->assignRole('user');
        }

        return back()->with('success', 'Data Berhasil Ditambahkan!.');
    }

    public function edit(Request $request, int $id)
    {
        $nipori = User::find($id)->first()->nip;
        $nipedit = $request->input('nip');
        $usernameori = User::find($id)->first()->username;
        $usernameedit = $request->input('username');
        $passori = User::find($id)->first()->password;
        $passedit = $request->input('password');

        $rules1 = [
            'username' => 'required|string',
            'nama' => 'required|string',
            'nip' => 'required',
            'status' => 'required|string',
            'password' => 'required|string',
        ];

        $rules2 = [
            'username' => 'required|string|unique:users',
            'nama' => 'required|string',
            'nip' => 'required|unique:users',
            'status' => 'required|string',
            'password' => 'required|string',
        ];

        $rules3 = [
            'username' => 'required|string',
            'nama' => 'required|string',
            'nip' => 'required|unique:users',
            'status' => 'required|string',
            'password' => 'required|string',
        ];

        $rules4 = [
            'username' => 'required|string|unique:users',
            'nama' => 'required|string',
            'nip' => 'required',
            'status' => 'required|string',
            'password' => 'required|string',
        ];

        $messages = [
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username harus beda dari yang lain',
            'username.string' => 'Username tidak valid',
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama tidak valid',
            'nip.required' => 'NIP wajib diisi',
            'nip.unique' => 'NIP harus beda dari yang lain',
            'status.required' => 'Status wajib diisi',
            'status.string' => 'Status harus berupa string',
            'password.required' => 'Password wajib diisi',
            'password.string' => 'Password harus berupa string',
        ];

        if ($nipori === $nipedit && $usernameori === $usernameedit) {
            return $this->extracted($request, $rules1, $messages, $id, $passori, $passedit);
        }

        if ($nipori === $nipedit) {
            return $this->extracted($request, $rules4, $messages, $id, $passori, $passedit);
        }

        if ($usernameori === $usernameedit) {
            return $this->extracted($request, $rules3, $messages, $id, $passori, $passedit);
        }
        return $this->extracted($request, $rules2, $messages, $id, $passori, $passedit);
    }

    public function extracted(Request $request, array $rules1, array $messages, int $id, $passori, $passedit): \Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), $rules1, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        // Get Request
        $get_username = $request->input('username');
        $get_nama = $request->input('nama');
        $get_nip =$request->input('nip');
        $get_status = Crypt::decrypt($request->input('status'));
        $get_password = bcrypt($request->input('password'));

        // Edit Data
        $data = User::where('id', $id)->first();
        $data->username = $get_username;
        $data->nama = $get_nama;
        $data->nip = $get_nip;
        $data->status =  $get_status;
        if ($passori !== $passedit) {
            $data->password = $get_password;
        }
        $data->save();

        return back()->with('success', 'Data Berhasil Diubah!.');
    }

    public function hapus(int $id)
    {
        User::find($id)->delete();

        return redirect()->route('index-user');
    }
}
