<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h1 class="text-3xl">
                    {{ $note->title }}
                </h1>
                <p class="mt-2">
                    {{ $note->text }}
                </p>
                {{-- <span class="block mt-4 text-sm opacity-70"> {{ $note->updated_at->diffForHumans() }} </span> --}}
            </div>   
        </div>
    </div>
</x-app-layout>
