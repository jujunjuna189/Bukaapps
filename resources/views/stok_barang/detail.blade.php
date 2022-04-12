@extends('layouts.app_templates', ['auth' => false, 'back_nav' => true])
@section('content')
<div class="media-body">
    <div class="card mt-3">
        <div class="card-header">
            <h3 class="text-muted">Detail Barang</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h4>{{$stok_barang->product_name }}</h4>
                </div>
                <div class="col-lg-6 text-lg-right">
                    {{ $stok_barang->product_code }}
                </div>
            </div>
            <span class="badge badge-warning small"><i class="typcn typcn-tick-outline"></i> Terverifikasi</span>
            <div class="kontak mt-3">
                <div>
                    <strong>{{ App\Models\GlobalModel::format_currency($stok_barang->selling_price) }}</strong>
                    <span class="badge badge-success small">Harga Jual</span>
                </div>
                <div>
                    <label class="mr-3"><small>{{ App\Models\GlobalModel::format_currency($stok_barang->purchase_price) }}</small></label>
                    <label class="small font-weight-bold">Stok barang {{ $stok_barang->quantity }}</label>
                </div>
            </div>
            <div class="mt-2">
                <span class="text-muted small">Dibuat pada {{ App\Models\GlobalModel::format_date($stok_barang->created_at) }}</span>
            </div>
            <div class="mt-3 text-center">
                <div>
                    <small>Dibuat oleh Bukaapps</small>
                </div>
                <div>
                    <small><strong>{{ 'www.' . $site[1] }}</strong></small>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center mt-4">
        <div class="col-lg-6">
            <a href="{{ route('stok_barang.update', ['stok_barang_id' => $stok_barang->id]) }}" class="text-dark"><i class="typcn typcn-pen"></i> Ubah data</a>
        </div>
        <div class="col-lg-6">
            <a href="{{ route('stok_barang.delete', ['stok_barang_id' => $stok_barang->id]) }}" class="btn btn-outline-danger rounded mobile-mt-3"><i class="typcn typcn-trash"></i> Hapus data</a>
        </div>
    </div>
</div><!-- media-body -->
@endsection