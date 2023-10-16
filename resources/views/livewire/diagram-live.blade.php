<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col">

    <script>
        var diagramData = @json($diagram);
    </script>


    <div class="p-6 ">
        <p class="text-3xl text-gray-900 font-bold">{{ __("$diagram->name") }}</p>
        <p id="diagram_id" class="text-sm text-gray-400 font-light hidden">{{$diagram->id}}</p>
        <p class="text-sm text-gray-400 font-light">{{ __("$diagram->description") }}</p>
    </div>
    <div class="p-2 flex flex-col">
        <div class="py-2 flex gap-2">
            <button wire:click="$dispatch('invitar')" class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" type="button"
                value="">Invitar</button>
            <button class="bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button"
                value="">Guardar</button>
        </div>

        <div class="flex">

            <div id="myDiagramDiv" class="w-4/5 h-96 bg-slate-200 rounded-lg">
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
