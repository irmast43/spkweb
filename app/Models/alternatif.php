<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'alternatif';
    protected $fillable = [
        'idalternatif',
        'nama_alternatif',
        'alamat',
        'rt',
        'nik',
        'no_kk',
        'no_hp',
        'create_at',
        'update_at',
    ];
}
