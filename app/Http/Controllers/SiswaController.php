<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::join('kelas', 'kelas.id_kelas', 'siswa.id_kelas')
            ->orderBy('id_siswa')
            ->get();
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
        $data = Siswa::join('kelas', 'kelas.id_kelas', 'siswa.id_kelas')
            ->where('id_siswa', $id)
            ->get();
        if (count($data) > 0) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }

    public function getNis($id)
    {
        $data = Siswa::join('kelas', 'kelas.id_kelas', 'siswa.id_kelas')
            ->where('nis', $id)
            ->get();
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
        $sw = new Siswa();
        $sw->nama = $request->nama;
        $sw->nis = $request->nis;
        $sw->email = $request->email;
        $sw->jenkel = $request->jenkel;
        $sw->foto = $request->foto;
        $sw->id_kelas = $request->id_kelas;

        if (Siswa::where('nis', $request->nis)->first()) {
            $res['message'] = 'Data Gagal ditambahkan';
        } else {
            if ($sw->save()) {
                $res['message'] = 'Data Berhasil Ditambahkan';
                $res['value'] = $sw;
                return response($res);
            }
        }
    }
    public function update(Request $request, $id)
    {
        // $Guru = $request->Guru;
        $sw = Siswa::find($id);
        $sw->nama = $request->nama;
        $sw->nis = $request->nis;
        $sw->email = $request->email;
        $sw->jenkel = $request->jenkel;
        $sw->foto = $request->foto;
        $sw->id_kelas = $request->id_kelas;

        if ($sw->save()) {
            $res['message'] = 'Data Berhasil Diubah';
            $res['value'] = $sw;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function delete($id)
    {
        $sw = Siswa::where('nis', $id);

        if ($sw->delete()) {
            $res['message'] = 'Data Berhasil Dihapus';
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
}
