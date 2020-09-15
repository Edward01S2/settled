<footer class="bg-c-black-100">
  <div class="container mx-auto px-6 py-12 md:py-16 lg:px-8 lg:py-20">
    <div class="flex flex-col space-y-6 lg:space-y-12">

      <a href="{{ home_url('/') }}" class="hover:opacity-50">
        <img class="h-8 mx-auto lg:h-12" src="{!! $logo['url'] !!}" alt="">
      </a>

      <div class="flex items-center justify-between py-4 md:py-8 md:space-x-12 md:mx-auto lg:space-x-20 lg:pt-0">
        @if($nav)
          @foreach($nav as $item)
            <a href="{{ $item->url }}" class="text-white text-lg xl:text-xl">
              {{ $item->label }}
            </a>
          @endforeach
        @endif
      </div>

      <div class="md:mx-24 lg:mx-40">
        <div class="text-white font-brandon uppercase tracking-wider mb-4 text-center">{!! $form_title !!}</div>
        <div class="footer-form lg:mx-auto lg:w-116">
          @include('partials.form', ['form' => $form])
        </div>
      </div>

      <div class="lg:flex lg:justify-between lg:items-center lg:border-t lg:border-c-gray-100 lg:border-opacity-25 lg:pt-12">
        
        @if($social)
          <div class="flex items-center space-x-8 pt-4 pb-8 justify-center md:pb-12 lg:py-0 lg:items-start lg:justify-start lg:w-1/3">
            @foreach($social as $item)
              <a class="hover:opacity-50" href="{!! $item['url'] !!}" target="_blank">
                <img class="h-8 lg:h-6" src="{!! $item['icon']['url'] !!}" alt="">
                {!! $item['link']['title'] !!}
              </a>
            @endforeach
          </div>
        @endif
        

        <div class="text-c-gray-800 text-center pb-4 md:pb-8 lg:pb-0 lg:w-1/3">
          {!! $content !!}
        </div>

        <div class="text-white text-center font-brandon lg:text-sm lg:w-1/3 lg:flex lg:flex-col lg:items-end lg:justify-end xl:flex xl:justify-end xl:space-x-6">
          <div class="md:pb-4 lg:pb-0 lg:text-center">
            <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
            <span> {{ $copyright }}</span>
          </div>
          <a class="lg:inline-block lg:text-center" href="{!! $privacy['url'] !!}">{!! $privacy['title'] !!}</a>
        </div>

      </div>


    </div>

  </div>
</footer>

{{-- @dump($footer) --}}
