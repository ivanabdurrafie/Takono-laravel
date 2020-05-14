<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    public $timestamps = false;
    protected $primaryKey = 'id_guru';
}
