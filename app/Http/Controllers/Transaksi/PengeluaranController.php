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

    public function add(){
        return view('transaksi.pengeluaran.add');
    }

    public function add_proses(Request $request){
        $obj['user_id'] = $this->myCode();
        $obj['purchase'] = $request->purchase;
        $obj['description'] = $request->description;
        Pengeluaran::create($obj);

        return redirect()->route('transaksi.pengeluaran')->with('success', 'Berhasil tambah pengeluaran');
    }

    public function update(){
        // content
    }

    public function update_proses(){
        // content
    }

}
