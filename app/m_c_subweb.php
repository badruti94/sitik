<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_c_subweb extends Model
{
    protected $table = 'p_subweb';
    protected $primaryKey = 'id_p_subweb';
    protected $fillable = ['id_user','nama_pengaju','admin','jabatan','keperluan','unit_jurusan','nama_domain','surat_pengantar','status','tgl'];
}
