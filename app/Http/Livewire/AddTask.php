<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
class AddTask extends Component
{

    public $mytime;
    public $users;
    public $title;
    public $touser;
    public $description;
    public $done;
    public $tasks;
    public function render()
    {
        $this->users = User::all();
        $this->title = 'funguje';
        return view('livewire.add-task');
    }


    public function addtask(){
     
        Task::create([
            'FromUserID' => Auth::user()->id,
            'ToUserID' => $this->touser,
            'Title' => $this->title,
            'Description' => $this->description
          
        ]);

        $this->tasks = Task::join('users', 'tasks.FromUserID',"=", 'users.id') -> select('tasks.id','users.name as FromUser','ToUserID','Title','Description', 'Done')->where('tasks.ToUserID','=',Auth::user()->id ) ->get();
     
        
         return view('livewire.task-list');
       
      }
}
