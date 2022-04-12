@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header row">
        <div class="col-lg-6">
            <h6 class="az-content-title tx-18 mg-b-5">Utang dan Piutang</h6>
            <p class="az-content-text tx-13 mg-b-0 mb-lg-0 mb-3">Hi, welcome back! Here's your summary of your events.</p>
        </div>
        <div class="col-lg-6">
            <div class="text-right">
                <a href="{{ route('utang_piutang.add', ['page' => 'utang']) }}" class="btn btn-primary rounded"><i class="typcn typcn-plus"></i> Catat Utang & Piutang</a>
            </div>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <div class="nav-scroller">
                <ul class="nav nav-tabs tickets-tab-switch" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded" id="open-tab" data-bs-toggle="tab" href="#open-tickets" role="tab" aria-controls="open-tickets" aria-selected="true">Utang <div class="badge">{{ App\Models\GlobalModel::format_currency($utang) }}</div></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded" id="pending-tab" data-bs-toggle="tab" href="#pending-tickets" role="tab" aria-controls="pending-tickets" aria-selected="false">Piutang <div class="badge">{{ App\Models\GlobalModel::format_currency($piutang) }}</div></a>
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
                        <td>Transaksi</td>
                        <td>Orang yang Bersangkutan</td>
                        <td class="text-right">Nominal</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($utang_piutang as $val)
                    <tr onclick="onClick('<?= $val->id ?>')" class="bg-hover cursor-pointer">
                        <td>{{ $val->type }}</td>
                        <td>{{ $val->person }}</td>
                        <td class="text-right @if($val->type == 'piutang') text-primary @else text-danger @endif font-weight-bold">{{ App\Models\GlobalModel::format_currency($val->nominal) }}</td>
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
        window.open('<?= route('utang_piutang.detail') ?>?utang_piutang_id=' + utang_piutang_id, '_self');
    }
</script>
@endsection