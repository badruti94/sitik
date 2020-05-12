<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_c_email extends Model
{
    protected $table = 'p_email';
    protected $primaryKey = 'id_p_email';
    protected $fillable = ['id_user','nama','email','jabatan','keperluan','penanggung_jawab','no_hp','status','tgl'];
}
