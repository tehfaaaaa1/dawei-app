<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="p-6 w-full border-b border-gray-300 bg-white mb-4">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
            {{ $fitur['title'] }}
        </h2>
        <img src="{{ asset('img/bing chilling.jpg') }}" alt="" class="w-full h-80">
        <p class="my-4 font-light">{{ $fitur['desc'] }}</p>

    </article>

</x-layout>
