@extends('layouts.main')

@section('Isi')
    <div class="main-panel w-100">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12  stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Profil</h4>
                            <form method="POST" action="{{ route('update-profil') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ Auth::user()->id_user }}">
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">NIK</label>
                                    <input value="{{ Auth::user()->nik }}" type="text" class="form-control"
                                        id="nik" name="nik" placeholder="nik">
                                    @error('nik')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Nama</label>
                                    <input value="{{ Auth::user()->name }}" type="text" class="form-control"
                                        id="name" name="name">
                                    @error('name')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Password</label>
                                    <input value="" type="password" class="form-control" id="password"
                                        name="password">
                                    @error('password')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">No. HP</label>
                                    <input value="{{ Auth::user()->no_hp }}" type="text" class="form-control"
                                        id="no_hp" name="no_hp">
                                    @error('no_hp')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Role</label>
                                    <input value="{{ Auth::user()->role }}" type="text" class="form-control"
                                        id="role" name="role">
                                    @error('role')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Status</label>
                                    <input value="{{ Auth::user()->status_users }}" type="text" class="form-control"
                                        id="status_user" name="status_users">
                                    @error('status_user')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
