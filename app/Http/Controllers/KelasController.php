<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::all();

        if (count($data) > 0) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Kosong!';
            $res['value'] = $data;
            return response($res);
        }
    }
    public function getId($id)
    {
        $data = Kelas::where('id_kelas', $id)->get();
        if (count($data) > 0) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            $res['value'] = $data;
            return response($res);
        }
    }
    public function create(Request $request)
    {
        $kls = new Kelas();
        $kls->kelas = $request->kelas;

        if ($kls->save()) {
            $res['message'] = 'Data Berhasil Ditambahkan';
            $res['value'] = $kls;
            return response($res);
        }
    }
    public function update(Request $request, $id_kelas)
    {
        $kelas = $request->kelas;


        $kls = Kelas::find($id_kelas);
        $kls->kelas = $kelas;

        if ($kls->save()) {
            $res['message'] = 'Data Berhasil Diubah';
            $res['value'] = $kls;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function delete($id)
    {
        $kls = Kelas::where('id_kelas', $id);

        if ($kls->delete()) {
            $res['message'] = 'Data Berhasil Dihapus';
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
}
