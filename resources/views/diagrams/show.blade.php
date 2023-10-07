<x-app-layout>

    @vite(['resources/js/diagramLoad.js', 'resources/js/socket-client.js'])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col">
                <div class="p-6 text-gray-900 font-bold text-lg text-center">
                    {{ __("Diagrama \"\" ") }}
                </div>
                <div class="p-2 flex flex-col">

                    <div class="py-2 px-5 flex justify-between">
                        <div>
                            <button class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" type="button" value="">Añadir nodo</button>
                            <x-text-input placeholder="Ej. Model: User"></x-text-input>
                        </div>
                        <div>
                            <button class="bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button" value="">Guardar</button>
                            <button class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" type="button" value="">Invitar</button>
                        </div>

                    </div>

                    <div class="flex">

                        <div id="diagramDiv" class="w-4/5 h-96 bg-slate-200 rounded-lg">
                            {{-- Aqui viene el div graficador --}}
                        </div>
                        <div class="w-1/5 p-2 mx-2 bg-slate-300 rounded-lg">
                            <div>
                                <p class="font-bold text-center text-xl">Lista de usuarios</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</x-app-layout>
