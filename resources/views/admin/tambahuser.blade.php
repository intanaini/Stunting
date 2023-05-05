@extends('layouts.main')

@section('Isi')
<div class="main-panel w-100">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12  stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah user</h4>
              <form method="POST"  action="{{ route('insert-user') }}" >
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">NIK</label>
                  <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK">
                  @error('nik')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                  @error('name')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password">
                  @error('password')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Role</label>
                  <select class="js-example-basic-single w-100" id="role" name="role">
                    <option value="admin">admin</option>
                    <option value="superadmin">superadmin</option>
                    <option value="pakar">pakar</option>
                    <option value="pengguna">pengguna</option>
                  </select>
                  @error('role')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
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
                  <select class="js-example-basic-single w-100" name="id_posyandu" id="id_posyandu">
                    @foreach ($posyandu as $item)
                        
                    <option value="{{ $item->idposyandu }}">{{ $item->nama_posyandu }}</option>
                    @endforeach
                  </select>
                  @error('id_posyandu')
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