<section id="process" class="section">
  <div class="">
    <div class="">
      <div class="overflow-hidden">
        <div class="title-container container mx-auto px-6 lg:px-8">
          @if($pre)
            <div class="font-brandon text-c-gray-200 uppercase text-center mb-4 tracking-wider md:text-left md:text-lg md:mb-6 lg:mb-8">{!! $pre !!}</div>
          @endif
          <div class="mb-8 lg:mb-12">
            <h2 class="title font-chronicle leading-none inline-block align-bottom text-center text-2xl md:text-3xl lg:text-5xl">
              {!! $title !!}
              @if($logo)
                <img class="inline-block ml-2 h-5 mb-1 md:h-7 lg:h-10 lg:ml-3 lg:mb-2" src="{!! $logo['url'] !!}" alt="">
              @endif
            </h2>
          </div>
        </div>
      </div>

      <div class="relative">
        {{-- <div class="color-swipe-study absolute bg-c-black-100 w-full h-full z-10 md:block"></div> --}}
        <div class="relative">
          <div class="">
            <div class="process-carousel w-full overflow-hidden relative flickity-resize">
              {{-- <div id="circle" class="circle p-1 z-30 absolute top-0 ml-40 mt-4 lg:ml-104">
                <svg class="h-16 w-16 overflow-visible bg-transparent fill-current" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="50" cy="50" r="50" stroke="#8e8e8e" stroke-width="2" fill="transparent" />
                </svg>
              </div> --}}
              {{-- <div class="line h-px w-full absolute bg-c-gray-1000 top-0 mt-5 z-0"></div> --}}
              {{-- <div class="line absolute border-b border-c-gray-1000 top-0 mt-18"></div> --}}
              @foreach($items as $item)

                <div id="slide-{!! $loop->iteration !!}" class="slide relative flex-shrink-0 pt-4 pb-20 ml-0 flex flex-col w-full transition duration-200 md:w-4/5 md:mb-12 lg:w-2/3 xl:w-1/2">
                  <div class="inner-container">
                    <div class="title flex items-center justify-center relative">
                      <h3 class="text-3xl inline-block font-chronicle bg-white px-8 py-6 relative z-40 transition duration-200 md:text-4xl lg:text-5xl lg:py-10">{!! $item['title'] !!}</h3>
                      <div class="circle -ml-1 relative">
                        <svg class="h-16 w-16 overflow-visible fill-current text-white transition duration-200 relative z-40 lg:h-24 lg:w-24" viewBox="-2 -2 104 104" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="50" cy="50" r="50" stroke="#8e8e8e" stroke-width="1" fill="fillCurrent" />
                        </svg>
                        @if($loop->first)
                          <div class="hidden md:block">
                            <svg id="circle" class="h-16 w-16 absolute top-0 overflow-visible bg-transparent fill-current text-c-gray-300 z-20 p-1 lg:h-24 lg:w-24" viewBox="-2 -2 104 104" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="50" cy="50" r="50" stroke="#8e8e8e" stroke-width="1" fill="fillCurrent" />
                              {{-- <circle cx="50" cy="50" r="8" stroke="#8e8e8e" stroke-width="1" fill="#8E8E8E" /> --}}
                              {{-- <line id="circle-line-left" class="hidden text-c-gray-1000" x1="0" y1="51" x2="50" y2="51" stroke="#8E8E8E" stroke-width="1" fill="#8E8E8E"/>
                              <line class="text-c-gray-1000" x1="50" y1="51" x2="100" y2="51" stroke="#8E8E8E" fill="#8E8E8E" stroke-width="1"/> --}}
                            </svg>
                          </div>
                        @endif
                      </div>
                      <div class="line-left h-px w-2/5 left-0 right-0 absolute top-0 mt-12 z-10" style="background-color: #8e8e8e;"></div>
                      <div class="line-right ml-auto h-px w-1/2 left-0 right-0 absolute top-0 mt-12 z-10 md:w-1/3" style="background-color: #8e8e8e;"></div>
                    </div>
                    <div class="inner-lower px-6 md:pr-24 md:pl-12 lg:pl-32 lg:pr-40">
                      <img class="slide-image object-cover object-center w-full h-56 mb-4 md:h-56 md:mb-8 lg:h-64" src="{!! $item['image']['url'] !!}" alt="">
                      <div class="inner-flex flex-grow">
                        <h4 class="text-c-gray-400 font-brandon text-xl mb-2 uppercase md:leading-snug md:text-2xl lg:pr-0">{!! $item['header'] !!}</h4>
                        <p class="text-black text-base flex-grow">{!! $item['content'] !!}</p>
                        @if($item['logo'])
                          <img class="mx-auto mt-4 sm:w-2/3 md:w-2/3 lg:mt-4" src="{!! $item['logo']['url'] !!}" alt="">
                        @endif
                      </div>
                    </div>
                  </div>
                </div>

              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>