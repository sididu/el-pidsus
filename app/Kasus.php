<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Obyek;
use App\Subyek;

class Kasus extends Model
{
    protected $table = 'kasus';

    protected $fillable = [
        'judul_kasus',
        'lokasi_kejadian',
        'tanggal_kejadian',
        'nama_lengkap',
        'alamat',
        'kota',
        'propinsi',
        'kontak_telpon',
        'kontak_handphone',
        'kontak_email',
        'kodepos',
        'disposisi',
        'kasus_posisi',
        'kasimpulan',
        'saran',
        'status',
        'asal_surat',
        'no_surat',
        'tanggal_surat_pelapor',
        'tanggal_surat_diterima',
        'pembuat_catatan_surat',
    ];

    public function obyeks()
    {
        return $this->belongsToMany(Obyek::class, 'kasus_obyek', 'kasus_id', 'obyek_id');
    }

    public function subyeks()
    {
        return $this->belongsToMany(Subyek::class, 'kasus_subyek', 'kasus_id', 'subyek_id');
    }
}
