@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-bar-chart"></span>
                Reports
            </h3>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <canvas id="bar-chart"></canvas>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('/vendors/chartjs/Chart.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/vendors/chartjs/Chart.min.js') }}"></script>
    <script type="text/javascript">
        var labels = {!! json_encode($labels) !!};
        var data = {!! json_encode($data) !!};

        var ctxBar = document.getElementById("bar-chart").getContext("2d");
        var myBar = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Guest',
                    backgroundColor: '#3245D1',
                    data: data
                }]
            },
            options: {
                responsive: true,
                barRoundness: 1,
                title: {
                    display: true,
                    text: "Students in 2020"
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            suggestedMax: 40 + 20,
                            padding: 10,
                        },
                        gridLines: {
                            drawBorder: false,
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false
                        }
                    }]
                }
            }
        });
    </script>
@endpush
