<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <article class="p-6 w-full border-b border-gray-300 bg-white mb-4">
    <a href="posts/{{ $post['slug'] }}">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
        {{ $post['judul'] }}
      </h2>
    </a>
    <img src="{{ asset('img/bing chilling.jpg') }}" alt="" class="w-full h-80">
    <div class="text-base text-gray-400">
      <a href="#">{{ $post['author'] }}</a> &centerdot; {{ $post['date'] }}
    </div>
    <p class="my-4 font-light">{{ $post['content'] }}</p>
    
  </article>
  
</x-layout>