@extends('layouts.app_templates', ['auth' => false])

@section('content')

<div class="az-signin-wrapper">
      <div class="az-card-signin">
        <div class="az-signin-header">
            <h1 class="mb-0 text-primary"><span class="text-capitalize">b</span>ukaapps</h1>
            <h6 class="mb-4 text-primary">Aplikasi Buku Uang Kas</h6>

          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Username Anda" name="email" id="email"  value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Anda" name="password" id="password" >
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><!-- form-group -->

            <div class="row mb-3 justify-content-left">
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-az-primary btn-block">Masuk</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer pt-3">
                @if (Route::has('password.request'))
                <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
                @endif
                <div>
                    Tidak memiliki akun? <a href="{{ route('register') }}">Daftar</a>
                </div>
                
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->
@endsection