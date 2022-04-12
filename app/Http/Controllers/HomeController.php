<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

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
        $transaksi = Transaksi::where('user_id', $user_id)->orderBy('id', 'desc')->take(7)->get();

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

        foreach ($sort as $val) {
            $day[] = date('d', strtotime($val->created_at));
        }

        echo json_encode($day);
        die;

        $data['page_nav'] = $this->page_nav;
        return view('home', $data);
    }
}
