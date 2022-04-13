<?php

namespace App\Http\Controllers\Stokbarang;

use App\Http\Controllers\Controller;
use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{

    private $page_nav = 5;
    //
    public function index()
    {
        $user_id = $this->myCode();

        $stok_barang = StokBarang::where('user_id', $user_id)->orderBy('id', 'desc')->get();

        $data['stok_barang'] = $stok_barang;
        $data['page_nav'] = $this->page_nav;

        return view('stok_barang.index', $data);
    }

    public function add()
    {
        return view('stok_barang.add');
    }

    public function add_proses(Request $request)
    {
        $user_id = $this->myCode();

        $obj['user_id'] = $user_id;
        $obj['product_code'] = 'Pro-' . time();
        $obj['product_name'] = $request->product_name;
        $obj['selling_price'] = $request->selling_price;
        $obj['purchase_price'] = $request->purchase_price;
        $obj['quantity'] = $request->quantity;

        // Add Pemasukan
        StokBarang::create($obj);

        return redirect()->route('stok_barang')->with("Berhasil tambah barang");
    }

    public function detail(Request $request)
    {
        $stok_barang_id = $request->stok_barang_id;

        $stok_barang = StokBarang::find($stok_barang_id);

        $data['stok_barang'] = $stok_barang;
        $data['site'] = explode('//', url(''));
        $data['back'] = route('stok_barang');

        return view('stok_barang.detail', $data);
    }

    public function update(Request $request)
    {
        $stok_barang = StokBarang::find($request->stok_barang_id);
        $data['stok_barang'] = $stok_barang;
        return view('stok_barang.update', $data);
    }

    public function update_proses(Request $request)
    {
        $stok_barang_id = $request->stok_barang_id;

        $obj['product_name'] = $request->product_name;
        $obj['selling_price'] = $request->selling_price;
        $obj['purchase_price'] = $request->purchase_price;
        $obj['quantity'] = $request->quantity;

        $stok_barang = StokBarang::find($stok_barang_id);
        $stok_barang->update($obj);

        return redirect()->route('stok_barang.detail', ['stok_barang_id' => $stok_barang->id])->with('success', 'Berhasil tambah stok barang');
    }

    public function delete(Request $request)
    {
        $stok_barang_id = $request->stok_barang_id;
        $stok_barang = StokBarang::find($stok_barang_id);
        $stok_barang->delete();

        return redirect()->route('stok_barang')->with('success', 'Berhasil hapus data stok_barang');
    }
}
