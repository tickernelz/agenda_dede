<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Kegiatan;
use Crypt;
use DB;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        // Nilai tetap
        $judulblock = 'Pencarian Kegiatan';

        // List Kegiatan
        $kegiatan = Bagian::get();

        return view('kegiatan.index', [
            'judulblock' => $judulblock,
            'kegiatan' => $kegiatan,
        ]);
    }

    public function getdataKegiatan(Request $request)
    {
        $id = $request->id;
        $data = Kegiatan::whereId($id)->get();

        return Response()->json($data);
    }

    public function cari(Request $request)
    {
        // List Kegiatan
        $kegiatan = Bagian::get();

        // Get Request Data
        $getkegiatan = Crypt::decrypt($request->kegiatan);

        // Get Data dari database
        $datakegiatan = Kegiatan::where('bagian_id', $getkegiatan)->get();
        $kota = DB::table('tbl_kabupaten')->get();
        $kecamatan = DB::table('tbl_kecamatan')->get();
        $provinsi = DB::table('tbl_provinsi')->get();

        // Nilai tetap
        $judulblockpertama = 'Pencarian Kegiatan';
        $judulblockkedua = 'Kelola Kegiatan';

        return view('kegiatan.cari', [
            'judulblockpertama' => $judulblockpertama,
            'judulblockkedua' => $judulblockkedua,
            'kegiatan' => $kegiatan,
            'datakegiatan' => $datakegiatan,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
            'provinsi' => $provinsi,
        ]);
    }

    public function tambah(Request $request)
    {
        $KegiatanModel = new Kegiatan;

        $request->validate([
            'tglmulai' => 'required',
            'tglakhir' => 'required',
            'kegiatan' => 'required',
            'keterangan' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'berkas' => 'file|mimes:pdf',
        ]);

        // Cek Tanggal
        if ($request->tglmulai > $request->tglakhir) {
            return back()->with('error', 'Tanggal Mulai Tidak Boleh Lebih Dari Tanggal Akhir!');
        }

        $KegiatanModel->bagian_id = $request->bagian;
        $KegiatanModel->tanggaldari = $request->tglmulai;
        $KegiatanModel->tanggalsampai = $request->tglakhir;
        $KegiatanModel->kegiatan = $request->kegiatan;
        $KegiatanModel->keterangan = $request->keterangan;
        $KegiatanModel->tempat = $request->tempat;
        $KegiatanModel->provinsi = $request->provinsi;
        $KegiatanModel->kota = $request->kota;
        $KegiatanModel->kecamatan = $request->kecamatan;
        if ($request->hasFile('berkas')) {
            $fileName = time() . '_' . $request->berkas->getClientOriginalName();
            $request->berkas->move(public_path('berkas'), $fileName);
            $KegiatanModel->berkas = $fileName;
        }
        $KegiatanModel->save();

        return back()
            ->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'tglmulaiedit' => 'required',
            'tglakhiredit' => 'required',
            'kegiatanedit' => 'required',
            'keteranganedit' => 'required',
            'provinsiedit' => 'required',
            'kotaedit' => 'required',
            'kecamatanedit' => 'required',
            'berkasedit' => 'file|mimes:pdf',
        ]);

        $data = Kegiatan::where('id', $request->idedit)->first();

        $data->bagian_id = $request->bagianedit;
        $data->tanggaldari = $request->tglmulaiedit;
        $data->tanggalsampai = $request->tglakhiredit;
        $data->kegiatan = $request->kegiatanedit;
        $data->keterangan = $request->keteranganedit;
        $data->tempat = $request->tempatedit;
        $data->provinsi = $request->provinsiedit;
        $data->kota = $request->kotaedit;
        $data->kecamatan = $request->kecamatanedit;

        // Cek apakah ada berkas?
        if ($request->hasFile('berkasedit')) {
            // Hapus Berkas Lama (Jika Ada)
            $namaberkas = $data->berkas;
            if (is_file(public_path('berkas') . '/' . $namaberkas)) {
                unlink(public_path('berkas') . '/' . $namaberkas);
            }
            // Upload File Baru
            $fileName = time() . '_' . $request->berkasedit->getClientOriginalName();
            $request->berkasedit->move(public_path('berkas'), $fileName);
            $data->berkas = $fileName;
        }
        $data->save();

        return back()
            ->with('success', 'Data Berhasil Diperbarui!');
    }

    public function hapus(int $id)
    {
        $kegiatan = Kegiatan::find($id);
        $namaberkas = $kegiatan->berkas;

        // Hapus Berkas Lama (Jika Ada)
        if (is_file(public_path('berkas') . '/' . $namaberkas)) {
            unlink(public_path('berkas') . '/' . $namaberkas);
        }
        $kegiatan->delete();

        return back()
            ->with('success', 'Data Berhasil Dihapus!');
    }

    public function hapus_berkas(int $id)
    {
        $kegiatan = Kegiatan::find($id);
        $namaberkas = $kegiatan->berkas;

        // Hapus Berkas Lama ()
        unlink(public_path('berkas') . '/' . $namaberkas);
        $kegiatan->berkas = null;
        $kegiatan->save();

        return back()
            ->with('success', 'Berkas Berhasil Dihapus!');
    }
}
