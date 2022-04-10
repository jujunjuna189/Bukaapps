<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index(){
        return view('transaksi.pemasukan.index');
    }
}
