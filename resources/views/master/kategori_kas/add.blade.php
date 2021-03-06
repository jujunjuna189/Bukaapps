@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Tambah Kategori Kas</h6>
            <p class="az-content-text tx-13 mg-b-0">Isi form dengan benar</p>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('kategori_kas.add.proses') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" placeholder="Masukkan Kategori" name="kategori" id="kategori" value="{{ old('kategori') }}">
                    @error('kategori')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="On-Going">On-Going</option>
                        <option value="Active">Active</option>
                    </select>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary"><i class="typcn typcn-folder-add"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- media-body -->
@endsection