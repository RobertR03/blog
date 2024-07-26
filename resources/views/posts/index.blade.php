<x-layout meta-title="blog" meta-description="Blog Description">
    <h1>blog</h1>
    <a href="{{ route('posts.create') }}">Crear un Post</a>
    @isset($posts)
        @foreach ($posts as $post)
            <div style="display: flex; gap: 6px; align-items:baseline;">
                <h2>
                    <a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <a href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @method('DELETE') @csrf
                    <button type="submit">
                        {{ __('Delete') }}
                    </button>
                </form>
            </div>
        @endforeach
    @endisset
</x-layout>
