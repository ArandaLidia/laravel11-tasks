<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl text-purple-800">Bienvenidos al gestor de tareas {{Auth::user()->name}}</h1>
                    @foreach ($task as $task)
                    <p class="mt-4 text-lg text-purple-600">
                    {{$task ->title}}
                    </p>
                    <p>
                        {{$task->description}}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
