<x-layout meta-title="blog" meta-description="Blog Description">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mb-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">BLOG</h1>
    </div>
    <div class="text-center">
        <a href="{{ route('posts.create') }}" class="mx-auto rounded-full bg-sky-400 text-white p-3 text-center">Crear un Post</a>
    </div>
    <aside class="p-4 flex gap-5">
        @isset($posts)
            @foreach ($posts as $post)
                <article style="display: flex; gap: 6px; align-items:center; justify-content:center; flex-direction: column;" class="border rounded p-5 max-w-50 flex-wrap overflow-hidden">
                    <h2 class="mb-3">
                        <a href="{{ route('posts.show', $post) }}">
                            <p class="text-sky-500">
                                {{ $post->title }}
                            </p>
                            <p>
                                {{ $post->description }}
                            </p>
                        </a>
                    </h2>

                    @auth()
                        <div class="flex gap-5 justify-between">
                            <a class="rounded bg-sky-500 text-white p-2 text-center" href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @method('DELETE') @csrf
                                <button class="rounded bg-red-500 text-white p-2 text-center" type="submit">
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        </div>
                    @endauth
                </article>
            @endforeach
        @endisset
    </aside>
</x-layout>
