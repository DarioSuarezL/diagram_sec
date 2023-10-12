<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col">
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

            <textarea id="DiagramJSON" hidden="true" type="text">
                {
                "class": "go.GraphLinksModel",
                "nodeDataArray": [
              {"key":"Actor", "text":"Actor: Admin", "isGroup":true, "loc":"0 0", "duration":9},
              {"key":"View", "text":"View: Login", "isGroup":true, "loc":"100 0", "duration":9},
              {"key":"Controller", "text":"Controller: LoginController", "isGroup":true, "loc":"250 0", "duration":9},
              {"key":"Model", "text":"Model: UserModel", "isGroup":true, "loc":"400 0", "duration":9},
              {"group":"View", "start":1, "duration":2},
              {"group":"Controller", "start":2, "duration":3},
              {"group":"Model", "start":5, "duration":1},
              {"group":"Controller", "start":6, "duration":1},
              {"group":"View", "start":7, "duration":1}
               ],
                "linkDataArray": [
              {"from":"Actor", "to":"View", "text":"Iniciar sesión", "time":1},
              {"from":"View", "to":"Controller", "text":"login()", "time":2},
              {"from":"Controller", "to":"Model", "text":"createUser()", "time":5},
              {"from":"Model", "to":"Controller", "text":"return()", "time":6},
              {"from":"Controller", "to":"View", "text":"returnView()", "time":7}
               ]}
               {{-- {{$diagram->content}} --}}
            </textarea>

        </div>

    </div>

</div>