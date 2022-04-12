@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 col-xl-12 mg-t-20 mg-md-t-0">
            <div class="az-content-label az-content-label-sm mg-b-15">With Transparency</div>
            <div class="ht-200 ht-lg-250"><canvas id="chartBar2"></canvas></div>
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
                    label: '# of Votes',
                    data: [12, 39, 20, 10, 25, 18],
                    backgroundColor: 'rgba(0,123,255,.5)'
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false,
                    labels: {
                        display: false
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