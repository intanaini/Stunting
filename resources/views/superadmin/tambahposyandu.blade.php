@extends('layouts.main')

@section('Isi')
<div class="main-panel w-100">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12  stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah Posyandu</h4>
              <form method="POST"  action="{{ route('insert-posyandu') }}" >
                @csrf
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Id Posyandu</label>
                  <input type="text" class="form-control" id="idposyandu" name="idposyandu" placeholder="Id">
                  @error('idposyandu')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" placeholder="Nama">
                  @error('nama_posyandu')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Posyandu</label>
                  <input type="text" class="form-control" id="alamat_posyandu" name="alamat_posyandu" placeholder="Alamat Posyandu">
                  @error('alamat_posyandu')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Jadwal Posyandu</label>
                  <input type="text" class="form-control" id="jadwal_posyandu" name="jadwal_posyandu" placeholder="Jadwal Posyandu">
                  @error('jadwal_posyandu')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                
                <button type="submit" action="{{ route('mengeloladataposyandu') }}" class="btn btn-primary me-2">Simpan</button>
                <button class="btn btn-light">Kembali</button>
              </form>
            </div>
          </div>
        </div>
@endsection