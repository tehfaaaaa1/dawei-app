<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">Fresh Ice Cream</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Es Krim Da Wei Enak Nyuss</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Rasakan es krim dengan susu sapi pegunungan tibet dan krim spesial dari Beijing :))). Jasa pengiriman cepat dan gratis ongkir, mau kapan lagi? Ayo coba sekarang!</p>
            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
              @foreach ($fitur as $f)
              <div class="relative pl-9">
                <dt class="inline font-semibold text-gray-900">
                  {!! $f['svg'] !!}
                  <a href="fitur/{{ $f['id'] }}" class="hover:text-indigo-600 hover:underline">{{ $f['title'] }}</a>
                </dt>
                <dd class="inline">{{ $f['desc'] }}</dd>
              </div>
              @endforeach

            </dl>
          </div>
        </div>
        <img src="{{ asset('img/bing chilling.jpg') }}" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[50rem] md:-ml-4 lg:-ml-0">
      </div>
    </div>
  </div>
  
</x-layout>