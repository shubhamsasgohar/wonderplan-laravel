@extends('layouts.app')

@section('content')

    <style>
        /* Custom CSS to make CKEditor bigger */
        .ck-editor__editable_inline {
            min-height: 300px; /* Set your desired minimum height */
        }
    </style>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Create Blog</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                           Manage Blogs
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="col-md-12"> <!--begin::Quick Example-->
            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Create Blog</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Blog Title -->
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter blog title" required>
                        </div>

                        <!-- Blog Description -->
                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Enter a short description" required></textarea>
                        </div>

                        <!-- Cover Image -->
                        <div class="form-group mb-3">
                            <label for="cover_img" class="form-label">Cover Image</label>
                            <input type="file" name="cover_img" class="form-control" required>
                        </div>

                        <!-- Blog Content -->
                        <div class="form-group mb-3">
                            <label for="content_data" class="form-label">Content</label>
                            <textarea id="content-editor" name="content_data" class="form-control" placeholder="Write your blog content here..."></textarea>
                        </div>

                        <!-- Tags -->
                        <div class="form-group mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" name="tags" class="form-control" placeholder="Enter tags (comma-separated)">
                        </div>

                        <!-- Keywords -->
                        <div class="form-group mb-3">
                            <label for="keywords" class="form-label">Keywords</label>
                            <input type="text" name="keywords" class="form-control" placeholder="Enter keywords (comma-separated)">
                        </div>

                        <!-- Creator -->
                        <div class="form-group mb-3">
                            <label for="creator" class="form-label">Creator</label>
                            <input type="text" name="creator" class="form-control" placeholder="Enter creator name">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Include CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content-editor'), {
                height: '500px',
                ckfinder: {
                    uploadUrl: '{{ route("admin.blogs.uploadImage") }}'
                }
            })
            .then(editor => {
                editor.ui.view.editable.element.style.height = '300px'; // Customize the height
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
