@if($show)
  <section>
    <div class="container mx-auto px-6 py-12 md:py-16 lg:px-8 lg:py-20">
      <div class="uppercase font-brandon text-center text-c-gray-200 mb-8 tracking-wider md:text-lg">{!! $title !!}</div>
      <div>
        <?php echo do_shortcode('[instagram-feed]'); ?>
      </div>
    </div>
  </section>
@endif