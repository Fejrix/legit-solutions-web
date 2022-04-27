   <div class="flex flex-row items-center pb-6 text-orange-400">
<div>
    <h2 wire:poll.1000ms class="uppercase">{{now()}}</h2>
    <h2 wire:poll.1000ms class="float-right px-5">Vítej, {{Auth::user()->name}}</h2>
</div>
</div>