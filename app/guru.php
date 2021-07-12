<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 't_pegawai';
    protected $filllable = ['id','nip','nama_peg','jabatan_id','mengajar','Email','no_tlp','alamat','tgl_masuk','tmp_lahir','agama','pendidikan','password','foto']; 
}
