<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\PaymentHistory;
use App\Models\UtangPiutang;
use Illuminate\Http\Request;

class UtangPiutangController extends Controller
{
    public function index()
    {
        $user_id = $this->myCode();

        $utang_piutang = UtangPiutang::where('user_id', $user_id)->orderBy('id', 'desc')->get();

        $utang = 0;
        $piutang = 0;

        foreach ($utang_piutang as $val) {
            if ($val->type == 'utang') {
                $utang += $val->nominal;
            }

            if ($val->type == 'piutang') {
                $piutang += $val->nominal;
            }
        }

        $data['utang_piutang'] = $utang_piutang;
        $data['utang'] = $utang;
        $data['piutang'] = $piutang;
        return view('utang_piutang.index', $data);
    }

    public function detail(Request $request)
    {
        $utang_piutang_id = $request->utang_piutang_id;
        $utang_piutang = UtangPiutang::find($utang_piutang_id);

        $data['utang_piutang'] = $utang_piutang;
        $data['site'] = explode('//', url(''));
        $data['back'] = route('utang_piutang');
        $data['payment_history'] = PaymentHistory::where('paid_off_id', $utang_piutang_id)->orderBy('id', 'desc')->get();

        return view('utang_piutang.detail', $data);
    }

    public function add(Request $request)
    {
        $page = $request->page;

        $data['page'] = $page;
        return view('utang_piutang.add', $data);
    }

    public function add_proses(Request $request)
    {
        $user_id = $this->myCode();

        $obj['user_id'] = $user_id;
        $obj['person'] = $request->person;
        $obj['nominal'] = $request->nominal;
        $obj['type'] = $request->type;
        $obj['description'] = $request->description;

        // Add Pemasukan

        if (in_array($request->type, ['utang', 'piutang'])) {
            $utang_piutang = UtangPiutang::create($obj);

            return redirect()->route('utang_piutang.detail', ['utang_piutang_id' => $utang_piutang->id])->with('success', 'Berhasil tambah pemasukan');
        } else {
            return redirect()->route('utang_piutang.add')->with('failed', 'Url tipe bukan utang atau piutang');
        }
    }

    public function update()
    {
        // content
    }

    public function update_proses()
    {
        // content
    }

    public function paid_off(Request $request)
    {
        $utang_piutang_id = $request->utang_piutang_id;
        $utang_piutang = UtangPiutang::find($utang_piutang_id);

        $obj['status'] = 'Lunas';
        $obj['nominal'] = 0;

        // Created history paid off or paid payment
        $obj_['paid_off_id'] = $utang_piutang->id;
        $obj_['nominal'] = $utang_piutang->nominal;
        $obj_['description'] = 'Ditandai Lunas';
        PaymentHistory::create($obj_);

        $utang_piutang->update($obj);

        return redirect()->route('utang_piutang.detail', ['utang_piutang_id' => $utang_piutang_id])->with('success', 'Ditandai Lunas');
    }

    public function payment(Request $request)
    {
        return view('utang_piutang.payment');
    }

    public function payment_proses()
    {
        echo json_encode('Ok');
        die;
    }

    public function delete(Request $request)
    {
        // content
        $utang_piutang_id = $request->utang_piutang_id;
        $utang_piutang = UtangPiutang::find($utang_piutang_id);
        $utang_piutang->delete();

        return redirect()->route('utang_piutang')->with('success', 'Berhasil hapus data');
    }
}
