@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">POSYANDU</h4>
            {{-- <a href="{{ route('tambah-user') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Admin</a> --}}
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Id Posyandu
                    </th>
                    <th>
                      Nama 
                    </th>
                    <th>
                      Alamat
                    </th>
                    <th>
                      Jadwal
                    </th>
                    {{-- <th>
                      Posyandu
                    </th>
                    <th>
                      aksi
                    </th> --}}
                  </tr>
                </thead>
                <tbody>
                  {{-- @json($posyandu) --}}
                  @foreach ($posyandu as $item)
                      
                  <tr>
                    <td class="py-1">
                      {{ $item->idposyandu }}
                    </td>
                    <td>
                      {{ $item->nama_posyandu }}
                    </td>
                    <td>
                      {{ $item->alamat_posyandu }}

                    </td>
                    <td>
                      {{ $item->jadwal_posyandu }}

                    </td>
                  </tr>
                  @endforeach 
                 
                </tbody>
              </table>
              {{ $posyandu->links('vendor.pagination.bootstrap-4') }}
            </div>
          </div>
        </div>
      </div>

   
@endsection
