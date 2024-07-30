<x-blog-layout :meta-title="$post->title" meta-description="$post->description">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <a href="{{ route('posts.index') }}">Volver</a>
</x-blog-layout>
