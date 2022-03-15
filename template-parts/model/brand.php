<?php $marke = get_field( 'marke' ); ?>
<?php if ( $marke ) : ?>
  <?php $post = $marke;
  setup_postdata( $post );
  $logo = get_field( 'logo' );
  $size = 'four-columns';
  if ( $logo ) : ?>
  <tr>
    <td>
      <ul role="list" class="space-y-12 sm:grid sm:grid-cols-1 sm:gap-12 sm:space-y-0 lg:gap-x-8">
        <li>
          <div class="flex items-center space-x-4 lg:space-x-6">
            <a href="<?php the_permalink(); ?>" class="w-16 h-16 rounded-full lg:w-36 lg:h-36 bg-white overflow-hidden flex items-center justify-center">
              <div class="m-4">
                <?php echo wp_get_attachment_image( $logo, $size ); ?>
              </div>
            </a>
            <div class="font-medium text-lg leading-6 space-y-1">
              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
            </div>
          </div>
        </li>
      </ul>
    </td>
  </tr>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
