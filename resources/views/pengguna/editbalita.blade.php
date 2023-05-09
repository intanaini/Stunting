@extends('layouts.main')

@section('Isi')
<div class="main-panel w-100">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12  stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Balita</h4>
              <form method="POST"  action="{{ route('update-balita',$balita->idbalita) }}" >
                @csrf
                <div class="form-group">

                  <label for="exampleInputPassword1">Orang tua</label>
                  <select class="js-example-basic-single w-100" id="orang_tua" name="orang_tua">
                    @foreach ($ortu as $item)
                    <option value="{{ $item->id_user }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                  @error('orang_tua')
                  <span class="text-danger" >
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK">
                    @error('nik')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama_balita" name="nama_balita" placeholder="Nama">
                    @error('nama_balita')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                  </div>
                  
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
              <label for="exampleInputEmail1">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
              @error('tempat_badan')
                                <span class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                @error('tanggal_lahiran')
                                  <span class="text-danger" >
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
              </div>
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <a href="{{ route('databalita') }}"  class="btn btn-light">Kembali</a>
              </form>
            </div>
          </div>
        </div>
@endsection