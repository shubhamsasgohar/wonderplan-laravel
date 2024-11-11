@extends('layouts.app')

@section('content')

    <style>
        /* Custom CSS to make CKEditor bigger */
        .ck-editor__editable_inline {
            min-height: 300px; /* Set your desired minimum height */
        }
    </style>
    <div class="container">
        <h2>Edit Blog</h2>
        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data" onsubmit="return syncEditorContent()">

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
                <label for="cover_img" class="form-label">Cover Image</label>
                <input type="file" name="cover_img" class="form-control">
                <small>Leave empty if you don't want to update the cover image</small>
            </div>
            <!-- Blog Content -->
            <div class="form-group mb-3">
                <label for="content_data" class="form-label">Content</label>
                <textarea id="content-editor" name="content_data" class="form-control" placeholder="Write your blog content here...">{{$blog->content}}</textarea>
            </div>

            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" name="tags" class="form-control" value="{{ $blog->tags }}" placeholder="Enter tags (comma-separated)">
            </div>

            <div class="mb-3">
                <label for="keywords" class="form-label">Keywords</label>
                <input type="text" name="keywords" class="form-control" value="{{ $blog->keywords }}" placeholder="Enter keywords (comma-separated)">
            </div>

            <div class="mb-3">
                <label for="creator" class="form-label">Creator</label>
                <input type="text" name="creator" class="form-control" value="{{ $blog->creator }}" placeholder="Enter creator name">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        let editorInstance;

        ClassicEditor
            .create(document.querySelector('#content-editor'), {
                ckfinder: {
                    uploadUrl: '{{ route("admin.blogs.uploadImage") }}'
                }
            })
            .then(editor => {
                editorInstance = editor;
                editor.ui.view.editable.element.style.height = '300px'; // Customize the height
            })
            .catch(error => {
                console.error(error);
            });

        function syncEditorContent() {
            // Sync CKEditor content with the textarea
            document.querySelector('#content-editor').value = editorInstance.getData();

            // Check if CKEditor content is empty
            if (editorInstance.getData().trim() === '') {
                alert('Content is required.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
@endsection
