<?php
$usecase = !empty($args) && array_key_exists("usecase", $args) ? $args["usecase"] : null;
?>

<div class="w-full h-full overflow-hidden shadow-lg lg:w-1/2 overflow-hidden" data-controller="reveal" data-reveal-hidden-class="hidden">
  <div class="relative">
    <div class="w-full swiper home-search-card-swiper rounded-xl">
      <div class="swiper-wrapper rounded-xl">
        <?php
      $query = new WP_Query( array(
        'post_type'              => array( 'modell' ),
        'posts_per_page'         => '10',
        'orderby'                => 'rand',
        'meta_key'		=> 'nutzungsart',
        'meta_value'	=> isset($usecase) ? $usecase['slug'] : '',
      ));
  
      if ( $query->have_posts() ) :
        while ( $query->have_posts() ) :
          $query->the_post();
          $image = get_field('bildergalerie')[0];
          if( $image && $image['height'] < $image['width'] ) : ?>
            <div class="swiper-slide relative aspect-w-3 aspect-h-2 bg-gray-light">
              <?php echo wp_get_attachment_image( $image['ID'], 'six-columns-four-three', false, array('class' => 'absolute top-0 left-0 w-full') ); ?>
              <div class="text-white text-shadow-xl p-3 lg:p-5">
                <h2 class="text-lg lg:text-3xl mb-0">
                  <?php echo isset($usecase) ? $usecase['name'] : "Cargobikes"; ?>
                </h2>
                <a href="<?php the_permalink(); ?>">
                  <h3 class="text-white text-shadow-xl text-base lg:text-lg"><?php the_title(); ?></h3>
                </a>
              </div>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      ?>
      </div>
    </div>
    <button class="absolute z-10 bottom-3 lg:bottom-5 left-3 lg:left-5 button large" data-action="click->reveal#toggle">
      <?php _e('Suche'); ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
  </div>
  
  <form
    class="hidden p-3 mt-3 grid grid-cols-12 gap-y-6 gap-x-4 transition duration-100 ease-in-out"
    action="/modell"
    method="GET"
    data-reveal-target="item">
    <?php if ($usecase['slug'] == 'privat') : ?>
      <input type="hidden" name="nutzung[]" value="privat">

      <div class="col-span-12 sm:col-span-12 2xl:col-span-3">
        <label for="transport-privat" class="block text-sm font-medium text-gray-700">
          <?php _e('Was transportieren?'); ?>
        </label>
        <div class="mt-1">
          <?php
          $ladung = get_field_object('field_5e622c6c836e6');
          if (!empty($ladung['choices'])) : ?>
            <select id="ladung" name="ladung[]" class="block w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-xl">
              <option value=""><?php _e('Bitte wählen'); ?></option>
              <?php foreach($ladung['choices'] as $choice) : ?>
                <option><?php echo esc_html($choice); ?></option>
              <?php endforeach; ?>
            </select>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <label for="driving-style-private" class="block text-sm font-medium text-gray-700">
          <?php _e('Fahrweise'); ?>
        </label>
        <div class="mt-1">
          <?php
          $fahrweise = get_field_object('field_5f6c6bc5bbb04');
          if (!empty($fahrweise['choices'])) : ?>
            <select id="fahrweise" name="fahrweise[]" class="block w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-xl">
              <option value=""><?php _e('Bitte wählen'); ?></option>
              <?php foreach($fahrweise['choices'] as $choice) : ?>
                <option><?php echo esc_html($choice); ?></option>
              <?php endforeach; ?>
            </select>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <label for="engine-private" class="block text-sm font-medium text-gray-700">
          <?php _e('E-Antrieb'); ?>
        </label>
        <div class="mt-1">
          <?php
          $mklasse = get_field_object('field_5f76f86194dea');
          if (!empty($mklasse['choices'])) : ?>
            <select id="mklasse" name="mklasse[]" class="block w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-xl">
              <option value=""><?php _e('Bitte wählen'); ?></option>
              <?php foreach($mklasse['choices'] as $choice) : ?>
                <option><?php echo esc_html($choice); ?></option>
              <?php endforeach; ?>
            </select>
          <?php endif; ?>
        </div>
      </div>

      <div class="flex items-end col-span-12 lg:col-span-6 2xl:col-span-3">
        <button class="button" data-toggle="personal-search-container">
          <?php _e('Suche'); ?>
        </button>
      </div>

    <?php elseif ($usecase['slug'] == 'gewerblich') : ?>
      <input type="hidden" name="nutzung[]" value="gewerblich">

      <div class="col-span-12 sm:col-span-12 2xl:col-span-3">
        <label for="transport-privat" class="block text-sm font-medium text-gray-700">
          <?php _e('Was transportieren?'); ?>
        </label>
        <div class="mt-1">
          <?php
          $ladung = get_field_object('field_5e622c6c836e6');
          if (!empty($ladung['choices'])) : ?>
            <select id="ladung" name="ladung[]" class="block w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-xl">
              <option value=""><?php _e('Bitte wählen'); ?></option>
              <?php foreach($ladung['choices'] as $choice) : ?>
                <option><?php echo esc_html($choice); ?></option>
              <?php endforeach; ?>
            </select>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <label for="driving-style-private" class="block text-sm font-medium text-gray-700">
          <?php _e('Fahrweise'); ?>
        </label>
        <div class="mt-1">
          <?php
          $fahrweise = get_field_object('field_5f6c6bc5bbb04');
          if (!empty($fahrweise['choices'])) : ?>
            <select id="fahrweise" name="fahrweise[]" class="block w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-xl">
              <option value=""><?php _e('Bitte wählen'); ?></option>
              <?php foreach($fahrweise['choices'] as $choice) : ?>
                <option><?php echo esc_html($choice); ?></option>
              <?php endforeach; ?>
            </select>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <label for="engine-private" class="block text-sm font-medium text-gray-700">
          <?php _e('E-Antrieb'); ?>
        </label>
        <div class="mt-1">
          <?php
          $mklasse = get_field_object('field_5f76f86194dea');
          if (!empty($mklasse['choices'])) : ?>
            <select id="mklasse" name="mklasse[]" class="block w-full border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-xl">
              <option value=""><?php _e('Bitte wählen'); ?></option>
              <?php foreach($mklasse['choices'] as $choice) : ?>
                <option><?php echo esc_html($choice); ?></option>
              <?php endforeach; ?>
            </select>
          <?php endif; ?>
        </div>
      </div>

      <div class="flex items-end col-span-12 sm:col-span-12 2xl:col-span-3">
        <button class="button" data-toggle="personal-search-container">
          <?php _e('Suche'); ?>
        </button>
      </div>

    <?php endif; ?>
  </form>

</div>
