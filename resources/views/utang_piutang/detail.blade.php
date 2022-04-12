@extends('layouts.app_templates', ['auth' => false, 'back_nav' => true])
@section('content')
<div class="media-body">
    <div class="card mt-3">
        <div class="card-header">
            <h3 class="text-muted">Invoice - {{ date('d/m/Y') }}</h3>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <h2>{{ App\Models\GlobalModel::format_currency($utang_piutang->nominal) }}</h2>
                <div class="">
                    <small class="badge @if($utang_piutang->type == 'utang') badge-danger @else badge-primary @endif small ml-2">{{ $utang_piutang->type }}</small>
                </div>
            </div>
            <span class="badge badge-warning small"><i class="typcn typcn-tick-outline"></i> Terverifikasi</span>
            @if($utang_piutang->status == 'Lunas')
            <span class="badge badge-primary small"><i class="typcn typcn-tick-outline"></i> Lunas</span>
            @endif
            <div class="kontak mt-3">
                <div>
                    <strong>{{ $utang_piutang->person }}</strong>
                    <span class="badge badge-success small">Kontak</span>
                </div>
                <div>
                    <label><small>Tidak ada kontak</small></label>
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
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="h6 mb-4 mt-3">
                Riwayat Pembayaran
                <div class="float-right">
                    <a href="{{ route('utang_piutang.payment', ['utang_piutang_id' => $utang_piutang->id]) }}" class="text-dark"><i class="typcn typcn-book"></i> Bayar</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table w-100">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th class="text-right">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payment_history as $val)
                        <tr>
                            <td>
                                <span class="font-weight-bold">{{ App\Models\GlobalModel::format_date($val->created_at) }}</span>
                                <p class="small mb-0">
                                    {{ $val->description }}
                                </p>
                            </td>
                            <td class="text-right font-weight-bold">{{ App\Models\GlobalModel::format_currency($val->nominal) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
    <div class="row text-center mt-4">
        <div class="col-lg-6">
            <a href="{{ route('utang_piutang.update.paid_off', ['utang_piutang_id' => $utang_piutang->id]) }}" class="text-dark"><i class="typcn typcn-pen"></i> Tandai Lunas</a>
        </div>
        <div class="col-lg-6">
            <a href="{{ route('utang_piutang.delete', ['utang_piutang_id' => $utang_piutang->id]) }}" class="btn btn-outline-danger rounded mobile-mt-3"><i class="typcn typcn-trash"></i> Hapus data</a>
        </div>
    </div>
</div><!-- media-body -->
@endsection