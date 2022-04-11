@extends('layouts.app_templates', ['auth' => false])
@section('content')
<div class="media-body">
    <div class="card">
        <div class="card-header">
            <h3 class="text-muted">Invoice - {{ date('d/m/Y') }}</h3>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <span>Pemasukan</span>
                <span>{{ App\Models\GlobalModel::format_currency($transaksi->sell_price) }}</span>
            </div>
            <div class="mt-4"></div>
            <div class="d-flex justify-content-between">
                <span>Pengeluaran</span>
                <span>{{ App\Models\GlobalModel::format_currency($transaksi->purchase) }}</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span>Keuntungan</span>
                <span>{{ App\Models\GlobalModel::format_currency(($transaksi->sell_price - $transaksi->purchase)) }}</span>
            </div>
            <hr>
            <div class="mt-4">
                <h6>Catatan Deskripsi</h6>
                <p>
                    {{ $transaksi->description }}
                </p>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h2>{{ App\Models\GlobalModel::format_currency($transaksi->sell_price) }}</h2>
            <span class="badge badge-warning small"><i class="typcn typcn-tick-outline"></i> Terverifikasi</span>
            <div class="kontak mt-3">
                <div>
                    <strong>{{ Auth::user()->name }}</strong>
                    <span class="badge badge-success small">Kontak</span>
                </div>
                <div>
                    <label><small>{{ Auth::user()->email }}</small></label>
                </div>
            </div>
            <div class="mt-2">
                <span class="text-muted small">Catatan</span>
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
            <a href="{{ route('transaksi.update', ['transaksi_id' => $transaksi->id]) }}" class="text-dark"><i class="typcn typcn-pen"></i> Ubah data</a>
        </div>
        <div class="col-lg-6">
        <a href="{{ route('transaksi.delete', ['transaksi_id' => $transaksi->id]) }}" class="btn btn-outline-danger rounded mobile-mt-3"><i class="typcn typcn-trash"></i> Hapus data</a>
        </div>
    </div>
</div><!-- media-body -->
@endsection