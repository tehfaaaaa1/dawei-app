<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="mb-4 max-w-screen-md border-b border-gray-300 bg-white p-6">
            <a href="posts/{{ $post['slug'] }}">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">
                    {{ $post['judul'] }}
                </h2>
            </a>
            <div class="text-base text-gray-300">
                <a href="#">{{ $post['author'] }}</a> &centerdot; {{ $post['date'] }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['content'], 150, '...') }}</p>

            <a href="posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
