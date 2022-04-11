<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $role_kode = $request->role_kode != null ? [$request->role_kode] : [1, 2];
        $user = User::whereIn('role_kode', $role_kode)->get();
        $data['user'] = $user;
        return view('user.index', $data);
    }

    public function add()
    {
        return view('user.add');
    }

    public function add_proses(Request $request)
    {
        $obj['name'] = $request->name;
        $obj['email'] = $request->email;
        $obj['password'] = Hash::make($request->password);
        $obj['role_kode'] = 2;

        User::create($obj);

        return redirect()->route('users')->with('success', 'Berhasil tambah pengguna');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.update', $data);
    }

    public function update_proses(Request $request)
    {
        $id = $request->id;
        $obj['name'] = $request->name;
        $obj['email'] = $request->email;
        $obj['password'] = Hash::make($request->password);


        $user = User::find($id);
        $user->update($obj);

        return redirect()->route('users')->with('success', 'Berhasil update pengguna');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'Berhasil hapus pengguna');
    }
}
