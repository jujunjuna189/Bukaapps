@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Kategori Kas</h6>
            <p class="az-content-text tx-13 mg-b-0">Hi, welcome back! Here's your summary of your events.</p>
        </div>
        <div class="float-right text-right">
            <a href="{{ route('kategori_kas.add') }}" class="btn btn-primary"><i class="typcn typcn-plus"></i> Tambah</a>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mg-b-0 w-100" id="example1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori Kas</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori_kas as $val)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $val->kategori }}</td>
                            <td>{{ $val->status }}</td>
                            <td>
                                <a href="{{ route('kategori_kas.update', ['id' => $val->id]) }}" class="badge badge-warning p-2"><i class="typcn typcn-pen"></i> Edit</a>
                                <a href="{{ route('kategori_kas.delete', ['id' => $val->id]) }}" class="badge badge-danger p-2"><i class="typcn typcn-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- bd -->
        </div>
    </div>
</div><!-- media-body -->
@endsection