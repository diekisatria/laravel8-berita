@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row my-5">
            @foreach ($categories as $category)
                <div class="col-md-4 text-center">
                    <h3><a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-black-50 font-2">#{{ $category->name }}</a></h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection
