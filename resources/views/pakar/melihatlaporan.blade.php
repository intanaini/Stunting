@extends('layouts.main')

@section('Isi')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <button type="button" class="btn btn-primary mdi mdi-printer"> Cetak Laporan</button>
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                No. 
              </th>
              <th>
                NIK
              </th>
              <th>
                Nama Balita
              </th>
              <th>
                Posyandu
              </th>
              <th>
                Diagnosa
              </th>
              <th>
                Status
              </th>
              <th>
                Tanggal Diagnosa
              </th>
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