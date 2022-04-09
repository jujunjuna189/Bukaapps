@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Kategori Kas</h6>
            <p class="az-content-text tx-13 mg-b-0">Hi, welcome back! Here's your summary of your events.</p>
        </div>
    </div><!-- az-content-header -->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mg-b-0" id="example2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>$162,700</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- bd -->
        </div>
    </div>
</div><!-- media-body -->
@endsection