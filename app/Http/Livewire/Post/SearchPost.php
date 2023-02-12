<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPost extends Component
{
    use WithPagination;
    public $search  = '';
    public $perPage = 5;
    public $page = 1;

    protected $querystring = [
        'search' => ['except' => ''],
        'page' => ['except' => 1]
    ];

    public function render()
    {

        return view('livewire.post.search-post',[
            'posts' => Post::searchPost($this->search)
                ->simplePaginate($this->perPage)
        ]);
    }
}
