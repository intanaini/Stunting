@extends('layouts.main')

@section('Isi')
<div class="main-panel w-100">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12  stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah Informasi</h4>
              <form method="POST"  action="{{ route('insert-informasi') }}" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                  @error('keterangan')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                  @error('deskripsi')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <button class="btn btn-light">Kembali</button>
              </form>
            </div>
          </div>
        </div>
@endsection