<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $data = Guru::orderBy('id_guru')
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
        $data = Guru::where('id_guru', $id)->get();
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
        $gr = new Guru();
        $gr->nama = $request->nama;
        $gr->nip = $request->nip;
        $gr->email = $request->email;
        $gr->jenkel = $request->jenkel;
        $gr->foto = $request->foto;

        if ($gr->save()) {
            $res['message'] = 'Data Berhasil Ditambahkan';
            $res['value'] = $gr;
            return response($res);
        }
    }
    public function update(Request $request, $id)
    {
        $Guru = $request->Guru;
        $gr = Guru::find($id);
        $gr->nama = $request->nama;
        $gr->nip = $request->nip;
        $gr->email = $request->email;
        $gr->jenkel = $request->jenkel;
        $gr->foto = $request->foto;

        if ($gr->save()) {
            $res['message'] = 'Data Berhasil Diubah';
            $res['value'] = $gr;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function delete($id)
    {
        $gr = Guru::where('nip', $id);

        if ($gr->delete()) {
            $res['message'] = 'Data Berhasil Dihapus';
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
}
