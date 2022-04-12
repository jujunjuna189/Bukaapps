@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-xl-12 mg-t-20 mg-md-t-0">
            <h1>Grafik</h1>
            <div class="az-content-label az-content-label-sm mg-b-15">Statistik Perhari</div>
            <div class="ht-200 ht-lg-300"><canvas id="chartBar2"></canvas></div>
        </div><!-- col-6 -->
    </div><!-- row -->
</div>
@endsection
@section('js')

<script>
    $(function() {
        'use strict';


        var ctx2 = document.getElementById('chartBar2').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                        label: 'Pemasukan',
                        data: [12, 39, 20, 10, 25, 18],
                        backgroundColor: 'rgba(0,123,255,.5)'
                    },
                    {
                        label: 'Pengeluaran',
                        data: [12, 39, 20, 10, 25, 18],
                        backgroundColor: 'rgb(223, 71, 89, .5)',
                    },
                ]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: true,
                    labels: {
                        display: true
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontSize: 10,
                            max: 80
                        }
                    }],
                    xAxes: [{
                        barPercentage: 0.6,
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11
                        }
                    }]
                }
            }
        });

    });
</script>
@endsection