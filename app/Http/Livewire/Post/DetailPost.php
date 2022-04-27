<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class DetailPost extends Component
{
    public $postId;
    public $post;
    public function render()
    {
        $this->post = Post::with('user')->find($this->postId);
        return view('livewire.post.detail-post');
    }
}
