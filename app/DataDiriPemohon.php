<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataDiriPemohon extends Model
{
    protected $table = 'data_pemohon';
    protected $fillable = ['nama','ava','nip','jk','unit_kerja','tempat_lahir','tgl_lahir','agama','status','alamat','jabatan','pangkat','jenjang_pend','jurusan','univ','tgl_mulai','tgl_akhir','beasiswa','alasan_perp','jml_wkt_perp'];
}
