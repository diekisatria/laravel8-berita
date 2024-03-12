@extends('layouts.main')

@section('container')
    <!-- hero -->
    <div class="hero">
        <div class="content">
            <div class="in-content">
                <h1 class="font-60 fw-bold text-black font-1 text-shadow-1">
                    Welcome to Our Blog
                </h1>
                <p class="font-20 font-2 fw-300">
                    Berbagi cerita seputar Sekolah, tips siswa, keasyikan dunia
                    sekolahan, hingga <br />
                    fakta menarik lainnya.
                </p>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- search -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="/posts" method="get">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('user'))
                        <input type="hidden" name="user" value="{{ request('user') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search artcile"
                            value="{{ request('search') }}" />
                        <button class="btn primary-bg text-white px-4" type="submit" id="button-addon2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end search -->

    @if ($posts->count())
        <!-- content -->
        <div class="container mb-5">
            <div class="row mb-5">
                <div class="col">
                    <h3 class="text-center">{{ $title }}</h3>
                </div>
            </div>

            <div class="row">

                @foreach ($posts as $post)
                    <div class="col-md-4 my-3">
                        <div class="card shadow-sm">
                            <img src="{{ url('/assets/images/hero.png') }}" class="card-img-top" height="150"
                                alt="..." />
                            <div class="card-body">
                                <h4 class="card-title font-1 font-22">
                                    <a href="/post/{{ $post->slug }}"
                                        class="text-decoration-none text-black fw-600">{{ $post->title }}</a>
                                </h4>
                                <span class="font-2 font-14 fw-400 text-secondary mb-2 d-block">
                                    {{ $post->created_at->diffForHumans() }} ~ {{ $post->category->name }}</span>
                                <p class="card-text text-muted fw-300 font-2 font-14">
                                    {{ $post->excerpt }}
                                </p>
                                <a href="/post/{{ $post->slug }}"
                                    class="btn py-2 px-3 font-2 fw-300 primary-bg text-white">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end content -->
    @else
        <p class="text-center fs-4">No posts found.</p>
    @endif

    <div class="container">
        {{ $post->links() }}
    </div>
@endsection
