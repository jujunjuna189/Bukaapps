@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Pemasukan</h6>
            <p class="az-content-text tx-13 mg-b-0">Hi, welcome back! Here's your summary of your events.</p>
        </div>
        <div class="float-right text-right">
            <div class="row row-sm">
                <div class="col-lg-4">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary pd-x-25 active">Pemasukan</button>
                        <a href="{{route('transaksi.pengeluaran')}}" class="btn btn-outline-secondary pd-x-25">Pengeluaran</a>
                    </div>
                </div><!-- col-4 -->
            </div>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </div>
</div><!-- media-body -->
@endsection