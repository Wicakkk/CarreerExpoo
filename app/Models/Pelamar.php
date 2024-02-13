<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $table = 'pelamar';

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id');
    }
}
