{{--COMENTRARIO EN .blade--}}
{{--@component('components.layout')--}}




<x-layout meta-title="Home" meta-description="Home Description">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">INICIO</h1>
    </div>
    <x-slot:sidebar>
        HOME SIDEBAR CONTENT
    </x-slot:sidebar>
</x-layout>



{{--@endcomponent--}}