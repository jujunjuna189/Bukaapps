@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">ADMIN</h6>
        </div>
        <div class="float-right text-right">
            <a href="#" class="btn btn-primary"><i class="typcn typcn-plus"> Tambah</i></a>
        </div>
    </div><!-- az-content-header -->
    
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mg-b-0 w-100" id="example1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>
                                <a href="#" class="badge badge-warning p-2"><i class="typcn typcn-pen"></i> Edit</a>
                                <a href="#" class="badge badge-danger p-2"><i class="typcn typcn-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- bd -->
        </div>
    </div>
</div><!-- media-body -->
@endsection