<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagramas') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4">
                    <a class="bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{route('diagram.create')}}">Crear diagrama</a>
                </div>
                <div class="p-6 text-gray-900 font-bold">
                    {{ __("Mis diagramas") }}
                </div>

                <div class="p-6 text-gray-900 font-bold">
                    {{ __("Invitaciones") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
