<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-2 flex">

                    <div class="p-2 w-1/4">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni exercitationem at voluptatum a, obcaecati cupiditate? Quasi sit cumque commodi dolores eaque perspiciatis molestias illum numquam quae. Laborum, laudantium minima? Amet.</p>
                    </div>
                    <div id="diagramDiv" class="w-3/4 h-96 bg-slate-200">

                    </div>
                </div>

            </div>
        </div>

    </div>

</x-app-layout>

<script src="https://unpkg.com/gojs/release/go-debug.js"></script>


<script>
    const myDiagram = new go.Diagram("diagramDiv",
    {
        "undoManager.isEnabled": true
    });

    myDiagram.model = new go.Model([
        { key: "Alpha" },
        { key: "Beta" }
    ]);

</script>
