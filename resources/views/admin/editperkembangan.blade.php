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
                  <select class="js-example-basic-single w-100" name="idbalita" id="idbalita">
                    @foreach ($balita as $item)
                        
                    <option value="{{ $item->idbalita }}">{{ $item->nama_balita }}</option>
                    @endforeach
                  </select>
                  @error('idbalita')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Panjang Badan</label>
                  <input type="number" value="{{ $perkembangan->panjang_badan }}" class="form-control" id="panjang_badan" name="panjang_badan" placeholder="Panjang Badan>
                  @error('panjang_badan')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Umur</label>
                  <input type="number" value="{{  $perkembangan->umur }}" class="form-control" id="umur" name="umur" placeholder="umur">
                  @error('umur')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="js-example-basic-single w-100" id="status" name="status">
                      <option value="masuk">Masuk</option>
                      <option value="tahap">Tahap</option>
                      <option value="keluar">Keluar</option>
                    </select>
                    @error('status')
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