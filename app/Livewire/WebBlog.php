<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

class WebBlog extends Component
{
    #[Layout('layouts.index')]
    public function render(){
        $posts=Post::latest('id')->paginate(6);
        return view('livewire.web-blog',compact('posts'));
    }
}
