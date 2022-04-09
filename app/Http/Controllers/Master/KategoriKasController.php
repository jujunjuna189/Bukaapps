<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriKasController extends Controller
{
    //
    public function kategori_kas()
    {
        return view('master.kategori_kas');
    }
}
