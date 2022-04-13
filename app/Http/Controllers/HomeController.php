<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $page_nav = 1;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = $this->myCode();
        // Get data for chart
        $transaksi = Transaksi::where('user_id', $user_id)->groupBy('date')->orderBy('id', 'desc')->take(7)->get(array(
            'transaksi.*',
            DB::raw('Date(created_at) as date'),
            DB::raw('SUM(transaksi.sell_price) as pemasukan'),
            DB::raw('SUM(transaksi.purchase) as pengeluaran'),
        ));

        $sort = [];
        $day = [];
        $pemasukan = [];
        $pengeluaran = [];

        foreach ($transaksi as $val) {
            $sort[] = $val;
        }

        usort($sort, function ($a, $b) {
            if ($a["id"] == $b["id"])
                return (0);
            return (($a["id"] < $b["id"]) ? -1 : 1);
        });

        // Day
        $day_set = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        foreach ($sort as $val) {
            $day[] = $day_set[date('w', strtotime($val->created_at))] . ' ' . date('d-m-Y', strtotime($val->created_at));
            $pemasukan[] = $val->pemasukan == null || $val->pemasukan == '' ? 0 : $val->pemasukan;
            $pengeluaran[] = $val->pengeluaran == null || $val->pengeluaran == '' ? 0 : $val->pengeluaran;
        }

        if (count($pemasukan) > 0) {
            $max_sell = max($pemasukan);
        } else {
            $max_sell = 0;
        }

        if (count($pengeluaran) > 0) {
            $max_pur = max($pengeluaran);
        } else {
            $max_pur = 0;
        }

        if ($max_pur > $max_sell) {
            $max = $max_pur + 10000;
        } else {
            $max = $max_sell + 10000;
        }

        $data['page_nav'] = $this->page_nav;
        $data['day_set'] = $day_set;
        $data['day'] = $day;
        $data['pemasukan'] = $pemasukan;
        $data['pengeluaran'] = $pengeluaran;
        $data['max'] = $max;

        return view('home', $data);
    }
}
