<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">            
            <div class="flex">
                <p class="opacity-70">
                    <strong>Created: </strong> {{ $note->created_at->diffForHumans() }}
                </p>
                <p class="opacity-70 ml-8">
                    <strong>Updated at: </strong> {{ $note->updated_at->diffForHumans() }}
                </p>
                
                <a href="{{ route('notes.edit', $note) }}" class="btn-link ml-auto">Edit Note</a>
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h1 class="text-4xl">
                    {{ $note->title }}
                </h1>
                <p class="mt-6 whitespace-pre-wrap">{{ $note->text }}</p>
                {{-- <span class="block mt-4 text-sm opacity-70"> {{ $note->updated_at->diffForHumans() }} </span> --}}
            </div>   
        </div>
    </div>
</x-app-layout>
