<?php

namespace App\Http\Livewire\Home;

use App\Models\Fun;
use App\Models\Post;
use App\Models\Project;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $projects = Project::orderBy('created_at', 'desc') -> paginate(3);
        $funs = Fun::orderBy('created_at', 'desc')->take(4)->get();

        return view('livewire.home.index', [
            'posts' => $posts,
            'projects' => $projects,
            'funs' => $funs
        ]);
    }
}
