<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = ['title', 'description', 'image', 'views'];

    // Scope to fetch records in descending order
    public function scopeOrderByLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    // Increment the view count
    public function incrementView()
    {
        $this->increment('views');
    }

    protected static function boot()
    {
        parent::boot();

        // Delete the image when the news article is deleted
        static::deleting(function ($news) {
            $news->deleteImagesFromDescription();

            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }
        });

        // Delete the old image when the news article is updated
        static::updating(function ($news) {
            if ($news->isDirty('image')) {
                $oldImage = $news->getOriginal('image');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }

    // Remove images referenced in the description
    public function deleteImagesFromDescription()
    {
        $images = $this->extractImages($this->description);

        foreach ($images as $file) {
            $file = str_replace('/storage/', '', parse_url($file, PHP_URL_PATH));
            if (Storage::disk('public')->exists($file)) {
                Storage::disk('public')->delete($file);
            }
        }
    }

    // Extract images from the description
    private function extractImages($content): array
    {
        preg_match_all('/<img[^>]+src="([^">]+)"/', $content, $matches);
        return $matches[1] ?? [];
    }
}
