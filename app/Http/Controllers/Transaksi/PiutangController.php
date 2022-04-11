<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PiutangController extends Controller
{
    public function index(){
        return view('transaksi.piutang.index');
    }

    public function add(){
        return view('transaksi.piutang.add');
    }

    public function add_proses(){
        // content
    }

    public function update(){
        // content
    }

    public function update_proses(){
        // content
    }

    public function delete(){
        // content
    }
}
