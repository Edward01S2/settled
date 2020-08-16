<section class="build-block bg-c-blue-200">
  <div class="md:px-0 md:py-0">
    <div class="flex flex-col md:flex-row">

      <div class="relative md:w-6/12">
        <img class="object-cover object-center inset-0 w-full h-full lg:absolute" src="{!! $image['url'] !!}" alt="">
        <div class="overlay absolute inset-0 w-full h-full z-20"></div>
      </div>
      

      <div class="content-container px-6 py-16 text-center md:w-6/12 md:text-left md:flex md:items-center md:justify-center md:py-20 lg:justify-start lg:py-36 xl:py-48">
        <div class="text-white md:w-4/5 lg:pl-24 xl:max-w-screen-sm">
          <h2 class="font-brandon uppercase text-2xl leading-tight tracking-wider mb-4 lg:text-3xl">{!! $title !!}</h2>
          <p class="mb-8 leading-normal opacity-75 lg:text-lg xl:text-xl xl:pr-24">{!! $content !!}</p>
          <a class="font-brandon uppercase font-bold text-c-tan-200 text-sm tracking-wider xl:text-base hover:text-c-tan-100" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
        </div>
      </div>


    </div>
  </div>

</section>