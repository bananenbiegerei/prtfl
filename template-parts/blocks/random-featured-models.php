<section class="custom-block random-featured-models">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="medium-12 cell">
        <?php if( get_field( 'beschreibung' ) ) : ?>
          <h2><?php the_field( 'beschreibung' ); ?></h2>
        <?php endif; ?>
        <div class="random-container">
          <?php
          // WP_Query arguments
          $args = array(
            'post_type'              => array( 'modell' ),
            'orderby'                => 'rand',
          );

          // The Query
          $query = new WP_Query( $args );

          // The Loop
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();?>
              <div class="random-item">
                <?php the_title();?>
                <?php $bild_anwendungsbeispiel = get_field( 'bild_anwendungsbeispiel' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $bild_anwendungsbeispiel ) : ?>
                  <?php echo wp_get_attachment_image( $bild_anwendungsbeispiel, $size ); ?>
                <?php endif; ?>
              </div>
            <?php }
          } else {
            // no posts found
          }

          // Restore original Post Data
          wp_reset_postdata();
          ?>
        </div>

      </div>
    </div>
  </div>
</section>
