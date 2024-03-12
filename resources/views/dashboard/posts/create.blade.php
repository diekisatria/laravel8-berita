@extends('layouts.dashboard')

@section('container')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3>Create New Posts</h3>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-8">
                <form method="post" action="/dashboard/posts">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value={{ old('title') }}>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug"
                            value="{{ old('slug') }}">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Cetegory</label>
                        <select name="category_id" id="category" class="form-select" required>\
                            @foreach ($categories as $category)
                                @if (old('category_id') == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
