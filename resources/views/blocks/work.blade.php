<section id="case-study" class="section xl:overflow-hidden">
  <div class="pt-12 pb-8 md:pb-4 lg:pb-12 lg:pt-16">
    <div class="">
      <div class="overflow-hidden">
        <div class="container mx-auto px-6 lg:px-8">
          <div class="mb-8 md:flex md:items-center md:justify-between lg:mb-12">
            <h2 class="title leading-none inline-block align-bottom text-5xl w-full md:w-auto lg:text-6xl">{!! $title !!}</h2>
            <a class="inline-block border-b border-c-gray-400 md:flex-shrink-0 lg:text-lg" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
          </div>
        </div>
      </div>

      <div class="overflow-hidden relative">
        {{-- <div class="color-swipe-study absolute bg-c-black-100 w-full h-full z-10 md:block"></div> --}}
        <div class="container px-6 lg:px-8 mx-auto relative">
          <div class="work-carousel w-full flickity-resize">
            @foreach($galleries as $item)

              <div class="slide w-9/12 mb-4 pb-0 ml-8 flex flex-col md:w-2/5 md:pb-0 md:ml-20 md:mb-8 lg:w-1/3 xl:w-1/4">
                <a href="{!! $item['url'] !!}">
                  <img class="object-cover w-full h-72 mb-4 md:h-96 md:mb-8" src="{!! $item['image'] !!}" alt="">
                </a>
                <div class="work-content pb-12 w-3/4 md:w-4/5 md:pb-8">
                  <div class="text-white bg-c-blue-100 inline-block px-4 uppercase font-brandon py-1 text-xs mb-4" style="background-color: {!! $item['terms']['color'] !!}">{!! $item['terms']['name'] !!}</div>
                  <a href="{!! $item['url'] !!}">
                    <h4 class="text-black-100 text-xl mb-4 md:leading-snug md:text-2xl lg:pr-0 hover:opacity-50 transition duration-300">{!! $item['title'] !!}</h4>
                  </a>
                  <a class="text-c-gray-200 uppercase font-brandon text-xs tracking-wider hover:text-c-gray-400" href="{!! $item['url'] !!}">Gallery View</a>
                </div>
              </div>

            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>