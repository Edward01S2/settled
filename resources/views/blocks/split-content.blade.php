<section id="{!! $block->block->id !!}" class="split-section">
  <div class="container mx-auto px-6 py-6 lg:px-8 lg:py-12 xl:py-16">
    <div class="flex flex-col md:flex-row">
      <div class="img-container md:w-1/2">
        <img class="w-full h-full object-cover object-center" src="{!! $image['url'] !!}" alt="">
      </div>
      <div class="content md:w-1/2 md:flex md:items-center">
        <div class="content-container py-6 md:p-10 md:pr-8 lg:p-16">
          <h3 class="font-chronicle text-3xl mb-4 md:text-4xl lg:text-5xl xl:mb-8">{!! $title !!}</h3>
          <p class="leading-7 lg:text-lg lg:leading-9 xl:text-xl">{!! $content !!}</p>
        </div>
      </div>
    </div>
  </div>
</section>