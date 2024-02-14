<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama',
        'email',
        'jenis_pekerjaan',
        'id_perusahaan',
        'notelp',
        'jenis_kelamin',
        'pendidikan_terakhir',
        'portofolio'
    ];
    protected $table = 'pelamar';
    public $timestamps = false;

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id');
    }
}
