@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Kategori Kas</h6>
            <p class="az-content-text tx-13 mg-b-0">Hi, welcome back! Here's your summary of your events.</p>
        </div>
        <div class="float-right text-right">
            <a href="#" class="btn btn-primary"><i class="typcn typcn-plus"></i> Tambah</a>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- bd -->
        </div>
    </div>
</div><!-- media-body -->
@endsection