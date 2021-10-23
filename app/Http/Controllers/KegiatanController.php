<?php

namespace App\Http\Controllers;

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
        $kegiatan = $this->getKegiatan();

        return view('kegiatan.index', [
            'judulblock' => $judulblock,
            'kegiatan' => $kegiatan,
        ]);
    }

    /**
     * @return object
     */
    public function getKegiatan(): object
    {
        $kegiatan = [
            ['id' => '1', 'nama' => 'Sekretariat'],
            ['id' => '2', 'nama' => 'Bid. Kesmas'],
            ['id' => '3', 'nama' => 'Bid. Yankes'],
            ['id' => '4', 'nama' => 'Bid. SDK'],
            ['id' => '5', 'nama' => 'Bid. P2'],
        ];
        $kegiatan = (object)$kegiatan;
        return $kegiatan;
    }

    public function cari(Request $request)
    {
        // List Kegiatan
        $kegiatan = $this->getKegiatan();

        // Get Request Data
        $getkegiatan = Crypt::decrypt($request->kegiatan);

        // Get Data dari database
        $datakegiatan = Kegiatan::where('bagian', $getkegiatan)->get();
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

        $this->request_tambah($request, $KegiatanModel);
        if ($request->hasFile('berkas')) {
            $fileName = time() . '_' . $request->berkas->getClientOriginalName();
            $request->berkas->move(public_path('berkas'), $fileName);
            $KegiatanModel->berkas = $fileName;
        }
        $KegiatanModel->save();

        return back()
            ->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * @param Request $request
     * @param Kegiatan $KegiatanModel
     */
    public function request_tambah(Request $request, Kegiatan $KegiatanModel): void
    {
        $KegiatanModel->bagian = $request->bagian;
        $KegiatanModel->tanggaldari = $request->tglmulai;
        $KegiatanModel->tanggalsampai = $request->tglakhir;
        $KegiatanModel->kegiatan = $request->kegiatan;
        $KegiatanModel->keterangan = $request->keterangan;
        $KegiatanModel->tempat = $request->tempat;
        $KegiatanModel->provinsi = $request->provinsi;
        $KegiatanModel->kota = $request->kota;
        $KegiatanModel->kecamatan = $request->kecamatan;
    }

    public function hapus(int $id)
    {
        Kegiatan::find($id)->delete();

        return back()
            ->with('success', 'Data Berhasil Dihapus!');
    }
}
