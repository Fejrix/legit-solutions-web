<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
class TaskList extends Component
{

    public $tasks;
    public function render()
    { 
      $this->tasks = Task::join('users', 'tasks.FromUserID',"=", 'users.id') -> select('tasks.id','users.name as FromUser','ToUserID','Title','Description', 'Done')->where('tasks.ToUserID','=',Auth::user()->id )->orderBy('Done','Asc') ->get();
        return view('livewire.task-list');
    }

    public function ChangeState($id){
   
        $update = Task::find($id);
        $valueToStore;
        if($update->Done == 0)
        $valueToStore = 1;
        else
        $valueToStore = 0;
  
        $update->Done = $valueToStore;
        $update->save();

     
      }
}
