<x-app-layout>

    {{-- Header Section --}}
    <x-header></x-header>

    {{-- Sidebar Section --}}
    <section class="flex">
        <x-sidebar></x-sidebar>

        {{-- Page content part --}}
        {{ $slot }}

    </section>

    <x-scripts></x-scripts>
</x-app-layout>
