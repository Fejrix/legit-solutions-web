<div wire:poll.2s class="h-[420px] overflow-y-scroll">
    @foreach ($tasks as $task)
    <div class="p-3 mb-3 text-white border-b-4 border-orange-400 bg-[#1f1d1d]   
      @if ($task->Done == 1)
            opacity-30
        @endif">


    <button>
        <img class="w-5 h-5 t-5" src="https://media.discordapp.net/attachments/743751660287033386/964976352447066223/tlacitko.png" alt="">
    </button> 
        <p class="inline font-mono tracking-wide text-orange-400 uppercase">{{$task->Title}}</p>
        <p class="inline px-3 text-neutral-600">{{$task->FromUser}}</p> 
       
        <input value="{{$task->Done}}" class="my-2 text-orange-400 rounded focus:ring-0 focus:ring-offset-0 bg-neutral-800 border-neutral-900 focus:border-neutral-900"  wire:click="ChangeState({{$task->id}})" type="checkbox" 
        
        @if ($task->Done == 1)
            checked ="checked"
        @endif/> 
      
        <input class="w-full mt-2 text-left text-white bg-transparent rounded-md focus:ring-transparent focus:border-neutral-900 " value="{{$task->Description}}"></input>
    </div>              
    @endforeach
</div>
