@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Ubah Pemasukan</h6>
            <p class="az-content-text tx-13 mg-b-0">Isi Form dengan Benar !</p>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('transaksi.update.proses', ['transaksi_id' => $transaksi->id]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nominal Pemasukan</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('sell_price') is-invalid @enderror" placeholder="Masukkan nominal pemasukan" name="sell_price" id="sell_price" value="{{ $transaksi->sell_price }}">
                    </div>

                    @error('sell_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label class="mb-0">Pengeluaran</label>
                    <div>
                        <small>Masukan pengeluaran jika ada</small>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('purchase') is-invalid @enderror" placeholder="Masukkan nominal pemasukan" name="purchase" id="purchase" value="{{ $transaksi->purchase }}">
                    </div>

                    @error('purchase')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="...">{{ $transaksi->description }}</textarea>

                    @error('description')
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