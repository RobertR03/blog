<x-layout :meta-title="$post->title" meta-description="$post->description">
    <h1>Editar Publicación</h1>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf @method('patch')
        @include('posts.partials.form-posts')
        <input type="submit" value="{{ __('Send') }}">
    </form>
    <a href="{{ route('posts.index') }}">Volver</a>
</x-layout>
