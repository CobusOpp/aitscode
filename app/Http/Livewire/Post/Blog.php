<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;

    public $category;
    public $sortBy = 'recentdesc';

    protected $querystring = [
        'category'      => ['except' => ''],
        'sortBy'        => ['except' => 'recentdesc'],
    ];

    public function render()
    {
        $categories = Category::all();

        $posts = Post::orderBy('created_at', 'desc');

        if ($this->category) {
            $posts->category($this->category);
        }

        $posts->{$this->sortBy}('latest');

        return view('livewire.post.blog',[
            'posts'             => $posts->paginate(10),
            'categories'        => $categories,
            'selectedCategory'  => $this->category,
            'selectedSortBy'    => $this->sortBy,

        ]);
    }

    public function toggleCategory($category): void
    {
        $this->category = $this->category !== $category && $this->categoryExists($category) ? $category : null;
    }

    public function sortBy($sort): void
    {
        $this->sortBy = $this->validSort($sort) ? $sort : 'recentDesc';
    }

    public function categoryExists($category): bool
    {
        return Category::where('id', $category)->exists();
    }

    public function validSort($sort): bool
    {
        return in_array($sort, [
            'recentAsc',
            'recentDesc'
        ]);
    }
}
