<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory;
    protected $table = 'stok_barang';
    protected $fillable = ['user_id', 'product_code', 'product_name', 'selling_price', 'purchase_price', 'quantity'];
}
