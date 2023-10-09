{{-- <script src="{{ asset('js/diagramLoader.js') }}"></script> --}}
<x-app-layout>

    @vite(['resources/js/socket-client.js', 'resources/js/diagramLoader.js'])
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
                            <button class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" type="button">Añadir nodo</button>
                            <x-text-input placeholder="Ej. Model: User"></x-text-input>
                        </div>
                        <div>
                            <button class=" bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button">Guardar</button>
                            <button class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" type="button">Invitar</button>
                        </div>

                    </div>

                    <div class="flex flex-col md:flex-row">

                        <div id="myDiagramDiv" class="md:w-4/5 h-96 bg-slate-200 rounded-lg">


                            {{-- Aqui viene el div graficador --}}
                        </div>


                        <div class="md:w-1/5 p-2 mx-2 bg-slate-300 rounded-lg">
                            <div>
                                <p class="font-bold text-center text-xl">Lista de usuarios</p>
                            </div>
                        </div>
                    </div>


                    <textarea id="mySavedModel" hidden="true" type="text" name="DiagramJSON">
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
                      {"from":"Controller", "to":"Controller", "text":"validate()", "time":3},
                      {"from":"Controller", "to":"Model", "text":"createUser()", "time":5},
                      {"from":"Model", "to":"Controller", "text":"return()", "time":6},
                      {"from":"Controller", "to":"View", "text":"returnView()", "time":7}

                       ]}
                    </textarea>


                </div>

            </div>
        </div>

    </div>

</x-app-layout>


