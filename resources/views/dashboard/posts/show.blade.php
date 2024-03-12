@extends('layouts.dashboard')

@section('container')
<div class="row">
    <div class="col">
        <div class="container-fluid" style="background-color: #f1f6f5; position:relative; height:75vh;">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-5 py-5">
                    <span><a href="#" class="text-decoration-none fw-bold font-14 font-1 text-black">#{{ $post->category->name }}</a></span>
                    <h1 class="mt-3 font-1 fw-600 font-35">{{ $post->title }}</h1>

                    <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit"class="btn btn-danger d-inline-block border-0 text-decoration-none" onclick="return confirm('Yakin?')">hapus</button>
                    </form>
                    <img src="{{ url('/assets/images/hero.png') }}" alt="" class="mt-3 shadow"
                        style="height: 45vh; width:100%;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5 py-3 justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="mt-5 font-2 font-16 fw-400 text-muted">
                <div class="mb-3">
                    <span class="fw-500">{{ $post->user->name }} <a href="#" class="text-decoration-none fw-500 text-black"> :
                            {{ $post->created_at->diffForHumans() }}</a></span>
                </div>
                {!! $post->body !!}
            </div>
        </div>
    </div>
</div>
@endsection
