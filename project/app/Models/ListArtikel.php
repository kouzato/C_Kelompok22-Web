<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListArtikel extends Model
{
    protected $table = 'tabel_artikel';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul', 'penulis', 'tanggal', 'keterangan', 'isi','foto'
    ];
    use HasFactory;
}
