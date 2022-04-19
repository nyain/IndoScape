<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Penginapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'namecity',
        'tempatwisata',
        'image',
        'penginapan',
        'harga',
        'deskripsi'
    ];

    protected $table='penginapan';
}
