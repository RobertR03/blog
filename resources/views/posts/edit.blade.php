<x-app-layout :meta-title="'Editar: ' . $post->title" meta-description="$post->description">
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Editar Publicación</h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('posts.update', $post) }}" method="post" class="space-y-4 max-w-xl">
                        @include('posts.partials.form-posts')
                        <x-primary-button type="submit">{{ __('Send') }}</x-primary-button>
                        @csrf @method('patch')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
