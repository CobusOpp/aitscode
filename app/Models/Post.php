<?php

namespace App\Models;

use Spatie\Tags\HasTags;
use Maize\Markable\Markable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Post extends Model implements Viewable
{
    use HasFactory, HasTags, InteractsWithViews, Markable, Searchable;

    protected $table = 'posts';

    // protected static $marks = [
    //     Like::class,
    //     Reaction::class,
    // ];


    protected $fillable = [
        'cover_image',
        'title',
        'slug',
        'body',
        'meta_description',
        'published_at',
        'featured',
        'author_id',
        'category_id',
    ];

    protected $searchable = [
        'title',
        'body',
        'tags',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];

    protected $with = ['category', 'author'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


    public static function searchPost($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%' . $search . '%')
            ->orWhere('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
    }

    public function scopeCategory(Builder $query, string $category): Builder
    {
        return $query->where('category_id', $category);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('featured', true);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('created_at')->where('created_at', '<=', new \DateTime());
    }

    public function scopeRecentAsc(Builder $query): Builder
    {
        return $query->orderBy('title', 'asc');
    }

    public function scopeRecentDesc(Builder $query): Builder
    {
        return $query->orderBy('title', 'desc');
    }

}
