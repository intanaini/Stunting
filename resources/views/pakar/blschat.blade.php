@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">BALITA</h4>
            {{-- <a href="{{ route('tambah-user') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Admin</a> --}}
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Nama 
                    </th>
                    <th>
                      Isi
                    </th>
                    <th>
                      Tanggal
                    </th>
                    <th class="text-center">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($chat->unique('idpengirim') as $item)
                      
                    <tr>
                      <td>
                        {{ $item->pengirim->name }}
                      </td>
                      <td>
                       {{ substr( $item->isi_text,0,50) }}
                      </td>
                      <td>
                        {{ $item->tanggal }}
                      </td>
                      <td class="text-center">
                        <a href="{{ route('viewchat',$item->idpengirim) }}" type="button" class="btn btn-primary btn-rounded btn-icon">
                            <i class="mdi mdi-eye"></i>
                          </a>
                      </td>
                    </tr>
                  @endforeach

                  {{-- @json($posyandu) --}}
                  {{-- @foreach ($balita as $item)
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
                  @endforeach  --}}
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

   
@endsection
