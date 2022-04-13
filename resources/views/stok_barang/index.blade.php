@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header row">
        <div class="col-lg-6">
            <h6 class="az-content-title tx-18 mg-b-5">Stok Barang</h6>
            <p class="az-content-text tx-13 mg-b-0 mb-lg-0 mb-3">...</p>
        </div>
        <div class="col-lg-6">
            <div class="text-right">
                <a href="{{ route('stok_barang.add') }}" class="btn btn-primary rounded"><i class="typcn typcn-plus"></i> Stok Barang</a>
            </div>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <div class="nav-scroller">
                <ul class="nav nav-tabs tickets-tab-switch" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded" id="open-tab" data-bs-toggle="tab" href="#open-tickets" role="tab" aria-controls="open-tickets" aria-selected="true">Jumlah Barang <div class="badge">{{ $stok_barang->count() }}</div></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="table-responsive">
            <table class="table w-100" id="example2">
                <thead>
                    <tr>
                        <td>Nama Barang</td>
                        <td class="text-right">Stok Barang</td>
                        <td class="text-right">Harga Jual</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stok_barang as $val)
                    <tr onclick="onClick('<?= $val->id ?>')" class="bg-hover cursor-pointer">
                        <td>{{ $val->product_name }}</td>
                        <td class="text-right"><span class="font-weight-bold @if($val->quantity <= 10) text-danger @else text-primary @endif">{{ $val->quantity }}</span> Barang</td>
                        <td class="text-right font-weight-bold">{{ App\Models\GlobalModel::format_currency($val->selling_price) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div><!-- media-body -->
@endsection
@section('js')
<script>
    function onClick(utang_piutang_id) {
        window.open('<?= route('stok_barang.detail') ?>?stok_barang_id=' + utang_piutang_id, '_self');
    }
</script>
@endsection