<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\UtangPiutang;
use Illuminate\Http\Request;

class UtangPiutangController extends Controller
{
    public function index(){$user_id = $this->myCode();

        $utang_piutang = UtangPiutang::where('user_id', $user_id)->get();

        $nominal = 0;

        foreach($utang_piutang as $val){
            $nominal += $val->nominal;
        }

        $data['utang_piutang'] = $utang_piutang;
        $data['nominal'] = $nominal;
        return view('utang_piutang.index', $data);
    }

    public function add(){
        return view('utang_piutang.add');
    }

    public function add_proses(Request $request){
        $user_id = $this->myCode();

        $obj['user_id'] = $user_id;
        $obj['title'] = 'Pemasukan';
        $obj['sell_price'] = $request->sell_price;
        $obj['purchase'] = $request->purchase;
        $obj['description'] = $request->description;

        // Add Pemasukan
        $transaksi = Transaksi::create($obj);

        return redirect()->route('transaksi.detail', ['transaksi_id' => $transaksi->id])->with('success', 'Berhasil tambah pemasukan');
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
