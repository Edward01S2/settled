<section class="split-video">
  <div class="container mx-auto px-6 md:max-w-none md:px-0 md:py-16 md:pb-0 lg:py-20 lg:pb-8 xl:pb-24">
    <div class="flex flex-col md:flex-row">

      <div class="content-container py-12 text-center md:w-6/12 md:pt-0 md:px-6 md:pb-16 md:text-left md:max-w-384 md:ml-auto lg:w-5/12 lg:inline-block lg:pr-0 lg:max-w-none xl:pb-0">
        <div class="md:pr-12 lg:pl-8 lg:pr-16 xl:pr-24">
          <h2 class="text-c-black-100 font-chronicle text-3xl leading-tight mb-4 lg:text-5xl xl:text-6xl">{!! $title !!}</h2>
          <p class="text-c-gray-500 mb-8 leading-loose lg:text-lg xl:text-xl">{!! $content !!}</p>
          <a class="font-chronicle font-light text-c-gray-400 text-lg hover:text-c-black-100 relative overflow-hidden" data-lity href="{!! $link['url'] !!}">
            {!! $link['title'] !!}
            <div class="overflow-hidden absolute w-full top-0 left-0 mt-4 inline-block">
              <div id="video-link-line" class="h-2px mt-2 w-full bg-c-gray-200"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="relative md:w-6/12 lg:w-7/12 lg:inline-block">
        <div class="aspect-ratio relative">
          <img class="object-cover object-left inset-0 w-full h-full absolute" src="{!! $poster['url'] !!}" alt="">
          <div class="absolute top-0 w-full h-full flex items-center justify-center">
            <a data-lity href="{!! $link['url'] !!}">
              <img class="h-16 w-16 lg:h-20 lg:w-20 transform hover:scale-125 transition duration-300" src="@asset('images/video_icon.svg')" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>