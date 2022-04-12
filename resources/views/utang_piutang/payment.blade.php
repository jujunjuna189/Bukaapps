@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="row">
        <div class="col-lg-6">
            <h6 class="mb-0">Pembayaran</h6>
            <p class="mb-3">Isi Form dengan Benar !</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('utang_piutang.payment.proses', ['utang_piutang_id' => $utang_piutang->id]) }}" method="post">
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
                    <label>Keterangan</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="..."></textarea>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-froup text-right">
                    <a href="{{ route('utang_piutang.detail') }}" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="typcn typcn-folder-add"></i> Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div><!-- media-body -->
@endsection