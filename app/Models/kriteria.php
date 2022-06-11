<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'kriteria';
    protected $fillable = [
        'nama_kriteria',
        'atribut',
        'nilai_kriteria',
        'create_at',
        'update_at',
    ];
}
