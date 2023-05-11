@extends('layouts.main')

@section('Isi')
<div class="main-panel w-100">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12  stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Perkembangan</h4>
              <form method="POST"  action="{{ route('update-perkembangan',$perkembangan->idperkembangan) }}" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Balita</label>
                  <input type="text" value="{{ $perkembangan->balita->nama_balita }}" class="form-control" readonly  >
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Panjang Badan</label>
                  <input type="number" value="{{ $perkembangan->panjang_badan }}" class="form-control" id="panjang_badan" name="panjang_badan" placeholder="Panjang Badan">
                  @error('panjang_badan')
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