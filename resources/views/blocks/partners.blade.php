<section>
  <div class="container mx-auto px-6 py-12 md:py-16 md:pb-32 lg:px-8">
    <div class="text-center">
      <div class="uppercase font-brandon font-medium text-c-gray-200 mb-8 tracking-wider md:text-lg">{!! $title !!}</div>
      <div>
        <div class="flex flex-wrap justify-center items-center">
          @foreach($companies as $comp)
            <a class="inline-block px-3 pb-8 w-full md:w-1/3 md:px-0 md:pb-0" href="{!! $comp['url'] !!}">
              <img class="mx-auto w-3/4 md:w-full md:px-8 lg:px-12 xl:px-16 hover:scale-105 transform transition duration-300" src="{!! $comp['logo']['url'] !!}" alt="">
            </a>
            {{-- @dump($comp) --}}
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
