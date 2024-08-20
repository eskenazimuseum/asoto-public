<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('A Space of Their Own: Content Management Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Manage Artists</p>
                    <p style="font-style: italic;">Coming soon</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Manage Essays</p>
                    <p><a href="/space-of-their-own/essays/create">Create a new essay</a></p>
                    <p><a href="/space-of-their-own/essays/editList">Edit an existing essay</a></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
