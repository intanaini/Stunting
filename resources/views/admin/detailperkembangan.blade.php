@extends('layouts.main')

@section('Isi')
    {{-- @json($label);
<br>
@json($panjang);
<br>
@json($color);
<br>
@json($perkembangan->detail) --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column">

                        <div class="row flex-grow">
                            <div class="col-12 col-lg-12 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div>


                                    </div>
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Perkembangan Balita
                                                    {{ $perkembangan->balita->nama_balita }}</h4>
                                                <h6 class="card-subtitle card-subtitle-dash">
                                                    <span class="d-flex">
                                                        <div class="mx-1"
                                                            style="width: 10px;
                                                        height: 10px;
                                                        border-radius: 50%;
                                                        background-color: #f00; ">
                                                        </div>
                                                        Lingkaran Merah : Masuk
                                                        Stunting 
                                                    </span>
                                                    <br>
                                                    <span class="d-flex">
                                                        <div class="mx-1"
                                                            style="width: 10px;
                                                        height: 10px;
                                                        border-radius: 50%;
                                                        background-color: rgb(224, 214, 70); ">
                                                        </div>
                                                        Lingkaran Kuning : Tahap Stunting 
                                                    </span>
                                                    <br>
                                                    <span class="d-flex">
                                                        <div class="mx-1"
                                                            style="width: 10px;
                                                        height: 10px;
                                                        border-radius: 50%;
                                                        background-color: rgb(12, 214, 19); ">
                                                        </div>
                                                        Lingkaran Hijau : Keluar Stunting 
                                                    </span>
                                                </h6>
                                            </div>
                                            <div id="performance-line-legend"></div>
                                        </div>

                                        <canvas id="areaChart"></canvas>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@push('js')
    <script>
        /////////////////////
        $(function() {
            /* ChartJS
             * -------
             * Data and config for chartjs
             */
            'use strict';


            //   var gradient = ctx.createLinearGradient(0, 0, 0, 400);
            // gradient.addColorStop(0, 'rgba(255, 0, 0, 0.5)');
            // gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');


            var areaData = {
                labels: @json($label),
                datasets: [{
                    label: @json($perkembangan->balita->nama_balita),
                    data: @json($panjang),
                    // backgroundColor: gradient,
                    backgroundColor: @json($bcolor),
                    borderColor: @json($color),
                    pointStyle: 'circle',
                    pointRadius: 10,
                    pointHoverRadius: 15,
                    borderWidth: 1,
                    fill: true, // 3: no fill
                }]
            };

            var areaOptions = {
                plugins: {
                    filler: {
                        propagate: true
                    }
                }
            }


            if ($("#areaChart").length) {
                var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
                var areaChart = new Chart(areaChartCanvas, {
                    type: 'line',
                    data: areaData,
                    options: areaOptions
                });
            }

        });

        ///////////////////////////////
    </script>
@endpush
