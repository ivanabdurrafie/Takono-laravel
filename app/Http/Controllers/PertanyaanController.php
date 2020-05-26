<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = Pertanyaan::join('mapel', 'mapel.id_mapel', 'pertanyaan.id_mapel')
            ->get();
        // $data = Pertanyaan::select()->kelasm->get();
        // $res['message'] = 'Success!';
        // $res['value'] = $data;
        // return response($res);
        if (count($data) > 0) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Kosong!';
            return response($res);
        }
    }
    public function getId($id)
    {
        $data = Pertanyaan::join('mapel', 'mapel.id_mapel', 'pertanyaan.id_mapel')
            ->where('id_pertanyaan', $id)
            ->get();
        // $data = Pertanyaan::find($id)->kelasm->get();
        // $res['message'] = 'Success!';
        // $res['value'] = $data;
        // return response($res);
        // $data = Pertanyaan::where('id_siswa', $id)->kelas->get();
        if (count($data) > 0) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function create(Request $request)
    {
        $pt = new Pertanyaan();
        $pt->pertanyaan = $request->pertanyaan;
        $pt->id_mapel = $request->id_mapel;
        $pt->foto = $request->foto;
        $pt->oleh = $request->oleh;
        $pt->id_user = $request->id_user;

        if ($pt->save()) {
            $res['message'] = 'Data Berhasil Ditambahkan';
            $res['value'] = $pt;
            return response($res);
        }
    }
    public function update(Request $request, $id)
    {
        // $Guru = $request->Guru;


        $pt = Pertanyaan::find($id);
        $pt->pertanyaan = $request->pertanyaan;
        $pt->id_mapel = $request->id_mapel;
        $pt->foto = $request->foto;
        $pt->oleh = $request->oleh;
        $pt->id_user = $request->id_user;

        if ($pt->save()) {
            $res['message'] = 'Data Berhasil Diubah';
            $res['value'] = $pt;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function delete($id)
    {
        $pt = Pertanyaan::where('id_pertanyaan', $id);

        if ($pt->delete()) {
            $res['message'] = 'Data Berhasil Dihapus';
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
}
