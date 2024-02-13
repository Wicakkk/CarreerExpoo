<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    public $timestamps = false;
    
    protected $fillable = [
        'perusahaan'
    ];

    public function pelamar(){
        return $this->hasMany(Pelamar::class, 'id', 'id_perusahaan');
    }
}
