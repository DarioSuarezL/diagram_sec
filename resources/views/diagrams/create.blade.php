<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagramas') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center p-7">

                <form method="POST" action="{{ route('login') }}" class="bg-slate-100 rounded-lg p-2">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Descripción')" />
                        <x-text-area-input id="description" class="block mt-1 w-full" type="text" name="description" required/>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>



                    <x-primary-button class="mt-3">
                            {{ __('Crear diagrama') }}
                        </x-primary-button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
