<div class="relative flex flex-col overflow-hidden bg-white border border-gray-200 rounded-xl hover:shadow-xl hover:opacity-60 ease-in-out ">
  <a href="<?php the_permalink(); ?>">
    <div class="aspect-w-4 aspect-h-3 bg-gray-light">
      <?php $image = get_field('bild_anwendungsbeispiel');
      $size = 'six-columns';
      if( $image ) {
      echo wp_get_attachment_image( $image, $size, "", ["class" => "w-full h-full object-center object-cover sm:w-full sm:h-full"] );
      } ?>
    </div>
    <div class="flex flex-col flex-1 p-4">
      <?php $marke = get_field( 'marke', get_the_id()); ?>
      <?php if ( $marke ) : ?>
        <p class="text-gray-500 text-lg"><?php echo get_the_title($marke); ?></p>
      <?php endif; ?>
      <h3 class="mb-0">
        <?php the_title(); ?>
      </h3>
      <?php
      if( '' !== get_post()->post_content ) { ?>
        <p class="text-sm text-gray-500">
          <?php the_content(); ?>
        </p>
        <?php }
      ?>
      
      <div class="flex flex-col justify-end flex-1">
      <!-- <p class="text-sm italic text-gray-500">
        Filtered, active attribute
      </p> -->
      </div>
    </div>
  </a>
</div>
