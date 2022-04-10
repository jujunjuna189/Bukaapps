<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index(){
        $data['pengeluaran'] = Pengeluaran::all();
        return view('transaksi.pengeluaran.index', $data);
    }


}
