@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header row">
        <div class="col-lg-6">
            <h6 class="az-content-title tx-18 mg-b-5">Pemasukan</h6>
            <p class="az-content-text tx-13 mg-b-0 mb-lg-0 mb-3">Hi, welcome back! Here's your summary of your events.</p>
        </div>
        <div class="col-lg-6">
            <div class="float-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-secondary pd-x-25 active">Pemasukan</a>
                    <a href="#" class="btn btn-outline-secondary pd-x-25">Pengeluaran</a>
                </div>
            </div>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <div class="nav-scroller">
                <ul class="nav nav-tabs tickets-tab-switch" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded active" id="open-tab" data-bs-toggle="tab" href="#open-tickets" role="tab" aria-controls="open-tickets" aria-selected="true">Pemasukan <div class="badge">{{ $transaksi->count() }}</div></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" id="pending-tab" data-bs-toggle="tab" href="#pending-tickets" role="tab" aria-controls="pending-tickets" aria-selected="false">Pengeluaran <div class="badge">#</div></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <span class="text-muted"><i class="typcn typcn-calendar-outline"></i> {{ isset($transaksi[0]) ? $transaksi[0]->created_at : date('d M Y') }}</span>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <a href="{{ route('transaksi.add') }}" class="btn btn-primary"><i class="typcn typcn-plus"></i> Tambah Pemasukan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
    <div class="table-responsive">
            <table class="table w-100">
                <thead>
                    <tr>
                        <td>Transaksi</td>
                        <td class="text-right">Pemasukan</td>
                        <td class="text-right">Pengeluaran</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-weight-bold">{{ App\Models\GlobalModel::format_date($transaksi['0']->created_at) }}</td>
                        <td class="text-right text-primary font-weight-bold">{{ App\Models\GlobalModel::format_currency($total_pemasukan) }}</td>
                        <td class="text-right text-primary font-weight-bold">{{ App\Models\GlobalModel::format_currency($total_pengeluaran) }}</td>
                    </tr>
                    @foreach($transaksi as $val)
                    <tr>
                        <td>
                            {{ $val->title }}
                            <div>     
                                <span class="text-primary text-white">
                                    <small>Keuntungan {{ App\Models\GlobalModel::format_currency(($val->sell_price - $val->purchase)) }}</small>
                                </span>
                            </div>
                        </td>
                        <td class="text-right text-primary">{{ App\Models\GlobalModel::format_currency($val->sell_price) }}</td>
                        <td class="text-right text-danger">{{ App\Models\GlobalModel::format_currency($val->purchase) }}</td>
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
    function onClick (transaksi_id) {
        window.open('<?= route('transaksi.detail') ?>?transaksi_id=' + transaksi_id, '_self');
    }
</script>
@endsection