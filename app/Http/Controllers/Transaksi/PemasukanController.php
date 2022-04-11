<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index()
    {
        $user_id = $this->myCode();
        $data['pemasukan'] = Pemasukan::where('user_id', $user_id)->get();
        return view('transaksi.pemasukan.index', $data);
    }
}
