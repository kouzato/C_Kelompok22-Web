<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    protected $table = 'keluhan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'email', 'isi','foto'
    ];
    use HasFactory;
}
