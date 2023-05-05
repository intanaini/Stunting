@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Diagnosa</h4>
              <table class="table table-striped">
                {{-- <form method="POST"> --}}
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama</label>
                    <input type="number" class="form-control" id="nama_balita" name="nama_balita" placeholder="Nama">
                    {{-- @error('nama_balita')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                  @enderror --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select class="js-example-basic-single w-100" id="role" name="role">
                      <option value="admin">Laki-Laki</option>
                      <option value="superadmin">Perempuan</option>
                    </select>
                    {{-- @error('role')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Usia</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Usia">
                    {{-- @error('no_hp')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Panjang Badan</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Panjang Badan">
                      {{-- @foreach ($posyandu as $item)
                          
                      <option value="{{ $item->idposyandu }}">{{ $item->nama_posyandu }}</option>
                      @endforeach --}}
                    </select>
                    {{-- @error('id_posyandu')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror --}}
                  </div>
                  <a href="{{ route('hasildiagnosa') }}"><button class="btn btn-primary me-2">Diagnosa</button></a>
                  <button class="btn btn-light">Kembali</button>
                {{-- </form> --}}
              </table>
            </div>
          </div>
        </div>
      </div>

   
@endsection
