@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header row">
        <div class="col-lg-6">
            <h6 class="az-content-title tx-18 mg-b-5"></h6>
            <p class="az-content-text tx-13 mg-b-0 mb-lg-0 mb-3">Hi, welcome back! Here's your summary of your events.</p>
        </div>
        <div class="col-lg-6">
            <div class="float-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('transaksi.pemasukan')}}" class="btn btn-outline-secondary pd-x-25">Pemasukan</a>
                    <a href="{{route('transaksi.pengeluaran')}}" class="btn btn-secondary pd-x-25 active">Pengeluaran</a>
                </div>
            </div>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <div class="nav-scroller">
                <ul class="nav nav-tabs tickets-tab-switch" role="tablist">
                    <li class="nav-item">
                        <a href="#" class="nav-link rounded active" id="open-tab" data-bs-toggle="tab" role="tab" aria-controls="open-tickets" aria-selected="true">Pemasukan <div class="badge">13</div></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link rounded active" id="open-tab" data-bs-toggle="tab" role="tab" aria-controls="open-tickets" aria-selected="true">Pengeluaran <div class="badge">13</div></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <span class="text-muted"><i class="typcn typcn-calendar-outline"></i> Tanggal Last Update</span>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <a href="{{route('transaksi.pengeluaran.add')}}" class="btn btn-primary"><i class="typcn typcn-plus"></i> Tambah Pengeluaran</a>
                </div>
            </div>
            <div class="mt-4">
                @foreach($pengeluaran as $val)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>{{$val->created_at}}</h5>
                                <p class="mb-0"><small>{{$val->description}}</small></p>
                            </div>
                            <div class="col-lg-6 text-right">
                                <h6 class="text-danger">{{$val->purchase}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div><!-- media-body -->
@endsection