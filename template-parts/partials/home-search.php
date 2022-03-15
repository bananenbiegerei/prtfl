<div class="bg-blue bg-home-top bg-no-repeat bg-right-top">
  <div class="xl:container mx-auto p-5">
    <?php if( get_field('willkommens_uberschrift', 'option') ): ?>
      <div class="mb-16 mx-auto text-white text-center">
        <h1 class="text-4xl lg:text-6xl"><?php the_field('willkommens_uberschrift', 'option'); ?></h1>
        <a href="#quick-search" class="button mb-4 lg:hidden">
          <?php _e('Schnellsuche'); ?>
        </a>
        <?php if( get_field('claim','option') ): ?>
        <a href="#quick-search">
          <p class="font-bold text-2xl lg:text-4xl bg-white text-blue rounded-full inline transform rotate-2 py-2 px-4">
            <?php the_field('claim','option'); ?>
          </p>
        </a>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <?php if ( have_rows( 'home_illus', 'option' ) ) : ?>
      
      <div class="grid gap-4 grid-cols-1 sm:grid-cols-3 text-white font-bold text-xl lg:text-2xl text-center">
          <?php while ( have_rows( 'home_illus', 'option' ) ) : the_row(); ?>
            <div>
              <p class="mb-8">
                <?php the_sub_field( 'description' ); ?>
              </p>
              <?php $illu = get_sub_field( 'illu' ); ?>
              <?php $size = 'full'; ?>
              <?php if ( $illu ) : ?>
                <?php echo wp_get_attachment_image( $illu, $size, "", ["class" => "inline mb-2 lg:mb-0 max-w-xs lg:max-w-full"] ); ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
      </div>
      <?php endif; ?>
  </div>
</div>
<div class="relative" id="quick-search">
  <div class="2xl:container mx-auto px-5">
    <div class="flex flex-wrap space-y-8 lg:flex-nowrap lg:space-x-8 lg:space-y-0">
      <?php
      $usecases = [
        ['slug' => 'privat', 'name' => 'Private Cargobikes'],
        ['slug' => 'gewerblich', 'name' => 'Gewerbliche Cargobikes']
      ];
      foreach($usecases as $usecase) :
        get_template_part('template-parts/partials/home-search-card', null, array('usecase' => $usecase));
      endforeach; ?>
    </div>
  </div>
  <div class="triangle-container">
    <div class="css-triangle">
      
    </div>
  </div>
</div>

