<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  @foreach ($posts as $post)
  <article class="p-6 max-w-screen-md border-b border-gray-300 bg-white mb-4">
    <a href="posts/{{ $post['id'] }}">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
        {{ $post['judul'] }}
      </h2>
    </a>
    <div class="text-base text-gray-300">
      <a href="#">{{ $post['author'] }}</a> &centerdot; {{ $post['date'] }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['content'], 150, '...') }}</p>
    
    <a href="posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
  </article>
  @endforeach
</x-layout>