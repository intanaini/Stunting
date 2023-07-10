@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel Posyandu</h4>
            <a href="{{ route('tambah-posyandu') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Posyandu</a>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Nama 
                    </th>
                    <th>
                      Alamat
                    </th>
                    <th>
                      Jadwal
                    </th>
                    <th>
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @json($aposyandu) --}}
                  @foreach ($posyandu as $item)
                      
                  <tr>
                    <td>
                      {{ $item->nama_posyandu }}
                    </td>
                    <td>
                      {{ $item->alamat_posyandu }}

                    </td>
                    <td>
                      {{ $item->jadwal_posyandu }}
                    </td>
                    <td>
                      <a href="{{ route('edit-posyandu',$item->idposyandu) }}" class="btn btn-primary btn-rounded btn-fw">Edit</a>
                      <a href="{{ route('delete-posyandu', $item->idposyandu) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a>
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
