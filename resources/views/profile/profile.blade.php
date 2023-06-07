@extends('layouts.main')

@section('Isi')
    <div class="main-panel w-100">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12  stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Profil</h4>

                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">NIK</label>
                                <input value="{{ Auth::user()->nik }}" type="text" class="form-control" id="nik"
                                    name="nik" readonly>
                                @error('')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Nama</label>
                                <input value="{{ Auth::user()->name }}" type="text" class="form-control" id="name"
                                    name="name" readonly>
                                @error('')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Password</label>
                                <input value="********" type="password" class="form-control" id="password" name="password"
                                    readonly>
                                @error('')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">No. HP</label>
                                <input value="{{ Auth::user()->no_hp }}" type="text" class="form-control" id="no_hp"
                                    name="no_hp" readonly>
                                @error('')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Role</label>
                                <input value="{{ Auth::user()->role }}" type="text" class="form-control" id="role"
                                    name="role" readonly>
                                @error('')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Status</label>
                                <input value="{{ Auth::user()->status_users }}" type="text" class="form-control"
                                    id="status_user" name="status_user" readonly>
                                @error('')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <a href="{{ route('edit-profil', Auth::user()->id_user) }}" class="btn btn-primary me-2">Edit</a>
                            <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>


                        </div>
                    </div>
                </div>
            @endsection
