<section id="galleries">
  <div class="container mx-auto px-6 pb-12 md:pt-4 md:mb-12 lg:px-8">
    <div class="flex flex-wrap flex-col space-y-6 md:grid md:grid-cols-2 md:row-gap-16 md:space-y-0 lg:row-gap-24 xl:row-gap-28">
      @foreach($items as $item)

        <a href="{!! $item['url'] !!}" class="gallery-item block group">
          <div class="gallery-container relative overflow-hidden">
            <img class="relative z-10 object-center object-cover w-full h-108 lg:h-116 xl:h-120 group-hover:scale-110 transform transition duration-500" src="{!! $item['image'] !!}" alt="">
            <div class="absolute bottom-0 bg-c-gray-600 z-20 w-full">
              <h3 class="font-brandon text-white uppercase tracking-wider p-3 md:px-6 lg:text-lg">{!! $item['title'] !!}</h3>
            </div>
          </div>
        </a>

      @endforeach
    </div>
  </div>
</section>