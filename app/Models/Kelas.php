<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Kelas extends Model
{
    protected $table = 'kelas'; // ini sebenarnya default sudah benar

    protected $fillable = ['nama_kelas'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id');
    }

    public function guru()
    {
        return $this->hasOne(Guru::class, 'mengajar_kelas_id');
    }
}

