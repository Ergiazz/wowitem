<x-layout.layouthtml>
    <x-navbar></x-navbar>

    <x-sidebar></x-sidebar>

    <main class="w-full pt-[67px] sm:px-3 ">

        {{ $slot }}

    </main>

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/items.js') }}"></script>
</x-layout.layouthtml>
