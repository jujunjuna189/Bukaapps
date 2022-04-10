@extends('layouts.app_templates', ['auth' => false])

@section('content')

<div class="az-signup-wrapper justify-content-center">
    <div class="az-column-signup">
        <div class="az-signup-header">
            <h1 class="mb-1 text-primary"><span class="text-capitalize">B</span>ukaapps</h1>
            <h6 class="mb-4 text-dark">Aplikasi buku uang kas</h6>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div><!-- form-group -->
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan username" value="{{ old('email') }}">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div> <!-- form-group -->
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Masukkan password" name="password" id="password" required autocomplete="password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div><!-- form-group -->
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Konfirmasi password" required autocomplete="new-password">

                </div><!-- form-group -->

                <button class="btn btn-az-primary btn-block" type="submit">Buat Akun</button>
            </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
            <p>Sudah memiliki akun? <a href="{{route('login')}}">Masuk</a></p>
        </div><!-- az-signin-footer -->
    </div><!-- az-column-signup -->
</div><!-- az-signup-wrapper -->

@endsection