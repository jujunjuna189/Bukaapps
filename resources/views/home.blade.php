@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12 mg-t-20 mg-md-t-0">
            <div class="az-content-label mg-b-5">Area Chart</div>
            <p class="mg-b-20">Below is the basic area chart example.</p>
            <div class="chartjs-wrapper-demo"><canvas id="chartArea1"></canvas></div>
        </div><!-- col-6 -->
    </div><!-- row -->
</div>
@endsection
@section('js')

<script>
    $(function() {
        'use strict';

        /** AREA CHART **/
        var ctx9 = document.getElementById('chartArea1');

        var gradient1 = ctx3.createLinearGradient(0, 350, 0, 0);
        gradient1.addColorStop(0, 'rgba(241,0,117,0)');
        gradient1.addColorStop(1, 'rgba(241,0,117,.5)');

        var gradient2 = ctx3.createLinearGradient(0, 280, 0, 0);
        gradient2.addColorStop(0, 'rgba(0,123,255,0)');
        gradient2.addColorStop(1, 'rgba(0,123,255,.3)');

        new Chart(ctx9, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    data: [12, 15, 18, 40, 35, 38, 32, 20, 25, 15, 25, 30],
                    borderColor: '#f10075',
                    borderWidth: 1,
                    backgroundColor: gradient1
                }, {
                    data: [10, 20, 25, 55, 50, 45, 35, 37, 45, 35, 55, 40],
                    borderColor: '#007bff',
                    borderWidth: 1,
                    backgroundColor: gradient2
                }]
            },
            options: {
                maintainAspectRatio: false,
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