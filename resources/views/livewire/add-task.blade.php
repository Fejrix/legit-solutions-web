<div wire:ignore.self class="fixed z-10 inset-0 hidden m-auto" id="overlay" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class=" flex items-end justify-center pt-4 px-4 pb-20 text-center  sm:p-0">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

 
    <div class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class=" sm:items-start">
          <div class="mx-auto  items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
         
           
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Přidat úkol</h3>
            <form wire:submit.prevent="addtask">
          
            <div class="mt-2">
              <p class="text-sm text-gray-500">Název úkolu</p>
              <input class="text-sm text-gray-500 bg-green-500" wire:model="title" type="textbox"/>
                <p class="text-sm text-gray-500 w-20 shadow-red-400/100">Popis úkolsadddddasdasdasdaaaaaaaaaaaaaaaaasdadsdu</p>
                <input class="text-sm text-gray-500 bg-green-500 shadow-red-400/100" wire:model="description"  type="textbox"/>
                 <p class="text-sm text-gray-500 w-20">Komu:</p>
                 <select class="form-control bg-green-500 shadow-red-400" wire:model="touser">
                    <option value="" hidden selected>Vyber uživatele</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
          </div>
          
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6">
        <button id="closeBtn" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Zrušit</button>
  
        <button id="submit" type="submit"  class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Přidat</button>

      </div>
</form>
    </div>

    <script>

$('#showFormBtn').click(()=> {
overlay.classList.remove('hidden')
overlay.classList.add('flex')
})

$('#closeBtn').click(()=> {
overlay.classList.add('hidden')

})

$('#submit').click(()=> {
overlay.classList.add('hidden')

})
</script>
  </div>

  