<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subyek extends Model
{
    protected $table = 'subyek';
    protected $fillable = [
        'judul_surat',
        'nama_terlapor',
        'tempat_lahir',
        'kebangsaan',
        'kewarganegaraan',
        'tempat_tinggal',
        'agama',
        'jabatan_resmi',
        'jabatan_lain',
        'lembaga',
        'pendidikan',
        'kategori_subyek',
        'keterangan',
        'status',
    ];

}
