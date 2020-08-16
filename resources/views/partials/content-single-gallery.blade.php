<article class="bg-c-black-100">
  <div class="container mx-auto px-6 py-6 lg:px-8 lg:pt-12">

    <div class="md:flex">
      <div class="hidden md:block md:order-1">
        @if($links['prev'])
          <a class="underline text-lg text-white lg:text-xl" href="{!! $links['prev'] !!}">Back</a>
        @else
          <a class="underline text-lg text-white lg:text-xl" href="/gallery">Back</a>
        @endif
      </div>

      <div class="hidden md:block md:order-3">
        @if($links['next'])
          <a class="underline text-lg text-white lg:text-xl" href="{!! $links['next'] !!}">Next</a>
        @else
          <a class="underline text-lg text-white lg:text-xl" href="/gallery">Next</a>
        @endif
      </div>

      <div class="text-white max-w-4xl mx-auto md:order-2 md:max-w-lg lg:max-w-2xl xl:max-w-4xl">
        <h1 class="text-white font-brandon uppercase text-2xl mb-4 lg:text-3xl">{!! get_the_title() !!}</h1>
        <p class="mb-6 lg:text-lg">{!! get_field('content') !!}</p>
        <div class="flex items-center space-x-4 mb-8">
          <div class="uppercase text-white font-brandon">Share</div>
          <div class="a2a_kit a2a_default_style">
            {{-- @dump($icons) --}}
            <a class="a2a_button_facebook transform transition duration-200 hover:scale-105 hover:opacity-75">
                <img class="h-6 w-6" src="{!! get_field('Social', 'options')[0]['icon']['url'] !!}" alt="">
                {{-- <img src="https://static.addtoany.com/buttons/custom/facebook-icon-long-shadow.png" border="0" alt="Facebook" width="27" height="27"> --}}
            </a>
            <a class="a2a_button_twitter transform transition duration-200 hover:scale-105 hover:opacity-75">
              <img class="h-6 w-6 ml-4" src="{!! get_field('Social', 'options')[1]['icon']['url'] !!}" alt="">
            </a>
            <a class="a2a_button_pinterest transform transition duration-200 hover:scale-105 hover:opacity-75">
              <img class="h-6 w-6 ml-4" src="{!! get_field('Social', 'options')[2]['icon']['url']!!}" alt="">
            </a>
          </div>
        </div>
        <div class="flex flex-col space-y-6 md:space-y-12">
          @foreach(get_field('images') as $image)
            <img class="w-full h-auto object-cover object-center" src="{!! $image['url'] !!}" alt="">
          @endforeach
        </div>

        <div class="flex items-center justify-between mt-4 text-lg md:hidden">
          @if($links['prev'])
            <a class="underline" href="{!! $links['prev'] !!}">Back</a>
          @else
            <a class="underline" href="/gallery">Back</a>
          @endif
          @if($links['next'])
            <a class="underline" href="{!! $links['next'] !!}">Next</a>
          @else
            <a class="underline" href="/gallery">Next</a>
          @endif
        </div>

      </div>

    </div>
  </div>
</article>