<section id="contact">
  <div class="container mx-auto px-6 lg:px-8">
    <div class="text-center pb-8">
      <img class="mx-auto mb-6 md:h-10" src="{!! $logo['url'] !!}" alt="">
      <h2 class="uppercase font-brandon font-medium text-c-gray-200 mb-2 tracking-wider md:mb-4 md:text-lg lg:mb-8">{!! $title !!}</h2>
      <p class="lg:text-lg xl:text-xl">{!! $subtitle !!}</p>
    </div>
    <div class="bg-c-gray-300 p-6 py-10 md:p-12 md:max-w-xl md:mx-auto lg:max-w-2xl xl:p-16 xl:max-w-3xl">
      <div class="contact-form">
        @include('partials.form', ['form' => $form])
      </div>
    </div>
  </div>
</section>