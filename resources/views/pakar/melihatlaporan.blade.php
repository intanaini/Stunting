@extends('layouts.main')

@section('Isi')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Laporan</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  Nama Balita
                </th>
                <th>
                    Nama Orang Tua
                  </th>
                <th>
                  Jumlah balita Stunting
                </th>
                <th>
                  Total Balita keseluruhan 
                </th>
                <th>
                  Umur
                </th>
                <th>
                  Jenis Kelamin
                </th>
                {{-- <th class="text-center"> --}}
                
              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

   
@endsection