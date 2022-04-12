@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="row">
        <div class="col-lg-6">
            <h6 class="mb-0">Tambah Pemasukan</h6>
            <p class="mb-3">Isi Form dengan Benar !</p>
        </div>
        <div class="col-lg-6">
            <div class="text-right mb-3">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('transaksi.add', ['transaksi' => 'pemasukan'])}}" class="btn @if($page == 'pemasukan') btn-secondary active @else btn-outline-secondary @endif pd-x-25">Pemasukan</a>
                    <a href="{{route('transaksi.add', ['transaksi' => 'pengeluaran'])}}" class="btn  @if($page == 'pengeluaran') btn-secondary active @else btn-outline-secondary @endif pd-x-25">Pengeluaran</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('transaksi.add.proses',) }}" method="post">
                @csrf
                @if($page == 'pemasukan')
                <div class="form-group">
                    <label>Nominal Pemasukan</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('sell_price') is-invalid @enderror" placeholder="Masukkan nominal pemasukan" name="sell_price" id="sell_price" value="{{ old('sell_price') }}">
                    </div>

                    @error('sell_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->
                @endif

                <div class="form-group">
                    <label class="mb-0">Pengeluaran</label>
                    @if($page == 'pemasukan')
                    <div>
                        <small>Masukan pengeluaran jika ada</small>
                    </div>
                    @endif
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('purchase') is-invalid @enderror" placeholder="Masukkan nominal pemasukan" name="purchase" id="purchase" value="{{ old('purchase') }}">
                    </div>

                    @error('number')
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
                    <button type="submit" class="btn btn-primary"><i class="typcn typcn-folder-add"></i> Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div><!-- media-body -->
@endsection