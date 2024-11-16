<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class BlogAPIController extends Controller
{
    public function index()
    {
        // Fetch blogs with necessary fields, sorted by created_at in descending order
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        // Transform the blogs to the specified format
        $formattedBlogs = $blogs->map(function ($blog) {
            return [
                'id' => $blog->id,
                'slug' => $blog->slug,
                'title' => $blog->title,
                'metaTitle' => $blog->meta_title,
                'description' => $blog->description,
                'coverURL' => Storage::disk('r2')->url($blog->cover_img),
                'coverURLLarge' => Storage::disk('r2')->url($blog->cover_img),
                'createdAt' => $blog->created_at->toIso8601String(),
                'tags' => collect(explode(',', $blog->tags))->map(function ($tag) {
                    return ['name' => trim($tag)];
                }),
                'keywords' => $blog->keywords,
            ];
        });

        return response()->json($formattedBlogs);
    }

    // API to get a single blog by slug
    public function show($slug)
    {
        // Find the blog by slug
        $blog = Blog::where('slug', $slug)->first();

        if (!$blog) {
            return response()->json(['error' => 'Blog not found'], 404);
        }

        // Format the blog details
        $formattedBlog = [
            'id' => $blog->id,
            'slug' => $blog->slug,
            'title' => $blog->title,
            'metaTitle' => $blog->meta_title,
            'description' => $blog->description,
            'coverURL' => Storage::disk('r2')->url($blog->cover_img),
            'coverURLLarge' => Storage::disk('r2')->url($blog->cover_img),
            'createdAt' => $blog->created_at->toIso8601String(),
            'tags' => collect(explode(',', $blog->tags))->map(function ($tag) {
                return ['name' => trim($tag)];
            }),
            'keywords' => $blog->keywords,
            'creator' => $blog->creator,
            'creatorImage' => $blog->creator_image ? Storage::disk('r2')->url($blog->creator_image) : null,
            'content' => $blog->content,
        ];

        return response()->json($formattedBlog);
    }
}
