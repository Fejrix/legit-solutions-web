<?php

namespace App\Http\Livewire;
use App\Models\BlogPost;
use Livewire\Component;

class Post extends Component
{

    public $post;


    
    public function render()
    {
        $this->post = BlogPost::find($this->post);
        return view('livewire.post');


    }
    public function mount($post)
    {

        $this->post =$post;


    }


  

}
