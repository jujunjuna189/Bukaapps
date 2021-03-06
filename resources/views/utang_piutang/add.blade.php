@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="row">
        <div class="col-lg-6">
            <h6 class="mb-0">Catat Utang dan Piutang</h6>
            <p class="mb-3">Isi Form dengan Benar !</p>
        </div>
        <div class="col-lg-6">
            <div class="text-right mb-3">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('utang_piutang.add', ['page' => 'utang']) }}" class="btn @if($page == 'utang') btn-secondary active @else btn-outline-secondary @endif pd-x-25">Utang</a>
                    <a href="{{ route('utang_piutang.add', ['page' => 'piutang']) }}" class="btn  @if($page == 'piutang') btn-secondary active @else btn-outline-secondary @endif pd-x-25">Piutang</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('utang_piutang.add.proses') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nominal</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('nominal') is-invalid @enderror" placeholder="Masukan nominal" name="nominal" id="nominal" value="{{ old('nominal') }}" required>
                    </div>

                    @error('nominal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Orang yang bersangkutan</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-white">
                                <i class="typcn typcn-user"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control @error('person') is-invalid @enderror" placeholder="Masukan nama bersangkutan" name="person" id="person" value="{{ old('person') }}" required>
                    </div>

                    @error('person')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="..."></textarea>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->
                <input type="hidden" name="type" id="type" value="{{ $page }}">
                <div class="form-froup text-right">
                    <a href="{{ route('utang_piutang') }}" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="typcn typcn-folder-add"></i> Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div><!-- media-body -->
@endsection