@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">BALITA</h4>
            <a href="{{ route('tambah-balita') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Balita</a>
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
                    <th class="text-center">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @json($posyandu) --}}
                  @foreach ($balita as $item)
                      
                  <tr>
                    {{-- <td class="B-1">
                      {{ $item->idbalita }}
                    </td> --}}
                    <td>
                      {{ '*************'.substr($item->nik,-5) }}
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
                        {{ $item->tanggal_lahir->format('d M Y') }}
  
                      </td>
                      <td class="text-center">
                        <a href="{{ route('edit-balita',$item->idbalita) }}" class="btn btn-primary btn-rounded btn-fw"  >Edit</a>
                        <a href="{{ route('delete-balita',$item->idbalita) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                        </a>
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
