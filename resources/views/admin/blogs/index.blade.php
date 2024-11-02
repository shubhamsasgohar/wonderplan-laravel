
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Blogs</h2>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Add New Blog</a>
        @foreach ($blogs as $blog)
            <div class="card mb-3">
                <div class="card-body">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog->description }}</p>
                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
