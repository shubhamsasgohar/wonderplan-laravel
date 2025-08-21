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

            @if ($errors->has('error'))
                <div class="alert alert-danger">
                    {{ $errors->first('error') }}
                </div>
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="meta_title" class="form-label">Meta Title</label>
                <input type="text" name="meta_title" class="form-control" value="{{ $blog->meta_title }}" placeholder="Enter meta title">
            </div>
            <div class="form-group mb-3">
                <label for="slug" class="form-label">Slug (URL)</label>
                <input type="text" name="slug" class="form-control" value="{{ $blog->slug }}" placeholder="Enter custom slug (optional)">
                <small>Leave unchanged to keep current URL.</small>
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

{{--    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>--}}

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

            // 🔧 Remove cloud/collaboration-only plugins that trigger the error
            removePlugins: [
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType',
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents',
                'PasteFromOfficeEnhanced',
                'CaseChange',
                // If you don't use CKBox/EasyImage cloud storage, remove them too:
                'CKBox', 'EasyImage'
            ],

            // ✅ Allow raw HTML (tags/attrs/styles/classes)
            htmlSupport: {
                allow: [
                    { name: /.*/, attributes: true, classes: true, styles: true }
                ],
                // Optional: keep scripts blocked; allow iframes only if you trust authors
                disallow: [{ name: 'script' }]
            },

            // If you want to explicitly allow iframes, replace the disallow with:
            // htmlSupport: { allow: [
            //   { name: /.*/, attributes: true, classes: true, styles: true },
            //   { name: 'iframe', attributes: ['src','width','height','allow','allowfullscreen','frameborder','loading','referrerpolicy'], classes: true, styles: true }
            // ]},

            mediaEmbed: { previewsInData: true },
            htmlEmbed: { showPreviews: true },

            ckfinder: { uploadUrl: '{{ route("admin.blogs.uploadImage") }}' }
        })
            .then(ed => {
                editorInstance = ed;
                ed.ui.view.editable.element.style.minHeight = '300px';
            })
            .catch(console.error);

        // keep your sync function
        function syncEditorContent() {
            document.querySelector('#content-editor').value = editorInstance.getData();
            if (editorInstance.getData().trim() === '') { alert('Content is required.'); return false; }
            return true;
        }
    </script>


    {{--    <script>--}}
{{--        let editorInstance;--}}

{{--        ClassicEditor--}}
{{--            .create(document.querySelector('#content-editor'), {--}}
{{--                ckfinder: {--}}
{{--                    uploadUrl: '{{ route("admin.blogs.uploadImage") }}'--}}
{{--                }--}}
{{--            })--}}
{{--            .then(editor => {--}}
{{--                editorInstance = editor;--}}
{{--                editor.ui.view.editable.element.style.height = '300px'; // Customize the height--}}
{{--            })--}}
{{--            .catch(error => {--}}
{{--                console.error(error);--}}
{{--            });--}}

{{--        function syncEditorContent() {--}}
{{--            // Sync CKEditor content with the textarea--}}
{{--            document.querySelector('#content-editor').value = editorInstance.getData();--}}

{{--            // Check if CKEditor content is empty--}}
{{--            if (editorInstance.getData().trim() === '') {--}}
{{--                alert('Content is required.');--}}
{{--                return false; // Prevent form submission--}}
{{--            }--}}

{{--            return true; // Allow form submission--}}
{{--        }--}}
{{--    </script>--}}
@endsection
