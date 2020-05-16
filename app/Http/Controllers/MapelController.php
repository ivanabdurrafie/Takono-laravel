<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
{
    public function index()
    {
        $data = Mapel::all();

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
        $data = Mapel::where('id_mapel', $id)->get();
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
        $mpl = new Mapel();
        $mpl->mata_pelajaran = $request->mata_pelajaran;

        if ($mpl->save()) {
            $res['message'] = 'Data Berhasil Ditambahkan';
            $res['value'] = $mpl;
            return response($res);
        }
    }
    public function update(Request $request, $id)
    {
        $mpel = $request->mata_pelajaran;


        $mpl = Mapel::find($id);
        $mpl->mata_pelajaran = $mpel;

        if ($mpl->save()) {
            $res['message'] = 'Data Berhasil Diubah';
            $res['value'] = $mpl;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function delete($id)
    {
        $mpl = Mapel::where('id_mapel', $id);

        if ($mpl->delete()) {
            $res['message'] = 'Data Berhasil Dihapus';
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
}
