<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="bg-white py-24 sm:py-32 shadow-lg">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
        @foreach ($contact as $c)
        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
          <dt class="text-base leading-7 text-gray-600">Alamat</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $c['alamat'] }}</dd>
        </div>
        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
          <dt class="text-base leading-7 text-gray-600">Email</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl overflow-x-auto">{{ $c['email'] }}</dd>
        </div>
        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
          <dt class="text-base leading-7 text-gray-600">Nomor Telpon</dt>
          <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $c['no_tlp'] }}</dd>
        </div>
        @endforeach
      </dl>
    </div>
  </div>
</x-layout>