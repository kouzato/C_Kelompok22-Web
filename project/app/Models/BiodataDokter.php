<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataDokter extends Model
{
    protected $table = 'biodata_dokter';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_dokter', 'alamat', 'username_dokter', 'password_dokter', 'confirm_password_dokter', 'email_dokter',
    ];
    use HasFactory;
}
