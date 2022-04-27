<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BlogPost;

class Blog extends Component
{
  public $posts;

    public function render()
    {
      $this->posts = BlogPost::all();
      return view('livewire.blog');
            
    }
}
