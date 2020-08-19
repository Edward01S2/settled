@if($slides)
<section id="{!! $block->block->id !!}">
  <div class="hero-slider w-full h-full">
    @foreach($slides as $slide)
      <div class="slide relative w-full">
        <div class="relative z-30 container mx-auto px-6 lg:px-8">
          <div id="hero-text" class="flex items-center justify-center py-24 invisible pointer-events-none md:py-36 lg:py-56 xl:py-64">
            <h1 class="font-chronicle text-c-black-100 text-center text-5xl leading-none mb-4 w-1/2 md:text-6xl md:leading-none lg:text-6xl lg:mb-8 xl:text-6.5xl" style="color: {!! $slide['color'] !!}">{!! $slide['title'] !!}</h1>
          </div>
        </div>
        <img class="absolute inset-0 object-cover object-center w-full h-full z-0" src="{!! $slide['bg']['url'] !!}" alt="">
      </div>
    @endforeach
  </div>
</section>
@endif