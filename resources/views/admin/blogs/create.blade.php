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


                        @if ($errors->has('error'))
                            <div class="alert alert-danger">
                                {{ $errors->first('error') }}
                            </div>
                        @endif

                        <!-- Blog Title -->
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter blog title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" placeholder="Enter meta title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="slug" class="form-label">Slug (URL)</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter custom slug (optional)">
                            <small>Leave empty to generate from the title.</small>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/super-build/ckeditor.js"></script>
    <script>
        let editorInstance;

        CKEDITOR.ClassicEditor.create(document.querySelector('#content-editor'), {
            toolbar: {
                items: [
                    'heading','|',
                    'bold','italic','underline','strikethrough','|',
                    'link','bulletedList','numberedList','outdent','indent','|',
                    'blockQuote','insertTable','imageUpload','mediaEmbed','|',
                    'htmlEmbed','code','codeBlock','|','sourceEditing','undo','redo'
                ]
            },

            // Remove cloud/collaboration plugins to avoid channelId errors
            removePlugins: [
                'RealTimeCollaborativeComments','RealTimeCollaborativeTrackChanges','RealTimeCollaborativeRevisionHistory',
                'PresenceList','Comments','TrackChanges','TrackChangesData','RevisionHistory',
                'Pagination','WProofreader','MathType','SlashCommand','Template','DocumentOutline',
                'FormatPainter','TableOfContents','PasteFromOfficeEnhanced','CaseChange',
                'CKBox','EasyImage'
            ],

            // Allow raw HTML to round-trip (tags/attrs/classes/styles)
            htmlSupport: {
                allow: [{ name: /.*/, attributes: true, classes: true, styles: true }],
                // keep scripts blocked by default; enable iframes only if you trust authors
                disallow: [{ name: 'script' }]
            },

            // If you want to explicitly allow iframes, replace disallow above with:
            // htmlSupport: { allow: [
            //   { name: /.*/, attributes: true, classes: true, styles: true },
            //   { name: 'iframe', attributes: ['src','width','height','allow','allowfullscreen','frameborder','loading','referrerpolicy'], classes: true, styles: true }
            // ]},

            mediaEmbed: { previewsInData: true },
            htmlEmbed: { showPreviews: true },

            // Your upload endpoint
            ckfinder: {
                uploadUrl: '{{ route("admin.blogs.uploadImage") }}?token={{ csrf_token() }}'
            }
        })
            .then(ed => {
                editorInstance = ed;
                ed.ui.view.editable.element.style.minHeight = '300px';
            })
            .catch(console.error);

        function syncEditorContent() {
            document.querySelector('#content-editor').value = editorInstance.getData();
            if (editorInstance.getData().trim() === '') {
                alert('Content is required.');
                return false;
            }
            return true;
        }
    </script>


    {{--    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        ClassicEditor--}}
{{--            .create(document.querySelector('#content-editor'), {--}}
{{--                height: '500px',--}}
{{--                ckfinder: {--}}
{{--                    uploadUrl: '{{ route("admin.blogs.uploadImage") }}?token={{ csrf_token() }}'--}}
{{--                }--}}
{{--            })--}}
{{--            .then(editor => {--}}
{{--                editor.ui.view.editable.element.style.height = '300px'; // Customize the height--}}
{{--            })--}}
{{--            .catch(error => {--}}
{{--                console.error(error);--}}
{{--            });--}}
{{--    </script>--}}
@endsection
