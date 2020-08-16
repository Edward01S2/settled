<section id="path" class="bg-c-tan-100">
  <div class="container mx-auto px-6 py-12 md:py-20 lg:px-8 lg:py-28 xl:py-32">
    <div>
      <img id="path-text" class="mb-12 md:w-3/5 md:mx-auto lg:mb-16" src="{!! $title['url'] !!}" alt="">

      <div class="flex flex-col space-y-6 divide-y divide-c-gray-100 divide-opacity-50 mb-12 md:flex-row md:space-y-0 md:divide-y-0 md:divide-x md:items-center md:mb-16 lg:w-3/4 lg:mx-auto">
        <div class="md:mr-8 md:w-1/3 md:flex-shrink-0">
          <img class="h-10 mx-auto md:ml-auto md:mr-0 xl:h-12" src="{!! $logo['url'] !!}" alt="">
        </div>
        <div class="pt-6 md:pt-0 md:pl-8 md:text-sm xl:text-base">
          {!! $content !!}
        </div>
      </div>

      <div class="text-center">
        <h5 class="text-2xl font-chronicle lg:mb-4 xl:text-3xl">{!! $contact !!}</h5>
        <p class="lg:text-lg">{!! $subtext !!}</p>
      </div>
    </div>
  </div>
</section>