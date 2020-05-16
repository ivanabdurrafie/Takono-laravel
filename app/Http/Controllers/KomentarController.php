<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class KomentarController extends Controller
{
    public function index()
    {
        $data = Komentar::join('user', 'user.id_user', 'komentar.id_user')
            ->join('pertanyaan', 'pertanyaan.id_pertanyaan', 'komentar.id_pertanyaan')
            ->get();
        // $data = Komentar::select()->kelasm->get();
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
        $data = Komentar::join('user', 'user.id_user', 'Komentar.id_user')
            ->join('pertanyaan', 'pertanyaan.id_pertanyaan', 'Komentar.id_pertanyaan')
            ->where('id_komentar', $id)
            ->get();
        // $data = Komentar::find($id)->kelasm->get();
        // $res['message'] = 'Success!';
        // $res['value'] = $data;
        // return response($res);
        // $data = Komentar::where('id_siswa', $id)->kelas->get();
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
        $km = new Komentar();
        $km->komentar = $request->komentar;
        $km->skor = $request->skor;
        $km->id_pertanyaan = $request->id_pertanyaan;
        $km->id_user = $request->id_user;

        if ($km->save()) {
            $res['message'] = 'Data Berhasil Ditambahkan';
            $res['value'] = $km;
            return response($res);
        }
    }
    public function update(Request $request, $id)
    {
        // $Guru = $request->Guru;


        $km = Komentar::find($id);
        $km->komentar = $request->komentar;
        $km->skor = $request->skor;
        $km->id_pertanyaan = $request->id_pertanyaan;
        $km->id_user = $request->id_user;

        if ($km->save()) {
            $res['message'] = 'Data Berhasil Diubah';
            $res['value'] = $km;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function delete($id)
    {
        $km = Komentar::where('id_komentar', $id);

        if ($km->delete()) {
            $res['message'] = 'Data Berhasil Dihapus';
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
}
