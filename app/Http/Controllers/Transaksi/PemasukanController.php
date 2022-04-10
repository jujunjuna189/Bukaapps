<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index()
    {

        $data['pemasukan'] = Pemasukan::all();
        return view('transaksi.pemasukan.index', $data);
    }
}
