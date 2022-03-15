<?php $size_top = 'full'; ?>
<?php $size_thumbs = 'three-columns-four-three'; ?>
<?php $bild_anwendungsbeispiel = get_field( 'bild_anwendungsbeispiel' ); ?>
<?php $bildergalerie_images = get_field( 'bildergalerie' ); ?>
<div class="flex flex-col-reverse col-span-7">
  <!-- Image selector -->
  <div class="hidden w-full max-w-2xl mx-auto mt-6 sm:block lg:max-w-none">
    <div class="swiper gallery-thumbs single-model-swiper">
      <div class="swiper-wrapper">
        <?php if ( $bild_anwendungsbeispiel ) : ?>
          <div class="swiper-slide">
            <div class="w-full overflow-hidden rounded-xl aspect-w-4 aspect-h-3">
            <?php echo wp_get_attachment_image( $bild_anwendungsbeispiel, $size_thumbs, "", ["class" => "w-full h-full object-center object-cover","alt"=>"some"] ); ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( $bildergalerie_images ) :  ?>
          <?php foreach ( $bildergalerie_images as $bildergalerie_image ): ?>
            <div class="swiper-slide">
              <div class="w-full overflow-hidden rounded-xl aspect-w-4 aspect-h-3">
              <img class="object-cover object-center w-full h-full" src="<?php echo esc_url( $bildergalerie_image['sizes']['three-columns-four-three'] ); ?>" alt="<?php echo esc_attr( $bildergalerie_image['alt'] ); ?>" />
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="w-full">
  <div class="mb-4 swiper gallery-top single-model-swiper">
    <div class="swiper-wrapper">
      <?php if ( $bild_anwendungsbeispiel ) : ?>
        <div class="swiper-slide">
          <div class="w-full overflow-hidden rounded-xl aspect-w-4 aspect-h-3">
          <?php echo wp_get_attachment_image( $bild_anwendungsbeispiel, $size_top, "", ["class" => "w-full h-full object-center object-cover","alt"=>"some"]); ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if ( $bildergalerie_images ) :  ?>
        <?php foreach ( $bildergalerie_images as $bildergalerie_image ): ?>
          <div class="swiper-slide">
            <div class="w-full overflow-hidden rounded-xl aspect-w-4 aspect-h-3">
            <img class="object-cover object-center w-full h-full" src="<?php echo esc_url( $bildergalerie_image['sizes']['eight-columns-four-three'] ); ?>" alt="<?php echo esc_attr( $bildergalerie_image['alt'] ); ?>" />
            </div>
            <?php if( $bildergalerie_image['caption'] ) : ?>
              <p class="small"><?php echo esc_html( $bildergalerie_image['caption'] ); ?></p>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
  </div>
</div>
