<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['username','password','nama','status','unit_jurusan'];
}
