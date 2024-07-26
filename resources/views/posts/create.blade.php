<x-layout meta-title="Post" meta-description="{{ __('Create a new Post') }}">
    <h1>{{ __('Create a new Post') }}</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @include('posts.partials.form-posts')
        <br>
        <input type="submit" value="{{ __('Send') }}">
    </form>
</x-layout>
