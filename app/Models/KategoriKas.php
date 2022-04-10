<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKas extends Model
{
    use HasFactory;
    protected $table = 'kategori_kas';
    protected $fillable = ['kategori', 'status'];
}
