<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        $data['user'] = $user;
        return view('user.index', $data);
    }

    public function add(){
        return view('user.add');
    }

    public function add_proses(Request $request){
        $obj['name'] = $request->name;
        $obj['email'] = $request->email;
        $obj['password'] = Hash::make($request->password);

        User::create($obj);

        return redirect()->route('users')->with('success', 'Berhasil tambah pengguna');
    }

    public function update(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.update', $data);
    }

    public function update_proses(Request $request){
        $obj['name'] = $request->name;
        $obj['email'] = $request->email;
        $obj['password'] = Hash::make($request->password);

        User::update($obj);

        return redirect()->route('users')->with('success', 'Berhasil update pengguna');
    }
}
