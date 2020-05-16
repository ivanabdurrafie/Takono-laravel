<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    public $timestamps = false;
    protected $primaryKey = 'id_pertanyaan';
}
