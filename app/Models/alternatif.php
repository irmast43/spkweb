<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'alternatif';
    protected $primaryKey = 'idalternatif';
    protected $guarded = [];

}
