@if($show)
  <section>
    <div class="container mx-auto px-6 pb-12 md:pb-16 lg:px-8 lg:pb-20">
      <div class="uppercase font-brandon text-center font-medium text-c-gray-200 mb-8 tracking-wider md:text-lg">{!! $title !!}</div>
      <div>
        <?php echo do_shortcode('[instagram-feed]'); ?>
      </div>
    </div>
  </section>
@endif