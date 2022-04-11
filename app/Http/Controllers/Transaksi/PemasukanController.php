<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index()
    {
        $user_id = $this->myCode();
        $data['pemasukan'] = Pemasukan::where('user_id', $user_id)->get();
        return view('transaksi.pemasukan.index', $data);
    }

    public function add()
    {
        return view('transaksi.pemasukan.add');
    }

    public function add_proses(Request $request)
    {
        // Add pemasukan
        $user_id = $this->myCode();

        $obj['user_id'] = $user_id;
        $obj['sell_price'] = $request->sell_price;
        $obj['description'] = $request->description;

        $obj_['user_id'] = $user_id;
        $obj_['purchase'] = $request->purchase;
        $obj_['description'] = $request->description;

        // Add Pemasukan
        Pemasukan::create($obj);
        // Add Pengeluaran
        if ($request->purchase != '') {
            Pengeluaran::create($obj_);
        }

        return redirect()->route('transaksi.pemasukan')->with('success', 'Berhasil tambah pemasukan');
    }

    public function update(Request $request)
    {

        return view('transaksi.pemasukan.update');
    }

    public function update_proses()
    {
    }

    public function delete()
    {
    }
}
