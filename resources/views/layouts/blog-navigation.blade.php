<nav class="bg-white px-6 shadow dark:bg-slate-900">
    <ul class="m-8 hidden space-x-8 md:flex">
       <!--  <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
            Inicio
        </x-nav-link> -->
        <li><a class="px-3 py-2 {{ request()->routeIs('home') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('home') }}">Inicio</a></li>
        <li><a class="px-3 py-2 {{ request()->routeIs('posts.*') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('posts.index') }}">Blog</a></li>
        <li><a class="px-3 py-2 {{ request()->routeIs('nosotros') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('nosotros') }}">Nosotros</a></li>
        <li><a class="px-3 py-2 {{ request()->routeIs('contacto') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('contacto') }}">Contacto</a></li>
    </ul>
    <ul id="mobile-menu" class="sm:block md:hidden space-y-1 border-t pb-3 pt-2 dark:border-slate-500">
        <li><a class="px-3 py-2 block rounded-md {{ request()->routeIs('home') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('home') }}">Inicio</a></li>
        <li><a class="px-3 py-2 block rounded-md {{ request()->routeIs('posts.*') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('posts.index') }}">Blog</a></li>
        <li><a class="px-3 py-2 block rounded-md {{ request()->routeIs('nosotros') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('nosotros') }}">Nosotros</a></li>
        <li><a class="px-3 py-2 block rounded-md {{ request()->routeIs('contacto') ? 'text-sky-400' : 'transition-colors dark:text-slate-400 dark:hover:text-sky-500'}}" href="{{ route('contacto') }}">Contacto</a></li>
    </ul>
</nav>
