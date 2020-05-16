<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';
    public $timestamps = false;
    protected $primaryKey = 'id_komentar';
}
