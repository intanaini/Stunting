@extends('layouts.main')

@section('Isi')
<div class="main-panel w-100">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12  stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah Aturan</h4>
              <form method="POST"  action="{{ route('insert-aturan') }}" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <select class="js-example-basic-single w-100" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                  @error('jenis_kelamin')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Umur</label>
                  <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur">
                  @error('umur')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Panjang Badan</label>
                  <input type="number" class="form-control" id="panjang_badan" name="panjang_badan" placeholder="panjang badan">
                  @error('panjang_badan')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penyakit</label>
                  <select class="js-example-basic-single w-100" id="penyakit" name="penyakit">
                    <option value="stunting">Stunting</option>
                    <option value="tidak_stunting">Tidak Stunting</option>
                  </select>
                  @error('penyakit')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select class="js-example-basic-single w-100" id="status_users" name="status_users">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
                  @error('status_users')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">No.Hp</label>
                  <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="No.HP">
                  @error('no_hp')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Posyandu</label>
                  {{-- <input type="text" class="form-control" id="id_posyandu" name="id_posyandu" placeholder="Posyandu"> --}}
                  {{-- <select class="js-example-basic-single w-100" name="id_posyandu" id="id_posyandu">
                    @foreach ($posyandu as $item)
                        
                    <option value="{{ $item->idposyandu }}">{{ $item->nama_posyandu }}</option>
                    @endforeach
                  </select>
                  @error('id_posyandu')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div> --}}
                <div>

                  <button type="submit" class="btn btn-primary me-2">Simpan</button>
                  
                </form>
                <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>
              </div>
            </div>
          </div>
        </div>
@endsection