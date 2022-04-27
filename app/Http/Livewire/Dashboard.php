<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{



   public $check =[];
    public function render()
    {
     
      return view('livewire.dashboard');
            
    }


 
}
