@extends('layouts.dashboard')

@section('container')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3>My Posts</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-8">

                <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new Potst</a>

                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        <a href="/dashboard/posts/{{ $post->slug }}"
                                            class="badge bg-info text-decoration-none">show</a>
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-primary text-decoration-none">edit</a>
                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"class="badge bg-danger d-inline-block border-0 text-decoration-none" onclick="return confirm('Yakin?')">hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
