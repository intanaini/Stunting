@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Perkembangan</h4>
            {{-- <a href="{{ route('tambah-perkembangan') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Admin</a> --}}
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Nama 
                    </th>
                    <th>
                      Panjang Badan
                    </th>
                    <th>
                      Umur
                    </th>
                    <th>
                      Status
                    </th>
                    <th class="text-center">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @json($admin) --}}
                  @foreach ($perkembangan as $item)
                      
                  <tr>
                    <td>
                      {{ $item->balita->nama_balita }}
                    </td>
                    <td class="B-1">
                      {{-- {{ $item->panjang_badan }} --}}
                      @foreach ($item->detail->sortBy('created_at') as $key)
                          {{ $key->panjang_badan.' cm' }} @if (!$loop->last)
                            -
                          @endif
                      @endforeach
                    </td>
                    <td>
                      {{ $item->umur }}
                    </td>
                    <td>
                      {{ $item->status }}

                    </td>
                    <td class="text-center">
                      {{-- <a href="{{ route('edit-perkembangan',$item->idperkembangan) }}" class="btn btn-primary btn-rounded btn-fw"  >Pertumbuhan</a> --}}
                      {{-- <a href="{{ route('delete-perkembangan', $item->idperkembangan) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a> --}}
                      <a href="{{ route('viewperkembangan-user',$item->idperkembangan) }}" type="button" class="btn btn-primary btn-rounded btn-icon">
                        <i class="mdi mdi-eye"></i>
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