<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Add a filter scope for searching, category, and author
    public function scopeFilter(
        $query,
        array $filters
    ) {
        if ($search = $filters['search'] ?? false) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('body', 'like', '%' . $search . '%');
            });
        }

        if ($category = $filters['category'] ?? false) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        }

        if ($author = $filters['author'] ?? false) {
            $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        }
    }
}
