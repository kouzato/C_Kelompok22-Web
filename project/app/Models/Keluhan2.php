<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Keluhan2 extends Model
{
    protected $table = 'keluhan2';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'email', 'isi'
    ];
    use HasFactory;
    use HasApiTokens;
}
