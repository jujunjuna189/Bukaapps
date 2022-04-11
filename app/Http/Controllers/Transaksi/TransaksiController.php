<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $user_id = $this->myCode();

        $transaksi = Transaksi::where('user_id', $user_id)->get();

        $total_pemasukan = 0;
        $total_pengeluaran = 0;

        foreach($transaksi as $val){
            $total_pemasukan += $val->sell_price;
            $total_pengeluaran += $val->purchase;
        }

        $data['transaksi'] = $transaksi;
        $data['total_pemasukan'] = $total_pemasukan;
        $data['total_pengeluaran'] = $total_pengeluaran;
        return view('transaksi.index', $data);
    }

    public function detail(Request $request)
    {
        $transaksi_id = $request->transaksi_id;
        $transaksi = Transaksi::find($transaksi_id);
        $data['transaksi'] = $transaksi;
        $data['site'] = explode('//', url(''));

        return view('transaksi.detail', $data);
    }

    public function add()
    {
        return view('transaksi.add');
    }

    public function add_proses(Request $request)
    {
        // Add pemasukan
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

    public function update(Request $request)
    {
        $transaksi = Transaksi::find($request->transaksi_id);
        $data['transaksi'] = $transaksi;
        return view('transaksi.update', $data);
    }

    public function update_proses(Request $request)
    {
        $transaksi_id = $request->transaksi_id;

        $obj['sell_price'] = $request->sell_price;
        $obj['purchase'] = $request->purchase;
        $obj['description'] = $request->description;

        $transaksi = Transaksi::find($transaksi_id);
        $transaksi->update($obj);

        return redirect()->route('transaksi.detail', ['transaksi_id' => $transaksi->id])->with('success', 'Berhasil tambah pemasukan');
    }

    public function delete(Request $request)
    {
        $transaksi_id = $request->transaksi_id;
        $transaksi = Transaksi::find($transaksi_id);
        $transaksi->delete();

        return redirect()->route('transaksi')->with('success', 'Berhasil hapus data transaksi');
    }
}
