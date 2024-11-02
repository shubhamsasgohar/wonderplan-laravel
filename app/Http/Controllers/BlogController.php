<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

        // Validate the input fields
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover_img' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Expect an image file
            'content_data' => 'required|string',
            'tags' => 'nullable|string',
            'keywords' => 'nullable|string',
            'creator' => 'nullable|string|max:255',
            'creator_image' => 'nullable|string|max:255',
        ]);

            // Convert cover image to WebP format
            if ($request->hasFile('cover_img')) {
                $file = $request->file('cover_img');

                // Generate a unique, slugged filename for the WebP image
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $uniqueFilename = Str::slug($originalFilename) . '-' . uniqid() . '.webp';

                // Convert the image to WebP format
                $webpImage = Image::make($file)->encode('webp', 90); // Adjust quality as needed

                // Store the WebP image in Cloudflare R2 with a unique name
                Storage::disk('r2')->put($uniqueFilename, (string) $webpImage);

                // Save the file path in the database if needed
                $coverImagePath = $uniqueFilename;
            }
            // Attempt to save the blog data to the database
            $blog = Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'cover_img' => $coverImagePath, // Path in R2
                'content' => $request->content_data,
                'tags' => $request->tags, // Save tags as a comma-separated string
                'keywords' => $request->keywords,
                'creator' => $request->creator,
                'creator_image' => $request->creator_image,
            ]);

            // Redirect with success message if blog was saved successfully
            return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully');
        } catch (\Illuminate\Validation\ValidationException $e) {

            // Redirect back with error message
            return redirect()->back()->with('error', 'Failed to create the blog. Please try again.');
        }
        // Redirect back to the blog index or any other desired route with a success message
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover_img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tags' => 'nullable|string',
            'keywords' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        // Update the cover image if a new one is uploaded
        if ($request->hasFile('cover_img')) {
            $file = $request->file('cover_img');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'r2');  // Assuming R2 storage

            // Update cover_img path in the database
            $blog->cover_img = $filename;
        }

        // Update other fields
        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'keywords' => $request->keywords,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }

    public function uploadImage(Request $request)
    {
        // Validate the request to ensure the file is an image
        $request->validate([
            'upload' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Get the uploaded file from the request
        $file = $request->file('upload');

        // Generate a unique filename for the WebP image
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $webpFilename = Str::slug($originalFilename) . '-' . uniqid() . '.webp';

        // Convert the image to WebP format using Intervention Image
        $webpImage = Image::make($file)->encode('webp', 90); // Adjust quality as needed

        // Store the WebP image in Cloudflare R2
        Storage::disk('r2')->put($webpFilename, (string) $webpImage);

        // Generate the URL for the stored WebP image
        $url = Storage::disk('r2')->url($webpFilename);

        // Return the URL in a CKEditor-compatible JSON format
        return response()->json([
            'url' => $url,
        ]);
    }
}