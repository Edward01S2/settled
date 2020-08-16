<section id="{!! $block->block->id !!}">
  <div class="container mx-auto px-6 py-12 md:py-16 lg:px-8 lg:py-20">
    @if($pre)
      <div class="font-brandon font-medium text-c-gray-200 uppercase text-center mb-4 tracking-wider md:text-left md:text-lg md:mb-6 lg:mb-8">{!! $pre !!}</div>
    @endif
    <div class="grid-rows-{!! $count !!} grid gap-6 lg:gap-8">
      @foreach($items as $item)
        @if($item['link']) <a href="{!! $item['link']['url'] !!}" class="group"> @endif
        <div class="item relative flex items-center text-center overflow-hidden {!! $item['align'] !!}">
          <div class="item-container relative z-30 px-6 py-12 md:w-1/2 md:py-20 lg:w-1/2 lg:px-16 xl:w-5/12">
            @if($item['logo'])
              <img class="mx-auto h-16 mb-4 lg:mb-8 xl:h-20" src="{!! $item['logo']['url'] !!}" alt="">
            @endif

            @if($item['title'])
              <h3 class="font-brandon text-white uppercase text-xl mb-2 lg:text-2xl">{!! $item['title'] !!}</h3>
            @endif

            <p class="text-white lg:text-lg xl:text-xl">{!! $item['content'] !!}</p>

            @if($item['link'])
              <div class="link-text font-brandon font-bold text-c-tan-100 uppercase mt-4 md:mt-8">{!! $item['link']['title'] !!}</div>
            @endif
          </div>
          <img class="absolute inset-0 w-full h-full z-20 object-cover object-center group-hover:scale-105 transform transition duration-500" src="{!! $item['bg']['url'] !!}" alt="">
          <div class="overlay absolute inset-0 w-full h-full z-20"></div>
        </div>
        @if($item['link']) </a> @endif
      @endforeach
    </div>
  </div>
</section>

{{-- @dump($block) --}}