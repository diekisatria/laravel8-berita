@extends('layouts.auth')

@section('container')
    <div class="card-form">
        <div class="form-card">
            <h1 class="font-1 text-center font-35 mb-5 pb-3" style="color: rgb(84, 84, 84);">Registrasi</h1>
            <div class="auth font-2">
                <form action="/register" method="post">
                    @csrf
                    <div class="mt-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukan name..." required value="{{ old('name') }}">
                        {{-- menampilkan error validasi --}}
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan username..." value="{{ old('username') }}" >
                        {{-- menampilkan error validasi --}}
                        @error('username')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan email..." required value="{{ old('email') }}">
                        {{-- menampilkan error validasi --}}
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan password..."
                            required>
                        {{-- menampilkan error validasi --}}
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="tombol-one">Login</button>
                </form>
                <small class="text-center d-block mt-2">Sudah punya akun? <a href="/login">Login</a></small>
            </div>
        </div>
    </div>
@endsection
