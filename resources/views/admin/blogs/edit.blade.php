
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Blog</h2>
        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3" required>{{ $blog->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="cover_url" class="form-label">Cover URL</label>
                <input type="url" name="cover_url" class="form-control" value="{{ $blog->cover_url }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea id="content-editor" name="content" class="form-control" required>{{ $blog->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
