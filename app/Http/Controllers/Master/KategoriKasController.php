<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\KategoriKas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KategoriKasController extends Controller
{
    //
    public function kategori_kas()
    {
        $kategori_kas = KategoriKas::all();
        $data['kategori_kas'] = $kategori_kas;
        $data['no'] = 1;
        return view('master.kategori_kas.kategori_kas', $data);
    }

    public function add()
    {
        return view('master.kategori_kas.add');
    }

    public function add_proses(Request $request)
    {
        $obj['kategori'] = $request->kategori;
        $obj['status'] = $request->status;

        KategoriKas::create($obj);
        return redirect()->route('kategori_kas')->with('success', 'Berhasil tambah kategori kas');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $data['kategori_kas'] = KategoriKas::find($id);
        return view('master.kategori_kas.update', $data);
    }

    public function update_proses(Request $request)
    {
        $id = $request->id;
        $obj['kategori'] = $request->kategori;
        $obj['status'] = $request->status;

        $kategori_kas = KategoriKas::find($id);
        $kategori_kas->update($obj);
        return redirect()->route('kategori_kas')->with('success', 'Berhasil edit kategori kas');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $kategori_kas = KategoriKas::find($id);
        $kategori_kas->delete();

        return redirect()->route('kategori_kas')->with('success', 'Berhasil mengahapus kategori kas');
    }
}
