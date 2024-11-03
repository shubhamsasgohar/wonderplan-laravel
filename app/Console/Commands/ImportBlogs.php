<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\Blog;

class ImportBlogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:blogs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import blogs from JSON files into the database';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    // The command logic
    // The command logic
    public function handle()
    {
        // Set the path to the storage/posts directory
        $path = storage_path('posts');

        if (!is_dir($path)) {
            $this->error('The specified path is not a directory or does not exist.');
            return 1;
        }

        $files = File::files($path);

        foreach ($files as $file) {
            if ($file->getExtension() !== 'json') {
                continue;
            }

            $content = File::get($file->getRealPath());
            $data = json_decode($content, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->error("Invalid JSON in file: {$file->getFilename()}");
                continue;
            }

            // Generate slug from the title
            $slug = $data['id'];

            // Check if the slug already exists in the database
            if (Blog::where('slug', $slug)->exists()) {
                $this->info("Skipped file: {$file->getFilename()} - Slug already exists");
                continue; // Skip this file
            }

            // Create a new blog entry, handling missing fields
            Blog::create([
                'title' => $data['title'] ?? 'Untitled',
                'slug' => $slug,
                'description' => $data['description'] ?? '',
                'cover_img' => isset($data['coverURL']) ? basename($data['coverURL']) : null,
                'cover_url_large' => isset($data['coverURLLarge']) ? basename($data['coverURLLarge']) : null,
                'created_at' => $data['createdAt'] ?? now(),
                'keywords' => $data['keywords'] ?? '',
                'tags' => isset($data['tags']) ? implode(',', array_column($data['tags'], 'name')) : '',
                'creator' => $data['creator'] ?? 'Unknown',
                'creator_image' => $data['creatorImage'] ?? null,
                'content' => $data['content'] ?? '',
            ]);

            $this->info("Imported blog from file: {$file->getFilename()}");
        }

        return 0;
    }
}
