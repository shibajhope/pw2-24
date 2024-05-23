<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "pasiens";  //nama file yang digunakan

    protected $fillable = [
        'kode',
        'nama',
        'tmpt_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'amalat',
    ];
}
