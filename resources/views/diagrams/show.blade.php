<x-app-layout>

    @vite(['resources/js/diagramLoader.js'])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <livewire:diagram-live :guests="$guests" :diagram="$diagram"/>
        </div>

    </div>

</x-app-layout>
