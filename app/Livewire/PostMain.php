<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostMain extends Component{
    public $isOpen=false;
    public $search;

    public function render(){
        $posts=Post::where('title','LIKE','%'.$this->search.'%')->paginate();
        return view('livewire.post-main',compact('posts'));
    }
}
