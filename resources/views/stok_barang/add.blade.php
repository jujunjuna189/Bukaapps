@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div>
        <h6 class="mb-0">Buat Stok Barang</h6>
        <p class="mb-3">Isi Form dengan Benar !</p>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('stok_barang.add.proses') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" placeholder="Masukan nama barang" name="product_name" id="product_name" value="{{ old('product_name') }}" required>

                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Harga Jual</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-white">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('selling_price') is-invalid @enderror" placeholder="0.00" name="selling_price" id="selling_price" value="{{ old('selling_price') }}" required>
                    </div>

                    @error('selling_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Harga Beli</label>
                    <small>(Optional / Masukan jika ada)</small>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-white">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('purchase_price') is-invalid @enderror" placeholder="0.00" name="purchase_price" id="purchase_price" value="{{ old('purchase_price') }}">
                    </div>

                    @error('purchase_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Jumlah Produk</label>
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" placeholder="00" name="quantity" id="quantity" value="{{ old('quantity') }}">

                    @error('quantity')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-froup text-right">
                    <a href="{{ route('utang_piutang') }}" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="typcn typcn-folder-add"></i> Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div><!-- media-body -->
@endsection