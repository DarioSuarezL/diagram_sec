<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col">

    <script>
        var diagramData = @json($diagram);
        var userData = @json(auth()->user());
    </script>


    <div class="p-6 ">
        <p class="text-3xl text-gray-900 font-bold">{{ __("$diagram->name") }}</p>
        <p id="diagram_id" class="text-sm text-gray-400 font-light hidden">{{$diagram->id}}</p>
        <p class="text-sm text-gray-400 font-light">{{ __("$diagram->description") }}</p>
    </div>
    <div class="p-2 flex flex-col">
        <div class="py-2">
            <button wire:click="$dispatch('invitar')" class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" type="button">Invitar</button>
        </div>

        <div class="flex">

            <div id="myDiagramDiv" class="w-4/5 h-96 bg-slate-200 rounded-lg">
                {{-- Aqui viene el div graficador --}}
            </div>
            <div class="w-1/5 p-2 mx-2 bg-slate-300 rounded-lg">
                <div>
                    <p class="font-bold text-center text-xl">Lista de conectados</p>
                    @forelse ($guests as $guest)
                        <div hidden="true" id="{{$guest->name}}" class="bg-green-300 p-2 border rounded-lg mt-2">
                            <p class="text-sm text-green-800">{{$guest->name}}</p>
                        </div>
                    @empty
                        <div class="text-white bg-red-700 p-2 rounded-lg">
                            {{ __("No tienes invitado") }}
                        </div>
                    @endforelse
                </div>
            </div>

        </div>

    </div>

</div>
