<div class="flex flex-col items-center h-screen pt-24">
<div class="box-content border-[2px] border-neutral-900 w-full px-6 py-6 mt-6 overflow-hidden rounded-lg shadow-md bg-[#1e1e1e] sm:max-w-md"> 
    <h1 class="text-2xl font-semibold text-orange-400 underline uppercase underline-offset-4">Nadcházející úkoly</h1>


 @livewire('welcome-dashboard')
    @livewire('task-list')

    <button type="button" id="showFormBtn" data-modal-toggle="defaultModal">
        <img class="w-10 h-10" src="https://media.discordapp.net/attachments/743751660287033386/964976352447066223/tlacitko.png" alt="">
    </button>


</div>
@livewire('add-task')
</div>

</div>


