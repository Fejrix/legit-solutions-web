<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-orange-600">
            {{ __('API Tokens') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('api.api-token-manager')
        </div>
    </div>
</x-app-layout>
