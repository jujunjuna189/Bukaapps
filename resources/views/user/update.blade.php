@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Update Pengguna</h6>
            <p class="az-content-text tx-13 mg-b-0">Isi Form dengan Benar!</p>
        </div>
    </div><!-- az-content-header -->
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('users.update.proses', ['id' => $user->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap Anda" name="name" id="name" value="{{ $user->name }}">
                    
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Username Anda" name="email" id="email" value="{{ $user->email }}">
                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Username Anda" name="password" id="password" value="{{ old('password') }}">
                    <small>Input jika ingin mengubah password</small>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-froup text-right">
                    <button type="submit" class="btn btn-primary"><i class="typcn typcn-folder-add"></i> Simpan</button>
                </div>
                
            </form>
        </div>
    </div>
</div><!-- media-body -->
@endsection