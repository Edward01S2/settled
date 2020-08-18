<section id="{!! $block->block->id !!}">
  <div class="container mx-auto px-6 pb-12 pt-4 md:pb-16 lg:px-8">
    <div class="flex flex-col md:flex-row md:space-x-12 md:space-x-reverse lg:space-x-16 lg:space-x-reverse xl:space-x-24 xl:space-x-reverse">
      <div class="md:w-1/2 md:order-2">
        <img class="h-16 mx-auto mb-4 xl:h-20" src="{!! $logo['url'] !!}" alt="">
        <h4 class="uppercase font-brandon tracking-wider text-c-gray-600 text-sm text-center mb-8 lg:text-base">{!! $subtitle !!}</h4>
        <div class="service-grid flex flex-wrap justify-center mb-8">
          @foreach($services as $item)
            <div class="item flex flex-col py-4 pr-6 md:pr-6 xl:pr-10 xl:py-8">
              {{-- <div class="h-2 w-2 transform rotate-45 mr-1" style="background-color: {!! $item['color'] !!}"></div> --}}
              <img class="h-2 w-auto mr-auto" src="{!! $main['url'] !!}" alt="">
              <div class="font-brandon uppercase font-medium xl:text-lg" style="color: {!! $item['color'] !!}">{!! $item['text'] !!}</div>
            </div>
          @endforeach
        </div>
        <div class="mb-8 leading-7 opacity-75 lg:text-lg xl:leading-9">
          {!! $content !!}
        </div>
      </div>
      <div class="md:w-1/2 md:order-1">
        <img class="object-cover object-center w-full h-auto mb-4 md:mb-12" src="{!! $image['url'] !!}" alt="">
        <div>
          <div class="service-content opacity-75 leading-7 lg:text-lg xl:leading-9">{!! $subtext !!}</div>
        </div>
      </div>
    </div>
  </div>
</section>