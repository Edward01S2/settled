<section class="bg-c-gray-900">
  <div class="container mx-auto px-6 pt-8 md:p-8 lg:px-8">
    <div class="flex flex-col md:flex-row">
      <div class="relative mb-4 md:w-1/2 md:order-2 md:mb-0 lg:p-8 lg:pr-0">
        <img class="md:object-center md:object-cover md:w-full md:h-full" src="{!! $image['url'] !!}" alt="">
        <img class="quote-icon absolute top-0 right-0 -mt-16 -mr-3 md:h-24 md:-mr-6 md:-mt-12 lg:h-32 lg:-mr-5 xl:-mr-6" src="{!! $icon['url'] !!}" alt="">
      </div>
      <div class="md:w-1/2 md:order-1 md:pb-6 lg:pt-6 lg:pb-8 xl:pt-8 xl:pr-12">
        <h4 class="font-brandon tracking-wider text-c-gray-200 uppercase text-sm mb-2 lg:text-base lg:mb-4 xl:text-lg xl:mb-8">{!! $title !!}</h4>
        <div class="quote-carousel pb-12 md:pb-0">
          @foreach($quotes as $quote)
            <div class="w-full text-c-black-100 md:pb-8 xl:pb-12">
              <p class="leading-7 mb-2 font-chronicle md:pr-12 lg:text-2xl lg:leading-10 xl:mb-4">{!! $quote['quote'] !!}</p>
              <div class="font-brandon text-sm lg:text-base xl:text-lg">{!! $quote['author'] !!}</div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>