@extends('layouts.main')

@section('Isi')
<div class="main-panel w-100">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12  stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Posyandu</h4>
              <form method="POST"  action="{{ route('update-posyandu',$posyandu->idposyandu) }}" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input value=" {{ $posyandu->nama_posyandu }}" type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" placeholder="Nama">
                    @error('nama_posyandu')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Posyandu</label>
                    <input value=" {{ $posyandu->alamat_posyandu }}" type="text" class="form-control" id="alamat_posyandu" name="alamat_posyandu" placeholder="password">
                    @error('alamat_posyandu')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Jadwal Posyandu</label>
                    <input value="{{ $posyandu->jadwal_posyandu }}" type="text" class="form-control" id="jadwal_posyandu" name="jadwal_posyandu" placeholder="No.HP">
                    @error('jadwal_posyandu')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                  </div>
  
                
                <a type="submit" href="{{ route('mengeloladataposyandu') }}" class="btn btn-primary me-2">Simpan</a>
                <a href="{{ route('mengeloladataposyandu') }}" class="btn btn-light">Kembali</a>
              </form>
            </div>
          </div>
        </div>
@endsection