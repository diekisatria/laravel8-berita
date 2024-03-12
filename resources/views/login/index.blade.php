@extends('layouts.auth')

@section('container')
    <div class="card-form">
        <div class="form-card">
            <h1 class="font-1 text-center font-35 mb-5 pb-3" style="color: rgb(84, 84, 84);">Masuk</h1>
            {{-- tampilkan pesan flashdata --}}
            @if (session()->has('success'))
                <div class="alert bg-success text-white">{{ session('success') }}</div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert bg-danger text-white">{{ session('loginError') }}</div>
            @endif
            <div class="auth font-2">
                <form action="/login" method="post">
                    @csrf
                    <div class="mt-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan email..." required
                            autofocus value="{{ old('email') }}">
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
                <small class="text-center d-block mt-2">Belum punya akun? <a href="/register">Register</a></small>
            </div>
        </div>
    </div>
@endsection
