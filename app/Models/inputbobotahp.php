<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inputbobotahp extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bobotahp';
    protected $primaryKey = 'idbobotahp';
    protected $guarded = [];
}
