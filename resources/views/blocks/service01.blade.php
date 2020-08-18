<section id="{!! $block->block->id !!}">
  <div class="container mx-auto px-6 py-8 md:pb-16 lg:px-8">
    <div class="flex flex-col space-y-8 md:flex-row md:space-y-0 md:space-x-12 lg:space-x-16 xl:space-x-24">
      <div class="md:w-1/2">
        <img class="h-20 mx-auto mb-4 lg:h-24 xl:h-28" src="{!! $logo['url'] !!}" alt="">
        <h4 class="uppercase font-brandon tracking-wider text-c-gray-600 text-sm text-center mb-8 lg:text-base">{!! $subtitle !!}</h4>
        <div class="service-content leading-7 opacity-75 lg:text-lg xl:leading-9">
          {!! $content !!}
        </div>
      </div>
      <div class="md:w-1/2">
        <img class="object-cover object-center w-full h-auto" src="{!! $image['url'] !!}" alt="">
        <div class="py-8 md:py-16 lg:py-20 xl:max-w-md">
          <img class="h-8 mb-4" src="{!! $sublogo['url'] !!}" alt="">
          <div class="leading-7 opacity-75 lg:text-lg xl:leading-9">{!! $subtext !!}</div>
        </div>
      </div>
    </div>   
  </div>
</section>    