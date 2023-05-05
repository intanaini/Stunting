@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel Balita</h4>
            {{-- <a href="{{ route('tambah-balita') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Balita</a> --}}
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      NIK
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Jenis Kelamin
                    </th>
                    <th>
                      Tempat Lahir
                    </th>
                    <th>
                      Tanggal Lahir
                    </th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @json($admin) --}}
                  @foreach ($balita as $item)
                      
                  <tr>
                    <td>
                      {{ $item->nik }}
                    </td>
                    <td>
                      {{ $item->nama_balita }}
                    </td>
                    <td>
                      {{ $item->jenis_kelamin }}

                    </td>
                    <td>
                      {{ $item->tempat_lahir }}

                    </td>
                    <td>
                        {{ $item->tanggal_lahir }}
  
                    </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

   
@endsection
