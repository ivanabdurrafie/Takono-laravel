<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    public $timestamps = false;
    protected $primaryKey = 'id_siswa';

    public function kelasm()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas', 'id_kelas');
        
    }
}
