<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $data = Login::join('siswa', 'siswa.id_siswa', 'user.id_siswa')
            ->join('guru', 'guru.id_guru', 'user.id_guru')
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
    public function getSiswa()
    {
        $data = Login::join('siswa', 'siswa.id_siswa', 'user.id_siswa')
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
    public function getGuru()
    {
        $data = Login::join('guru', 'guru.id_guru', 'user.id_guru')
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
    public function getIdSiswa($id)
    {
        $data = Login::join('siswa', 'siswa.id_siswa', 'user.id_siswa')
            ->where('id_user', $id)
            ->get();
        // $data = Login::where('id_Login', $id)->kelas->get();
        if (count($data) > 0) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function getIdGuru($id)
    {
        $data = Login::join('guru', 'guru.id_guru', 'user.id_guru')
            ->where('id_user', $id)
            ->get();
        // $data = Login::where('id_Login', $id)->kelas->get();
        if (count($data) > 0) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function createSiswa(Request $request)
    {
        $lg = new Login();
        $lg->username = $request->username;
        $lg->password =  md5($request->password);
        $lg->level = $request->level;
        $lg->id_siswa = $request->id_siswa;

        if ($lg->save()) {
            $res['message'] = 'Data Berhasil Ditambahkan';
            $res['value'] = $lg;
            return response($res);
        }
    }
    public function createGuru(Request $request)
    {
        $lg = new Login();
        $lg->username = $request->username;
        $lg->password =  md5($request->password);
        $lg->level = $request->level;
        $lg->id_guru = $request->id_guru;

        if ($lg->save()) {
            $res['message'] = 'Data Berhasil Ditambahkan';
            $res['value'] = $lg;
            return response($res);
        }
    }
    public function update(Request $request, $id)
    {
        // $Guru = $request->Guru;


        $lg = Login::find($id);
        $lg->username = $request->username;
        $lg->password =  md5($request->password);
        $lg->level = $request->level;
        $lg->id_siswa = $request->id_siswa;
        $lg->id_guru = $request->id_guru;

        if ($lg->save()) {
            $res['message'] = 'Data Berhasil Diubah';
            $res['value'] = $lg;
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
    public function delete($id)
    {
        $lg = Login::where('id_user', $id);

        if ($lg->delete()) {
            $res['message'] = 'Data Berhasil Dihapus';
            return response($res);
        } else {
            $res['message'] = 'Gagal!';
            return response($res);
        }
    }
}
