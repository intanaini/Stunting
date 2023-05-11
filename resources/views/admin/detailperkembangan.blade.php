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
                      <div  >
                        <h6>*Lingkaran Merah   : Masuk Stunting <br></h6>
                        <h6>*Lingkaran Kuning  : Tahap Stunting <br></h6>
                        <h6>*Lingkaran Hijau   : Keluar Stunting <br></h6>

                      </div>
                      <div class="card-body">
                     
                          
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
      backgroundColor:@json($bcolor),
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

 

  

  

 
  // Get context with jQuery - using jQuery's .get() method.
 


  

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