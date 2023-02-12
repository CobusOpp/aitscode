<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;
    public $tags;

    public function mount (Post $post)
    {
    $this->post = $post;
    views($post)->cooldown(15)->record();


    }

        public function render()
    {
        return view('livewire.post.show-post');
    }
}
