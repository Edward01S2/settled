<nav id="nav" x-data="{open: false}" class="bg-white w-full z-50 py-4 lg:py-8">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="flex justify-between items-center md:justify-between lg:justify-between">

      <div class="hidden nav-container items-center md:flex md:space-x-20 lg:space-x-24 xl:space-x-32">
        @foreach ($navigation as $item)
          @if($loop->index <= 1)
            <a class="nav-link font-chronicle hidden leading-5 text-c-black-100 focus:outline-none group focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out hover:opacity-50 md:block lg:text-lg xl:text-xl{{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
              <div class="nav-text group-hover:text-c-gold-100">{{ $item->label }}</div>
            </a>
          @endif
        @endforeach
      </div>

      <div class="flex md:px-16 lg:px-24">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ home_url('/') }}" class="pb-2 hover:opacity-50">
            <img id="logo-main" class="h-8 w-auto lg:h-12" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
          </a>
          {{-- <img class="block h-12 w-auto" src="{!! $mobile_logo['url'] !!}" alt="{{ $siteName }}" /> --}}
        </div>
      </div>

      <div class="hidden nav-container items-center md:flex md:space-x-20 lg:space-x-24 xl:space-x-32">
        @foreach ($navigation as $item)
          @if($loop->index > 1)
            <a class="nav-link font-chronicle hidden leading-5 text-c-black-100 focus:outline-none group focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out hover:opacity-50 md:block lg:text-lg xl:text-xl {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
              <div class="nav-text group-hover:text-c-gold-100">{{ $item->label }}</div>
            </a>
          @endif
        @endforeach
      </div>

      <div class="-mr-2 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-c-black-100 focus:outline-none transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
          <!-- Icon when menu is closed. -->
          <svg :class="{'hidden': open, 'block': !open }" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <!-- Icon when menu is open. -->
          <svg :class="{'block': open, 'hidden': !open }" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div :class="{'block': open, 'hidden': !open }" class="bg-white sm:hidden" x-cloak>
    <div @click.away="open = false" class="py-4">
      <ul class="flex flex-col divide-y divide-c-gray-100 divide-opacity-50 px-6">
        @foreach ($navigation as $item)
          <li class="group relative text-center {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
            <a class="block py-4 text-xl text-c-black-100 tracking-wider hover:font-semibold focus:outline-none transition duration-150 ease-in-out" href="{{ $item->url }}">
              {{ $item->label }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>