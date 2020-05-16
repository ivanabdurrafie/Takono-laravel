<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'user';
    public $timestamps = false;
    protected $primaryKey = 'id_user';

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'id_siswa', 'id_siswa');
    }
    public function guru()
    {
        return $this->belongsTo('App\guru', 'id_guru', 'id_guru');
    }
}
