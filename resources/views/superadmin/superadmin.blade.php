@extends('layouts.main')

@section('Isi')
<div class="continer-fluid mt-3 mx-3">
    <div class="row mb-3">
        <div class="col-md-12">
            <h2>Hallo, Selamat Datang di Sistem Pakar Penentuan Balita Stunting!!!</h2>
        </div>
    </div>
    <div class="row mb-3">
      <div class="col-lg-4 d-flex flex-column mb-2">
        <div class="card bg-primary card-rounded">
          <div class="card-body pb-0">
            <h4 class="card-title mb-2 card-title-dash text-white ">Jumlah Balita</h4>
            <h2 class="text-white mb-4">{{ $jb }}</h2>
          </div>
        </div>
        
      </div>
      <div class="col-lg-4 d-flex flex-column mb-2">
        <div class="card bg-warning card-rounded">
          <div class="card-body pb-0">
            <h4 class="card-title mb-2 card-title-dash text-white ">Jumlah Penguna</h4>
            <h2 class="text-white mb-4">{{ $jp }}</h2>
          </div>
        </div>
        
      </div>
      <div class="col-lg-4 d-flex flex-column mb-2">
        <div class="card bg-success card-rounded">
          <div class="card-body pb-0">
            <h4 class="card-title mb-2 card-title-dash text-white ">Jumlah Diagnosa</h4>
            <h2 class="text-white mb-4">{{ $jd }}</h2>
          </div>
        </div>
        
      </div>
       
     
    </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                    <div class="row">
                      <div class="col-lg-3 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title card-title-dash">Total Data Stunting  </h4>
                                      </div>
                                      <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                      <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                      </div>                      
                    </div>
                      <div class="col-lg-9 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Data Balita Stunting Tahun {{ date('Y') }}  </h4>
                                   {{-- <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5> --}}
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                    </div>
                      
                      
                        
                    {{-- </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
@endsection
@push('js')
    <script>
      /////////////////
      if ($("#marketingOverview").length) {
      var marketingOverviewChart = document.getElementById("marketingOverview").getContext('2d');
      var marketingOverviewData = {
          labels: ["bb","FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
          datasets: [{
              label: 'Last week',
              data: [120, 220, 200, 190, 220, 110, 210, 110, 205, 202, 201, 150],
              backgroundColor: "#52CDFF",
              borderColor: [
                  '#52CDFF',
              ],
              borderWidth: 0,
              fill: true, // 3: no fill
              
          },{
            label: 'This week',
            data: [215, 290, 210, 250, 290, 230, 290, 210, 280, 220, 190, 300],
            backgroundColor: "#1F3BB3",
            borderColor: [
                '#1F3BB3',
            ],
            borderWidth: 0,
            fill: true, // 3: no fill
        }]
      };
  
      var marketingOverviewOptions = {
        responsive: true,
        maintainAspectRatio: false,
          scales: {
              yAxes: [{
                  gridLines: {
                      display: true,
                      drawBorder: false,
                      color:"#F0F0F0",
                      zeroLineColor: '#F0F0F0',
                  },
                  ticks: {
                    beginAtZero: true,
                    autoSkip: true,
                    maxTicksLimit: 5,
                    fontSize: 10,
                    color:"#6B778C"
                  }
              }],
              xAxes: [{
                stacked: true,
                barPercentage: 0.35,
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                  beginAtZero: false,
                  autoSkip: true,
                  maxTicksLimit: 12,
                  fontSize: 10,
                  color:"#6B778C"
                }
            }],
          },
          legend:false,
          legendCallback: function (chart) {
            var text = [];
            text.push('<div class="chartjs-legend"><ul>');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              console.log(chart.data.datasets[i]); // see what's inside the obj.
              text.push('<li class="text-muted text-small">');
              text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
              text.push(chart.data.datasets[i].label);
              text.push('</li>');
            }
            text.push('</ul></div>');
            return text.join("");
          },
          
          elements: {
              line: {
                  tension: 0.4,
              }
          },
          tooltips: {
              backgroundColor: 'rgba(31, 59, 179, 1)',
          }
      }
      var marketingOverview = new Chart(marketingOverviewChart, {
          type: 'bar',
          data: marketingOverviewData,
          options: marketingOverviewOptions
      });
      document.getElementById('marketing-overview-legend').innerHTML = marketingOverview.generateLegend();
    }
/////////////////////

    if ($("#performaneLine").length) {
      var graphGradient = document.getElementById("performaneLine").getContext('2d');
      var graphGradient2 = document.getElementById("performaneLine").getContext('2d');
      var saleGradientBg = graphGradient.createLinearGradient(5, 0, 5, 100);
      saleGradientBg.addColorStop(0, 'rgba(26, 115, 232, 0.18)');
      saleGradientBg.addColorStop(1, 'rgba(26, 115, 232, 0.02)');
      var saleGradientBg2 = graphGradient2.createLinearGradient(100, 0, 50, 150);
      saleGradientBg2.addColorStop(0, 'rgba(0, 208, 255, 0.19)');
      saleGradientBg2.addColorStop(1, 'rgba(0, 208, 255, 0.03)');
      var salesTopData = {
          labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
          datasets: [{
              label: 'Balita Stunting',
              data: @json($dataStunting),
              backgroundColor: saleGradientBg,
              borderColor: [
                  '#1F3BB3',
              ],
              borderWidth: 1.5,
              fill: true, // 3: no fill
              pointBorderWidth: 1,
              pointRadius: [4, 4, 4, 4, 4,4, 4, 4, 4, 4,4, 4, 4],
              pointHoverRadius: [2, 2, 2, 2, 2,2, 2, 2, 2, 2,2, 2, 2],
              pointBackgroundColor: ['#1F3BB3', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3', '#1F3BB3', '#1F3BB3', '#1F3BB3','#1F3BB3'],
              pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
          },{
            label: 'Balita Tidak Stunting',
            data: @json($dataTDKStunting),
            backgroundColor: saleGradientBg2,
            borderColor: [
                '#52CDFF',
            ],
            borderWidth: 1.5,
            fill: true, // 3: no fill
            pointBorderWidth: 1,
            pointRadius: [4, 4, 4, 4, 4,4, 4, 4, 4, 4,4, 4, 4],
              pointHoverRadius: [2, 2, 2, 2, 2,2, 2, 2, 2, 2,2, 2, 2],
            pointBackgroundColor: ['#52CDFF', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF', '#52CDFF', '#52CDFF', '#52CDFF','#52CDFF'],
              pointBorderColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff','#fff',],
        }]
      };
  
      var salesTopOptions = {
        responsive: true,
        maintainAspectRatio: false,
          scales: {
              yAxes: [{
                  gridLines: {
                      display: true,
                      drawBorder: false,
                      color:"#F0F0F0",
                      zeroLineColor: '#F0F0F0',
                  },
                  ticks: {
                    beginAtZero: false,
                    autoSkip: true,
                    maxTicksLimit: 4,
                    fontSize: 10,
                    color:"#6B778C"
                  }
              }],
              xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                  beginAtZero: false,
                  autoSkip: false,
                  maxTicksLimit: 7,
                  fontSize: 10,
                  color:"#6B778C"
                }
            }],
          },
          legend:false,
          legendCallback: function (chart) {
            var text = [];
            text.push('<div class="chartjs-legend"><ul>');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              console.log(chart.data.datasets[i]); // see what's inside the obj.
              text.push('<li>');
              text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + '</span>');
              text.push(chart.data.datasets[i].label);
              text.push('</li>');
            }
            text.push('</ul></div>');
            return text.join("");
          },
          
          elements: {
              line: {
                  tension: 0.4,
              }
          },
          tooltips: {
              backgroundColor: 'rgba(31, 59, 179, 1)',
          }
      }
      var salesTop = new Chart(graphGradient, {
          type: 'line',
          data: salesTopData,
          options: salesTopOptions
      });
      document.getElementById('performance-line-legend').innerHTML = salesTop.generateLegend();
    }

///////////////////////////////

    if ($("#doughnutChart").length) {
      var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
      var doughnutPieData = {
        datasets: [{
          data: @json($totaldata),
          backgroundColor: [
            "#1F3BB3",
            "#FDD0C7",
            // "#52CDFF",
            // "#81DADA"
          ],
          borderColor: [
            "#1F3BB3",
            "#FDD0C7",
            // "#52CDFF",
            // "#81DADA"
          ],
        }],
  
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Stunting',
          'Tidak Stunting',
          // 'Gross',
          // 'AVG',
        ]
      };
      var doughnutPieOptions = {
        cutoutPercentage: 50,
        animationEasing: "easeOutBounce",
        animateRotate: true,
        animateScale: false,
        responsive: true,
        maintainAspectRatio: true,
        showScale: true,
        legend: false,
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="chartjs-legend"><ul class="justify-content-center">');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
            text.push('</span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('</li>');
          }
          text.push('</div></ul>');
          return text.join("");
        },
        
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        },
        tooltips: {
          callbacks: {
            title: function(tooltipItem, data) {
              return data['labels'][tooltipItem[0]['index']];
            },
            label: function(tooltipItem, data) {
              return data['datasets'][0]['data'][tooltipItem['index']];
            }
          },
            
          backgroundColor: '#fff',
          titleFontSize: 14,
          titleFontColor: '#0B0F32',
          bodyFontColor: '#737F8B',
          bodyFontSize: 11,
          displayColors: false
        }
      };
      var doughnutChart = new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: doughnutPieData,
        options: doughnutPieOptions
      });
      document.getElementById('doughnut-chart-legend').innerHTML = doughnutChart.generateLegend();
    }
    </script>
@endpush