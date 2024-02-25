<x-app-layout>
    <x-slot name="header">
        <a class="bg-cyan-900 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded" href="{{ route('projects.index') }}">
            Proyectos
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
