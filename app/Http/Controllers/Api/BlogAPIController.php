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
        // Fetch blogs with necessary fields
        $blogs = Blog::all();

        // Transform the blogs to the specified format
        $formattedBlogs = $blogs->map(function ($blog) {
            return [
                'id' => $blog->id,
                'title' => $blog->title,
                'description' => $blog->description,
                'coverURL' => Storage::disk('r2')->url($blog->cover_img),  // Assuming cover_img is stored on R2
                'coverURLLarge' => Storage::disk('r2')->url($blog->cover_img), // Same image as large version
                'createdAt' => $blog->created_at->toIso8601String(),
                'keywords' => $blog->keywords,
                'tags' => collect(explode(',', $blog->tags))->map(function ($tag) {
                    return ['name' => trim($tag)];
                }),
                'creator' => $blog->creator,
                'creatorImage' => $blog->creator_image ? Storage::disk('r2')->url($blog->creator_image) : null,
                'content' => $blog->content,
            ];
        });

        return response()->json($formattedBlogs);
    }
}
